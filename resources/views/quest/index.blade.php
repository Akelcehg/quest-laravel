@extends('layouts.app')

@push('styles')
<link href="/css/quests.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.quest_header',['background_image' => '/img/quests/4.jpg','heading'=>'Название квеста'])

    <section class="gray" style="height: auto; padding: 25px 0 25px 0;">
        <div class="quest-description" style="margin: auto; width: 90%;display: flex;flex-wrap: wrap;">

            <div style="width: 65%;">
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
                </p>
            </div>
            <div style="width: 5%;"></div>
            <div style="width: 30%; display: flex; flex-direction: column;">
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

    {{--<div class="quest-map" id="map"></div>--}}

    {{--<section class="white" style="height: auto;">

        <div style="margin: auto; width: 90%;display: flex;flex-wrap: wrap;">

            <div class="mont-switcher" style="display: flex;margin-top: 25px; width:100%; justify-content: center;">
                <a class="arrow" href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <p class="month-name" style="font-weight:bolder;padding: 5px 10px 5px 10px;">JANUARY</p>
                <a class="arrow" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="date-wrap"
                 style="width: 100%; margin-top: 20px; display: flex; height: auto; flex-wrap: wrap;">
                @for($i = 1; $i <= 31; $i++)
                    <div class="time-container"
                         style="/*width: 14.28571428571429%;*/ box-sizing: border-box; padding: 5px; width: 150px; /*min-width: 150px;max-width: 150px;*/">
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

    <section class="white" style="height: auto; padding-bottom: 25px; padding-top: 25px;">
        <div style="margin: auto; width: 100%;display: flex;flex-wrap: wrap;">
            <div class="row"
                 style="display: flex;flex-wrap: wrap;justify-content: center;width: 100%; /*height: 80px;*/">

                <div class="date" style="width: 10%;
                box-sizing:border-box;
    overflow: hidden;
                display: flex; /*margin: auto; */justify-content: center; flex-direction: column;">
                    <div>
                        <p style="padding: 5px 0 5px 0;">3 january</p>
                        <p style="padding: 5px 0 5px 0;">Monday</p>
                    </div>
                    <div style="margin-top: 10px;">
                        <p style="padding: 5px 0 5px 0;">3 january</p>
                        <p style="padding: 5px 0 5px 0;">Monday</p>
                    </div>

                </div>
                {{--<div class="date" style="width: 10%;
                    box-sizing:border-box;
                        height: 66px;
        background: rgba(255, 255, 255, 0.8);
        padding: 5px;
        margin-bottom: 2px;
        overflow: hidden;
                    display: flex; /*margin: auto; */justify-content: center; flex-direction: column;">
                    <p style="padding: 5px 0 5px 0;">3 january</p>
                    <p style="padding: 5px 0 5px 0;">Monday</p>
                </div>--}}


                <div class="times"
                     style="display: flex;  justify-content: flex-start; flex-direction: column; width: 90%;
                     margin: auto;
                     /*overflow-x: scroll;*/
                     overflow-y: hidden;
    height: auto !important;">
                    <div class="times-scroll" style="

min-width: 1000px;
">

                        <div style="margin-top: 10px;">
                            <?php /*$w = 100 / 15 . '%';*/?>
                            <?php $w = '4%';?>
                            <div class="times-row" style="display: flex;justify-content: flex-start;">
                                @for($i = 1; $i <= 18; $i++)

                                    <div style="width: <?=$w?>; margin-left: 1.5%;">
                                        <div style="/*padding: 0 5px 0 0;*/">
                                            <div class="time"
                                                 style="    padding: 5px 2px 6px 2px;box-sizing: border-box;/*padding: 5px 5px 5px 5px;*/text-align: center;border: 2px solid rgba(76,78,81,0.5);  font-size: 13px;border-radius: 15px;">
                                                15:21
                                            </div>
                                        </div>
                                    </div>

                                @endfor

                            </div>
                            <div class="prices-row"
                                 style="display: flex;  justify-content: flex-start;">
                                @for($i = 1; $i <= 18; $i++)
                                    <div style="text-align: center; width: 5.5%; height: 15px;box-sizing: border-box;margin-top: 5px;border-bottom: 1px solid rgba(76,78,81,0.5);">
                                        <p style="font-size: 12px; ">
                                            {{--@if ($i %3 == 0)--}}
                                                500 грн.</p>
                                        {{--@endif--}}
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div style="margin-top: 10px;">
                            <?php /*$w = 100 / 15 . '%';*/?>
                            <?php $w = '4%';?>
                            <div class="times-row" style="display: flex;justify-content: flex-start;">
                                @for($i = 1; $i <= 18; $i++)

                                    <div style="width: <?=$w?>; margin-left: 1.5%;">
                                        <div style="/*padding: 0 5px 0 0;*/">
                                            <div class="time"
                                                 style="    padding: 5px 2px 6px 2px;box-sizing: border-box;/*padding: 5px 5px 5px 5px;*/text-align: center;border: 2px solid rgba(76,78,81,0.5);  font-size: 13px;border-radius: 15px;">
                                                15:21
                                            </div>
                                        </div>
                                    </div>

                                @endfor

                            </div>
                            <div class="prices-row"
                                 style="display: flex;  justify-content: flex-start;">
                                @for($i = 1; $i <= 18; $i++)
                                    <div style="text-align: center; width: 5.5%; height: 15px;box-sizing: border-box;margin-top: 5px;border-bottom: 1px solid rgba(76,78,81,0.5);">
                                        <p style="font-size: 12px; ">
                                            @if ($i %3 == 0)
                                                500 грн.</p>
                                        @endif
                                    </div>
                                @endfor
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </section>

    @push('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&callback=initMap">
    </script>

    <script src="/js/map.js"></script>
    @endpush

@endsection
