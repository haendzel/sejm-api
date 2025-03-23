<?php

namespace App\Models;

class Posel
{
    public $id;
    public $active;
    public $profession;
    public $firstLastName;
    public $voivodeship;
    public $club;
    public $photo;
    public $accusativeName;
    public $birthDate;
    public $birthLocation;
    public $districtName;
    public $districtNum;
    public $educationLevel;
    public $email;
    public $firstName;
    public $genitiveName;
    public $lastFirstName;
    public $lastName;
    public $numberOfVotes;

    public function __construct(
        $id,
        $active,
        $profession,
        $firstLastName,
        $voivodeship,
        $club,
        $accusativeName = null,
        $birthDate = null,
        $birthLocation = null,
        $districtName = null,
        $districtNum = null,
        $educationLevel = null,
        $email = null,
        $firstName = null,
        $genitiveName = null,
        $lastFirstName = null,
        $lastName = null,
        $numberOfVotes = null
    ) {
        $this->id = $id;
        $this->active = $active;
        $this->profession = $profession;
        $this->firstLastName = $firstLastName;
        $this->voivodeship = $voivodeship;
        $this->club = $club ?? "Brak danych";
        $this->photo = "https://api.sejm.gov.pl/sejm/term10/MP/{$id}/photo";
        $this->accusativeName = $accusativeName;
        $this->birthDate = $birthDate;
        $this->birthLocation = $birthLocation;
        $this->districtName = $districtName;
        $this->districtNum = $districtNum;
        $this->educationLevel = $educationLevel;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->genitiveName = $genitiveName;
        $this->lastFirstName = $lastFirstName;
        $this->lastName = $lastName;
        $this->numberOfVotes = $numberOfVotes;
    }
}