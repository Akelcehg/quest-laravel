@extends('layouts.app')

@push('styles')
<link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')

    <section class="intro">
        <div class="layer">
        </div>
        <div class="section-content">

            <h1 class="heading">TRY TO FIND OUT FOR 60 MINUTES</h1>
            <a href="#" type="button" class="quest-button">CHOSE YOUR MISSION</a>
        </div>
    </section>

    <section class="tasks">
        <div class="section-content">
            <div class="left-side">
                <div class="task-container">
                    <p class="heading text-right">TASK 01</p>

                    <p class="desc text-right l">Logical problems and puzzles. No physical effort . Only wit and
                        observation.
                        Everything is in
                        your head. </p>

                </div>
                <div class="task-container">
                    <p class="heading text-right">TASK 02</p>
                    <p class="desc text-right l">Logical problems and puzzles. No physical effort . Only wit and
                        observation.
                        Everything is in
                        your head. </p>
                </div>
            </div>

            <div class="task-center mid">
                <img class="key" src="img/key_b.png">
            </div>
            <div class="right-side">
                <div class="task-container">
                    <p class="heading text-left">TASK 03</p>
                    <p class="desc text-left r">Logical problems and puzzles. No physical effort . Only wit and
                        observation.
                        Everything is in
                        your
                        head. </p>

                </div>
                <div class="task-container">
                    <p class="heading text-left">TASK 04</p>
                    <p class="desc text-left r">Logical problems and puzzles. No physical effort . Only wit and
                        observation.
                        Everything is in
                        your head. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics">
        <div class="wrap">
            <div class="one-third content">
                <p class="count">2351</p>
                <p class="desc"> / счастивых клиентов</p>
            </div>
            <div class="one-third bordered content">
                <p class="count">1158</p>
                <p class="desc"> / вышло из комнат</p>
            </div>
            <div class="one-third content">
                <p class="count">2158</p>
                <p class="desc"> / сыграно игр</p>
            </div>
        </div>
    </section>

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
            <div class="half quest-desc">
                <div class="wrap">
                    <div class="layer"></div>
                    <div class="text">dasdas</div>
                    <img src="/img/quests/2.jpg">
                </div>
            </div>
            <div class="half"><img src="/img/quests/2.jpg"></div>

            <div class="half"><img src="/img/quests/3.jpg"></div>
            <div class="half quest-desc">
                <div class="wrap">
                    <div class="layer"></div>
                    <div class="text">dasdas</div>
                    <img src="/img/quests/3.jpg">
                </div>
            </div>
        </div>

    </section>

@endsection
