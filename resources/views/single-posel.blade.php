@extends('layouts.app')

@section('content')

@php
    $posel_id = get_field('id', get_the_ID());
    $votes = get_field('votes', get_the_ID());
@endphp



<section class="posel-section">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ home_url() }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ get_the_title() }}</li>
                </ol>
              </nav>
        </div>
        <div class="col-12">


            <div class="box box-outline bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <img class="envoy-image-large" src="https://api.sejm.gov.pl/sejm/term10/MP/{{get_field('id', get_the_ID())}}/photo" height="auto" width="100%" alt="image of {{get_the_title()}}" title={{ get_the_title() }} />
                    </div>
                    <div class="offset-lg-1 col-lg-8">
                        <h1>{{ get_the_title() }}</h1>
                        <div class="d-flex flex-row align-items-center justify-content-between">


                        <h3 class="mb-3">{{ get_field('club', get_the_ID() )}}</h3>
                        <img class="envoy-logo" src="https://api.sejm.gov.pl/sejm/term10/clubs/{{ get_field('club', get_the_ID()) }}/logo" />
                        </div>
                    </div>
                </div>
                <hr />
                <p>Aktywny: {!! get_field('active', get_the_ID()) ? "<b>tak</b>" : "<b>nie</b>" !!}</p>
                <p class="mt-3">Zawód: <b>{{ get_field('profession', get_the_ID()) }}</b></p>
                <p>Wykształcenie: <b>{{ get_field('educationlevel', get_the_ID()) }}</b></p>
                <p>Email: <b><a href="mailto{{get_field('email', get_the_ID())}}">{{ get_field('email', get_the_ID()) }}</a></b></p>
                <p>Data urodzenia: <b>{{ get_field('birthDate', get_the_ID()) }}</b></p>
                <p>Miejsce urodzenia: <b>{{ get_field('birthLocation', get_the_ID()) }}</b></p>
                <p>Region: <b>{{ get_field('districtName', get_the_ID()) }}</b></p>
                <p>Województwo: <b>{{ get_field('voivodeship', get_the_ID()) }}</b></p>
                <p>Liczba uzyskanych głosów: <b>{{ get_field('numberOfVotes', get_the_ID()) }}</b></p>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="box box-outline bg-white">
                @php
                    $votesLength = 0;
                    $validVotes = [];
                @endphp

                @foreach ($votes as $vote)
                    @if(in_array($vote['vote'], ['YES', 'NO', 'ABSTAIN']))
                        @php
                            $validVotes[] = $vote;
                            $votesLength++;
                        @endphp
                    @endif
                @endforeach
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-medium mb-4">Głosowania</h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <p>Liczba głosowań: <b>{{ $votesLength  }}</b></p>
                    </div>
                </div>
                <div class="votes-wrapper">
            @if(!empty($votes))
                @foreach ($votes as $vote)
                <div class="row border-top py-3">
                    <div class="col-lg-9">

                        <span>{{ $vote['title'] }}</span><br />
                        @if($vote['title'] != $vote['topic'])
                        <span><i>{{ $vote['topic'] }}</i></span>
                        @endif

                    </div>
                    <div class="col-lg-3 fw-bold text-lg-end pe-5">
                        @switch($vote['vote'])
                            @case('VOTE_VALID')
                            <span>Głos wazny</span>
                            @break
                            @case('YES')
                                <span>Tak</span>
                                @break
                            @case('NO')
                                <span>Nie</span>
                                @break
                            @case('ABSTAIN')
                                <span>Wstrzymał się</span>
                                @break
                            @case('ABSENT')
                                <span>Nie głosował</span>

                            @break
                            @default
                                <span>{{ $vote['vote'] }}</span>
                        @endswitch
                    </div>
                </div>
                @endforeach
            @else
                <p>Brak dostępnych głosowań dla tego posła.</p>
            @endif
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
