<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

{{--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">--}}
<!-- Styles -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    {{--<link href="/css/partials/header.css" rel="stylesheet">--}}
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/themes/theme1.css" rel="stylesheet">
@stack('styles')

<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div id="app">
    {{--@include('parts.header')--}}

    @yield('content')

    @include('parts.footer')
</div>

<!-- Scripts -->
{{--<script src="/js/app.js"></script>--}}
@stack('scripts')
</body>
</html>
