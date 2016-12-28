@extends('layouts.app')

@push('styles')
<link href="/css/contact.css" rel="stylesheet">
@endpush

@section('content')

    @include('parts.header',[
    'background_image' => '/img/backgrounds/contact/city.jpg',
    'heading'=>'КОНТАКТЫ'
    ])

    <section class="contact-info">
        <div class="half">

            <h3 class="contact-heading">GET IN TOUCH WITH US</h3>

            <form class="contact-form">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Text" rows="10"></textarea>
                </div>

                <button type="submit" class="quest-button">SEND MESSAGE</button>
            </form>
        </div>

        <div class="half">
            12321
        </div>
    </section>
    <div id="map"></div>




    @push('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&callback=initMap">
    </script>

    <script src="/js/map.js"></script>
    @endpush
@endsection
