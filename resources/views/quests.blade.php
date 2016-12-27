@extends('layouts.app')

@push('styles')
<link href="/css/quests.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.header',['background_image' => '/img/backgrounds/quests/maze.jpg','heading'=>'ВЫБЕРИТЕ ОДИН ИЗ КВЕСТОВ'])

    <section class="white">
        <div class="section-content">
            <p><i class="fa fa-key" aria-hidden="true"></i></p>
            <h2 class="heading">THE ROOMS</h2>
        </div>
    </section>

    <section class="quests">
        <div class="wrap">
            <div class="half"><img src="/img/quests/1.jpg"></div>
            <div class="half quest-desc">
                <div class="wrap">
                    <div class="layer"></div>
                    <div class="text">dasdas</div>
                    <img src="/img/quests/1.jpg">
                </div>
            </div>

            <div class="half">2</div>
            <div class="half"><img src="/img/quests/2.jpg"></div>

            <div class="half"><img src="/img/quests/3.jpg"></div>
            <div class="half">3</div>
        </div>

    </section>
@endsection
