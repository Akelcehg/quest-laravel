@extends('layouts.app')

@push('styles')
<link href="/css/about.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.header',[
    'background_image' => '/img/backgrounds/franchise/hands.jpg',
    'heading'=>'ФРАНШИЗА С НАМИ'
    ])

    <section style="background-color: white; padding: 15px 0 15px 0;">

        <h3 style="font-size: 40px; color:#fb383c; text-align: center;margin-bottom: 0;">Хочешь
            получать
            от 70 тыс грн в месяц?</h3>


        <h3 style="text-align: center; color:#fb383c;">Открой квест и получай прибыль, даже смотря на кризис в
            стране.</h3>


        <div style="margin: auto; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 15px;color: #6c7176; font-size: 16px;">

                Что такое квест?

            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">
                Эскейп рум или квест- это новый вид развлечений. Где команда от 2-4 человек попадают в стилизованную
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


        <div style="margin: auto; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">

            <p style="text-indent: 3em; text-decoration: underline;
 background: none;margin: auto; border: none; line-height: 150%; padding: 15px;color: #6c7176; font-size: 16px;">
                Почему открыть квест выгодно?
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - маленькая аренда ( квест отлично может работать в подвальном помещении)<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - маленький штат сотрудников ( от 2 человек)<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - квест работает без выходных<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - больше квестов / больше денег<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - маленький стартовый капитал по сравнению с другими сферами бизнеса<br>
            </p>
        </div>
        <div style="margin: auto; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">
            <p style="text-indent: 3em;text-decoration: underline;
background: none;margin: auto; border: none; line-height: 150%; padding: 15px;color: #6c7176; font-size: 16px;">
                Почему квест дает много денег ?
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - средний чек за 1 одну игру (60 минут) составляет 450 грн<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - загрузка от 8 до 12 игр в день с одного квеста (а дальше считай сам)<br>
            </p>
        </div>
        <div style="margin: auto; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">
            <p style="text-indent: 3em;text-decoration: underline;
background: none;margin: auto; border: none; line-height: 150%; padding: 15px;color: #6c7176; font-size: 16px;">
                Твои клиенты это:
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - веселая компания<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - школьники и студенты<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - влюблённые парочки<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - туристы<br>
            </p>

            <p style="text-indent: 3em;text-decoration: underline;
background: none;margin: auto; border: none; line-height: 150%; padding: 15px;color: #6c7176; font-size: 16px;">
                Почему рынок еще пустой?
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - квест или эскейп рум только стал развиваться в Украине<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - сколько не было на данный момент открытых квестов, команда может сыграть только один раз<br>
            </p>

            <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                - сфера развлечений всегда была и остается прибыльный<br>
            </p>
        </div>
        <div style="margin: auto;line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">


            <div class="container">
                <h3 style="text-align: center; color:#fb383c;">
                    И конечно почему именно мы?
                </h3>
            </div>

            <div style="margin: auto; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">
                <p style="text-indent: 3em;text-decoration: underline;
background: none;margin: auto; border: none; line-height: 150%; padding: 15px;color: #6c7176; font-size: 16px;">
                    В нашей команде работают
                </p>

                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                    - 4 сценариста<br>
                </p>

                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                    - 2 электронщика<br>
                </p>

                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                    - 2 дизайнера<br>
                </p>

                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                    - 1 театральный декоратор<br>
                </p>

                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                    - 1 психолог<br>
                </p>

                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
                    И еще много людей которые остаются за кадром<br>
                </p>

            </div>
            <div style="margin: auto; line-height: 150%; padding: 15px; color: #6c7176; font-size: 16px;">
                <p style="text-indent: 3em;background: none;margin: auto; border: none; line-height: 150%; padding: 5px;color: #6c7176; font-size: 16px;">
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
