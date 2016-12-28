@extends('layouts.app')

@push('styles')
<link href="/css/about.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.header',[
    'background_image' => '/img/backgrounds/about/logo.png',
    'heading'=>'КОНТАКТЫ'
    ])

@endsection
