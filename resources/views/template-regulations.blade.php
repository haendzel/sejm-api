{{--
  Template Name: Regulations Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.intro-regulations')
    <div class="py-5 bg-white">
        @include('partials.content-regulations')
    </div>
@endsection
