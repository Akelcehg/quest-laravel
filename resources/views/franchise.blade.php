@extends('layouts.app')

@push('styles')
<link href="/css/pages/franchise.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.header',[
    'background_image' => '/img/backgrounds/franchise/hands.jpg',
    'heading'=>'ФРАНШИЗА С НАМИ'
    ])

    <section class="franchise-section" style="background-color: white; padding: 15px 0 15px 0;">

        <h3 style="font-size: 35px; color:#fb383c; text-align: center;margin-bottom: 0;">Хочешь
            получать
            от 70 тыс грн в месяц?</h3>


        <h3 style="text-align: center; color:#fb383c;">Открой квест и получай прибыль, даже смотря на кризис в
            стране.</h3>


        <div class="list-container">

            <p class="list-heading">
                Что такое квест?
            </p>


            <p class="list-item">Эскейп рум или квест- это новый вид развлечений. Где команда от 2-4 человек попадают в
                стилизованную
                комнату
                из которой нужно "выбраться" за 60 минут. На первый взгляд все просто, но тут есть подвох, если
                квест
                посценарию подводной лодки, или кабинет злого профессора, тут только логика и командная работа
                поможетвыбраться.
            </p>


        </div>

        <div class="container">
            <h3 style="text-align: center; color:#fb383c;">Ты устал работать на кого-то? Начни работать на себя!
            </h3>
        </div>


        <div class="list-container">

            <p class="list-heading">
                Почему открыть квест выгодно?
            </p>

            <p class="list-item">
                - маленькая аренда ( квест отлично может работать в подвальном помещении)<br>
            </p>

            <p class="list-item">
                - маленький штат сотрудников ( от 2 человек)<br>
            </p>

            <p class="list-item">
                - квест работает без выходных<br>
            </p>

            <p class="list-item">
                - больше квестов / больше денег<br>
            </p>

            <p class="list-item">
                - маленький стартовый капитал по сравнению с другими сферами бизнеса<br>
            </p>
            {{--        </div>
                    <div class="list-container">--}}
            <p class="list-heading">
                Почему квест дает много денег ?
            </p>

            <p class="list-item">
                - средний чек за 1 одну игру (60 минут) составляет 450 грн<br>
            </p>

            <p class="list-item">
                - загрузка от 8 до 12 игр в день с одного квеста (а дальше считай сам)<br>
            </p>
            {{--</div>
            <div class="list-container">--}}
            <p class="list-heading">
                Твои клиенты это:
            </p>

            <p class="list-item">
                - веселая компания<br>
            </p>

            <p class="list-item">
                - школьники и студенты<br>
            </p>

            <p class="list-item">
                - влюблённые парочки<br>
            </p>

            <p class="list-item">
                - туристы<br>
            </p>

            <p class="list-heading">
                Почему рынок еще пустой?
            </p>

            <p class="list-item">
                - квест или эскейп рум только стал развиваться в Украине<br>
            </p>

            <p class="list-item">
                - сколько не было на данный момент открытых квестов, команда может сыграть только один раз<br>
            </p>

            <p class="list-item">
                - сфера развлечений всегда была и остается прибыльный<br>
            </p>
        </div>
        <div style="margin: auto;line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">


            <div class="container">
                <h3 style="text-align: center; color:#fb383c;">
                    И конечно почему именно мы?
                </h3>
            </div>

            <div class="list-container">
                <p class="list-heading">
                    В нашей команде работают
                </p>

                <p class="list-item">
                    - 4 сценариста<br>
                </p>

                <p class="list-item">
                    - 2 электронщика<br>
                </p>

                <p class="list-item">
                    - 2 дизайнера<br>
                </p>

                <p class="list-item">
                    - 1 театральный декоратор<br>
                </p>

                <p class="list-item">
                    - 1 психолог<br>
                </p>

                <p class="list-item">
                    И еще много людей которые остаются за кадром<br>
                </p>

            </div>
            <div class="list-container">
                <p class="list-item">
                    На данный момент у нас качественные и прибыльные квесты в Одессе.
                    И готовятся еще такого же качества в других городах Украины.
                    Узнаваемый бренд не только в нашем городе но и уже в Украине.
                </p>
            </div>

            {{-- <div class="container">
                 <h3 style="text-align: center; color:#fb383c; font-size: 20px;">
                     Если мы тебя еще не убедили у нас есть еще один большой плюс!
                 </h3>
             </div>--}}

            {{-- <div class="container">
                 <h3 style="text-align: center; color:#fb383c; font-size: 20px;">
                     До конца осени действуют скидки для всех, кто желает войти в семью Квестхауса.
                 </h3>
             </div>--}}

        </div>


    </section>

@endsection
