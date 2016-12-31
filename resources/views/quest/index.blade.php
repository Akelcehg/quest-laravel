@extends('layouts.app')

@push('styles')
<link href="/css/quests.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.quest_header',['background_image' => '/img/quests/1.jpg','heading'=>'Название квеста'])

    <section class="white">
        dsadasd
    </section>

@endsection
