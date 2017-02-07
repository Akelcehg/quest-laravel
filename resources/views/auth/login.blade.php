@extends('layouts.app')

@push('styles')
<link href="/css/pages/login.css" rel="stylesheet">
@endpush

@section('content')
    @include('parts.header',[
      'background_image' => '/img/backgrounds/login/lock.jpeg',
      'heading'=>''
      ])

    <section class="intro">

        <form class="form-horizontal login-from" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                           autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="quest-button">
                        Войти
                    </button>

                    {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>--}}
                </div>
            </div>
        </form>

    </section>
@endsection
