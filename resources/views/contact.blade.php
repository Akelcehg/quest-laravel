@extends('layouts.app')

@push('styles')
<link href="/css/pages/contact.css" rel="stylesheet">
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
            <div class="info">
                <div class="heading">
                    <div class="marker">
                        <p><i class="fa fa-map-marker fa-1_5x" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="text">
                        <p>Address:</p>
                    </div>
                </div>
                <p>654 DASdasd gerge rger, nf 15235</p>
            </div>
            <div class="info">
                <div class="heading">
                    <div class="marker">
                        <p><i class="fa fa-envelope-o fa-1_5x" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="text">
                        <p>EMAIL:</p>
                    </div>
                </div>
                <p>odajfewiojoi@gmail.com</p>
            </div>
            <div class="info">
                <div class="heading">
                    <div class="marker">
                        <p><i class="fa fa-phone fa-1_5x" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="text">
                        <p>Phone:</p>
                    </div>
                </div>
                <p>8 800 555 0600</p>
            </div>
        </div>

    </section>
    <div class="contact-map" id="map"></div>




    @push('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORdNzOZKnybtZPUaEZhJivJUcd565Nmo&callback=initMap">
    </script>

    <script src="/js/map.js"></script>
    @endpush
@endsection
