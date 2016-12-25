@extends('layouts.app')

@push('styles')
<link href="/css/home.css" rel="stylesheet">
@endpush

@section('content')

    <section class="intro">
        <div class="section-content">
            <h1 class="heading">TRY TO FIND OUT FOR 60 MINUTES</h1>
            <input type="button" class="quest-button" value="CHOSE YOUR MISSION"/>
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

    <section class="white">
        <div class="section-content">
            <p><i class="fa fa-key" aria-hidden="true"></i></p>
            <h2 class="heading">THE ROOMS</h2>
        </div>
    </section>
@endsection
