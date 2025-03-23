<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Models\Posel;

class SejmAPI extends Controller
{
    private $baseUrl = "https://api.sejm.gov.pl/sejm/term10";
    private $basePoselsUrl = "https://api.sejm.gov.pl/sejm/term10/MP";

    private function fetchData(string $url): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception("Błąd cURL: " . curl_error($ch));
        }

        curl_close($ch);

        return json_decode($response, true) ?? [];
    }

    public function getPoslowie(): array
    {
        $data = $this->fetchData($this->basePoselsUrl);
        $poslowie = [];

        foreach ($data as $posel) {
            $poslowie[] = new Posel(
                $posel['id'],
                $posel['active'],
                $posel['profession'] ?? null,
                $posel['firstLastName'],
                $posel['voivodeship'],
                $posel['club'] ?? "Brak danych",
                $posel['accusativeName'] ?? null,
                $posel['birthDate'] ?? null,
                $posel['birthLocation'] ?? null,
                $posel['districtName'] ?? null,
                $posel['districtNum'] ?? null,
                $posel['educationLevel'] ?? null,
                $posel['email'] ?? null,
                $posel['firstName'] ?? null,
                $posel['genitiveName'] ?? null,
                $posel['lastFirstName'] ?? null,
                $posel['lastName'] ?? null,
                $posel['numberOfVotes'] ?? null
            );
        }

        return $poslowie;
    }

    public function getListaPosiedzen(): array
    {
        $posiedzenia = [];
        $posiedzenieNr = 1;

        while (true) {
            $url = "https://api.sejm.gov.pl/sejm/term10/votings/{$posiedzenieNr}";
            $data = $this->fetchData($url);

            if (empty($data)) {
                break;
            }

            $posiedzenia[] = [
                'nr_posiedzenia' => $posiedzenieNr,
                'data' => substr($data[0]['date'],0,10) ?? null
            ];

            $posiedzenieNr++;
        }

        return $posiedzenia;
    }

    public function getGlosowaniaPosla(int $poselId): array
    {
        $glosowania = [];
        $posiedzenia = $this->getListaPosiedzen();

        foreach ($posiedzenia as $posiedzenie) {
            $posiedzenieNr = $posiedzenie['nr_posiedzenia'];
            $date = $posiedzenie['data'];

            if (!$date) {
                continue;
            }

            $url = "https://api.sejm.gov.pl/sejm/term10/MP/{$poselId}/votings/{$posiedzenieNr}/{$date}";
            $data = $this->fetchData($url);

            foreach ($data as $glos) {
                $glosowania[] = [
                    'date' => substr($glos['date'], 0,10),
                    'kind' => $glos['kind'],
                    'title' => $glos['title'],
                    'topic' => $glos['topic'] ?? null,
                    'voting_number' => $glos['votingNumber'],
                    'vote' => $glos['vote'],
                    'list_votes' => $glos['listVotes'] ?? null
                ];
            }
        }

        return $glosowania;
    }


    public function importPoslowie()
    {
        $poslowie = $this->getPoslowie();

        foreach ($poslowie as $posel) {
            $existing_post = get_page_by_title($posel->firstLastName, OBJECT, 'posel');

            if (!$existing_post) {
                $post_id = wp_insert_post([
                    'post_type'   => 'posel',
                    'post_title'  => $posel->firstLastName,
                    'post_status' => 'publish'
                ]);

                if ($post_id) {
                    update_field('club', $posel->club, $post_id);
                    update_field('email', $posel->email, $post_id);
                    update_field('firstName', $posel->firstName, $post_id);
                    update_field('lastName', $posel->lastName, $post_id);
                    update_field('districtName', $posel->districtName, $post_id);
                    update_field('voivodeship', $posel->voivodeship, $post_id);
                    update_field('birthDate', $posel->birthDate, $post_id);
                    update_field('birthLocation', $posel->birthLocation, $post_id);
                    update_field('educationLevel', $posel->educationLevel, $post_id);
                    update_field('numberOfVotes', $posel->numberOfVotes, $post_id);
                    update_field('profession', $posel->profession, $post_id);
                    update_field('active', $posel->active, $post_id);
                    update_field('id', $posel->id, $post_id);

                    $glosowania = $this->getGlosowaniaPosla($posel->id);
                    $acf_repeater_data = [];

                    foreach ($glosowania as $glos) {
                        $acf_repeater_data[] = [
                            'title' => $glos['title'],
                            'topic' => $glos['topic'] ?? '',
                            'vote'  => $glos['vote']
                        ];
                    }

                    update_field('votes', $acf_repeater_data, $post_id);
                }
            }
        }
    }
}
