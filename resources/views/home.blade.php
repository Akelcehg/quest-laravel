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

    <section class="white">
        <div class="section-content">
            <p><i class="fa fa-key" aria-hidden="true"></i></p>
            <h2 class="heading">THE ROOMS</h2>
        </div>
    </section>
@endsection
