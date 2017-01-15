@extends('layouts.app')

@push('styles')
<link href="/css/pages/quest.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.quest_header',['background_image' => '/img/quests/4.jpg','heading'=>'Название квеста'])

    <section class="gray" style="height: auto; padding: 25px 0 25px 0;">
        <div class="quest-description" style="margin: auto; width: 90%;display: flex;flex-wrap: wrap;">

            <div class="text">
                <h1>НАЗВАНИЕ КВЕСТА</h1>
                <p class="description" style="text-align: justify; margin-top: 25px;">Lorem ipsum dolor sit amet,
                    consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

                <p class="rules" style="">
                <ul style="border-left: 4px solid red; list-style: none; padding: 10px 0 5px 10px;">
                    <li style="padding-bottom: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do
                        eiusmod tempor incididunt ut
                        labore
                    </li>
                    <li style="padding-bottom: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do
                        eiusmod tempor incididunt ut
                        labore
                    </li>
                    <li style="padding-bottom: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscingelit, sed do
                        eiusmod tempor incididunt ut
                        labore
                    </li>
                </ul>
            </div>
            <div class="space"></div>
            <div class="info">
                <div class="price"
                     style="background-color: #1f2225; display: flex; justify-content: center; width:100%; height: 150px;">
                    <p style="color: white; font-size: 24px;margin: auto; padding: 0;">666 грн.</p>
                </div>
                <div class="info"
                     style="background-color: white; display: flex; width:100%; color: #6c7176; flex-direction: column; height: 100%;
                    justify-content: space-around;">
                    <p style="font-size: 18px;">2 - 4 people</p>
                    <p style="font-size: 18px;">60 minutes</p>
                    <p style="font-size: 18px;">Водопроводная 1а</p>
                    {{--<a href="#" class="quest-button">БРОНИРОВАТь</a>--}}
                </div>
            </div>

        </div>
    </section>

    <div class="quest-map" id="map"></div>

    {{--<section class="white" style="height: auto;">

        <div style="margin: auto; width: 90%;display: flex;flex-wrap: wrap;">

            <div class="mont-switcher" style="display: flex;margin-top: 25px; width:100%; justify-content: center;">
                --}}{{--<a class="arrow" href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>--}}{{--
                <p class="month-name" style="font-weight:bolder;padding: 5px 10px 5px 10px;">JANUARY</p>
                --}}{{--<a class="arrow" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>--}}{{--
            </div>
            <div class="date-wrap"
                 style="width: 100%; margin-top: 20px; display: flex; height: auto; flex-wrap: wrap;">
                @for($i = 1; $i <= 7; $i++)
                    <div class="time-container"
                         style="box-sizing: border-box; padding: 5px; width: 150px;">
                        <div style="border: 3px solid rgba(76,78,81,0.3); height: auto;padding: 20px 0 15px 0;text-align: center;">
                            <p class="day" style="font-size: 20px;">{{$i}}</p>
                            <p class="week" style="font-size: 14px;">Monday</p>
                            <p class="available" style="font-size: 14px;">Доступно 8</p>
                            <a href="#" class="quest-button black small">БРОНИРОВАТЬ</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>--}}

    <section class="white booking-times-section desktop">
        <div class="desktop-times-wrap">
            <div class="row">
                <div class="date">
                    @for($i=1;$i<8;$i++)
                        <div class="side-day-name">
                            <p>3 january</p>
                            <p>Monday</p>
                        </div>
                    @endfor
                </div>
                <div class="times">
                    <div class="times-scroll">
                        @for($j=1;$j<8;$j++)
                            <div class="times-wrap">
                                <?php $w = '4%';?>
                                <div class="times-row">
                                    @for($i = 1; $i <= 18; $i++)
                                        <div style="width: <?=$w?>; margin-left: 1.5%;">
                                            <div class="time">
                                                15:21
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="prices-row">
                                    @for($i = 1; $i <= 18; $i++)
                                        <div class="price">
                                            <p style="font-size: 12px; ">
                                                500 грн.</p>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white booking-times-section mobile">

        @for ($i=0;$i<=7;$i++)

            <div class="date">
                <p>3 january</p>
                <p>Monday</p>
            </div>
            <div class="time-line">
                <div class="times">
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                    <div class="time">15:21</div>
                </div>
                <div class="price">
                    500 грн.
                </div>
            </div>
        @endfor
    </section>

    @push('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&callback=initMap">
    </script>

    <script src="/js/map.js"></script>
    @endpush

@endsection
