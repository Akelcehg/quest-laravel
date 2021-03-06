@extends('layouts.app')

@push('styles')
<link href="/css/pages/quests.css" rel="stylesheet">
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
                                <a href="/quest/temp" class="quest-button">ПОДРОБНЕЕ</a>
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
