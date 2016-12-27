@extends('layouts.app')

@push('styles')
<link href="/css/about.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.header',[
    'background_image' => '/img/backgrounds/quests/maze.jpg',
    'heading'=>'КВЕСТХАУС - ЭТО КВЕСТЫ В РЕАЛЬНОСТИ И ИГРОВОЕ ПРОСТРАНСТВО'
    ])
    {{--
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

        </section>--}}
    {{--<section>--}}


    {{--<h3 class="text-center">Квестхаус - это квесты в реальности и игровое пространство</h3>--}}

    <section style="width: 80%; margin: 0 auto; display: flex; background-color: white;">

        <ul class="timeline">
            <li>
                <div class="timeline-image icon">
                    <i class="fa fa-cog fa-5x" style="margin-top: 35px; margin-left: 40px;"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-body">
                        <p class="text-muted">
                            Квест - изначально являлся жанром компьютерной игры, но за пару лет квесты стали весьма
                            популярной интеллектуальной игрой в реальной жизни.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image icon">
                    <i class="fa fa-hourglass-o fa-5x" style="margin-top: 35px; margin-left: 40px;"></i>
                </div>
                <div class="timeline-panel">

                    <div class="timeline-body">
                        <p class="text-muted">
                            Каждый квест длится 60 минут, за которые Ваша команда станет героями истории, которую
                            Вам нужно разгадать. Вас будут ждать загадки, головоломки, решая их, Вы сможете одержать
                            победу и выйти победителями.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
            </li>
            <li>
                <div class="timeline-image icon">
                    <i class="fa fa-mortar-board fa-5x" style="margin-top: 35px; margin-left: 25px;"></i>
                </div>
                <div class="timeline-panel">

                    <div class="timeline-body">
                        <p class="text-muted">
                            Игры такого формата существуют по всему миру и пользуются большой популярностью. Теперь
                            у Вас есть возможность испытать себя в квест-комнате. Для игры участникам не требуется
                            специальных знаний и физической силы.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image icon">
                    <i class="fa fa-male fa-5x" style="margin-top: 35px; margin-left: 52px;"></i>
                </div>
                <div class="timeline-panel">

                    <div class="timeline-body">
                        <p class="text-muted">
                            Пройти квест можно командой от 2 до 4-х человек и быть старше 12 лет, также возможно
                            участие от 8 лет со взрослыми.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
            </li>
            <li>
                <div class="timeline-image icon">
                    <i class="fa fa-lightbulb-o fa-5x" style="margin-top: 35px; margin-left: 50px;"></i>
                </div>
                <div class="timeline-panel">

                    <div class="timeline-body">
                        <p class="text-muted">
                            "Квестхаус" - это больше чем просто квест... Мы объединяем идею с сюжетом в единый живой
                            «организм». Каждая комната кардинально отличается своим эксклюзивным сценарием, где есть
                            свои тайники и загадки. Буря эмоций вам гарантирована!
                        </p>
                    </div>
                </div>
                <div class="line"></div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image icon">
                    <i class="fa fa-gamepad fa-5x" style="margin-top: 30px; margin-left: 35px;"></i>
                </div>
                <div class="timeline-panel">

                    <div class="timeline-body">
                        <p class="text-muted">
                            В игровом пространстве можно поиграть в PS 3 и настольные игры. Попить кофе и чай с
                            вкусными печеньками. Список настольных игр и на PS3 можно узнать у администратора.
                        </p>
                    </div>
                </div>
                <div class="line"></div>
            </li>
            <li>
                <div class="timeline-image icon">
                    <i class="fa fa-smile-o fa-5x" style="margin-top: 35px; margin-left: 40px;"></i>
                </div>
                <div class="timeline-panel">

                    <div class="timeline-body">
                        <p class="text-muted">
                            Мы всегда рады для Вас провести любое торжество у нас в игровом пространстве, где Вы
                            можете дружно проходить квест, играть в PS3 и настольные игры.
                        </p>
                    </div>
                </div>
            </li>
        </ul>

    </section>

    {{--</section>--}}
@endsection
