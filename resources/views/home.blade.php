@extends('layouts.app')

@push('styles')
<link href="/css/pages/home.css" rel="stylesheet">
@endpush

@section('content')
    @include('parts.header',[
    'background_image' => '/img/backgrounds/home/v2.jpg',
    'heading'=>'ВЫБРАТЬСЯ ЗА 60 МИНУТ',
    ])
    {{--<section class="intro">
        <div class="layer">
        </div>
        <div class="section-content">

            <h1 class="heading">ВЫБРАТЬСЯ ЗА 60 МИНУТ</h1>
            <a href="#" type="button" class="quest-button">CHOSE YOUR MISSION</a>
        </div>
    </section>--}}

    <section class="tasks">
        <div class="section-content">

            <div class="heading">
                <p><i class="fa fa-key" aria-hidden="true"></i></p>
                <h2>GAME IN REALITY</h2>
            </div>

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
            <div class="quest-half"><img src="/img/quests/1.jpg"></div>
            <div class="quest-half quest-desc">
                <div class="wrap">
                    <div class="layer"></div>

                    <div class="text">

                        <div class="info">
                            <h3>MODER ART MUSEUM</h3>
                            <p>Lorem ipsum dolor sit amet, idque deserunt indoctum no mei, ius ea solum vocibus
                                platonem, has mazim appetere eu. Pri delenit minimum legendos in, in cum lorem lucilius
                                hendrerit. Cibo assum mucius cu eum. Minim mediocrem ea qui, vix et enim meliore.</p>
                            <div class="additional-info">
                                <p>Wall sterrt</p>
                                <p>2 - 4 people</p>
                                <p>60 min</p>
                            </div>

                            <div class="button-wrap">
                                <a href="#" class="quest-button">ПОДРОБНЕЕ</a>
                            </div>

                        </div>
                        <div class="price">
                            <div class="price-circle">
                                <p class="price-value">666 грн.</p>
                            </div>
                        </div>

                    </div>
                    <img src="/img/quests/1.jpg">
                </div>
            </div>


            <div class="quest-half quest-desc">
                <div class="wrap">
                    <div class="layer"></div>

                    <div class="text">

                        <div class="info">
                            <h3>MODER ART MUSEUM</h3>
                            <p>Lorem ipsum dolor sit amet, idque deserunt indoctum no mei, ius ea solum vocibus
                                platonem, has mazim appetere eu. Pri delenit minimum legendos in, in cum lorem lucilius
                                hendrerit. Cibo assum mucius cu eum. Minim mediocrem ea qui, vix et enim meliore.</p>
                            <div class="additional-info">
                                <p>Wall sterrt</p>
                                <p>2 - 4 people</p>
                                <p>60 min</p>
                            </div>

                            <div class="button-wrap">
                                <a href="#" class="quest-button">ПОДРОБНЕЕ</a>
                            </div>

                        </div>
                        <div class="price">
                            <div class="price-circle">
                                <p class="price-value">666 грн.</p>
                            </div>
                        </div>

                    </div>
                    <img src="/img/quests/2.jpg">
                </div>
            </div>
            <div class="quest-half"><img src="/img/quests/2.jpg"></div>

            <div class="quest-half"><img src="/img/quests/3.jpg"></div>
            <div class="quest-half quest-desc">
                <div class="wrap">
                    <div class="layer"></div>

                    <div class="text">

                        <div class="info">
                            <h3>MODER ART MUSEUM</h3>
                            <p>Lorem ipsum dolor sit amet, idque deserunt indoctum no mei, ius ea solum vocibus
                                platonem, has mazim appetere eu. Pri delenit minimum legendos in, in cum lorem lucilius
                                hendrerit. Cibo assum mucius cu eum. Minim mediocrem ea qui, vix et enim meliore.</p>
                            <div class="additional-info">
                                <p>Wall sterrt</p>
                                <p>2 - 4 people</p>
                                <p>60 min</p>
                            </div>

                            <div class="button-wrap">
                                <a href="#" class="quest-button">ПОДРОБНЕЕ</a>
                            </div>

                        </div>
                        <div class="price">
                            <div class="price-circle">
                                <p class="price-value">666 грн.</p>
                            </div>
                        </div>

                    </div>
                    <img src="/img/quests/3.jpg">
                </div>
            </div>

        </div>

    </section>

@endsection
