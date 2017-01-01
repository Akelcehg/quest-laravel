@extends('layouts.app')

@push('styles')
<link href="/css/quests.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.quest_header',['background_image' => '/img/quests/1.jpg','heading'=>'Название квеста'])

    <section class="white" style="height: auto; padding: 25px 0 25px 0;">
        <div class="quest-description" style="margin: auto; width: 80%;display: flex;flex-wrap: wrap;">

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

    <div class="quest-map" id="map"></div>

    <section class="white" style="height: auto;">
        <div style="margin: auto; width: 80%;display: flex;flex-wrap: wrap; border: 1px solid black;">
            <div class="days-name-row" style="width: 100%; display: flex; text-align: center; margin: 20px 0 20px 0;">
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
                <div class="day-name" style="width: 14.28571428571429%;">Monday</div>
            </div>
            <div class="date-wrap" style="width: 100%; display: flex; height: auto; flex-wrap: wrap;">
                @for($i = 1; $i <= 31; $i++)
                    <div class="time-container" style="width: 14.28571428571429%; border: 1px solid red; box-sizing: border-box;">
                        <p class="day">{{$i}}</p>
                    </div>
                @endfor
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
