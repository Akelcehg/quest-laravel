@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <h1>Редактирование квеста "{{ $quest->name }}"</h1>

        <!-- if there are creation errors, they will show here -->
        {{--{{ Html::ul($errors->all()) }}--}}
        @include('admin.error-notification')

        {{ Form::model($quest, array('action' => array('Admin\QuestsController@update', $quest->id), 'method' => 'PUT')) }}

        <div class="form-group {{$errors->has("name") ? 'has-error' : ''}}">
            {{ Form::label('name', 'Название квеста') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
        </div>

        <div class="form-group">
            {{ Form::label('title', 'Заголовок для отображения на странице (title. по дефолту название квеста.)') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
        </div>

        @foreach($quest['images'] as $image)
            <img src="{{ asset($image['image']) }}" height="200"/>
        @endforeach

        <div class="form-group">
            {{ Form::label('description', 'Текстовое описание квеста') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                {{ Form::label('people_min', 'Минимальное кол-во людей') }}
                {{ Form::number('people_min', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('people_max', 'Максимальное кол-во людей') }}
                {{ Form::number('people_max', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('default_price', 'Дефолтная цена (средняя стоимость для квеста) ') }}
                {{ Form::number('default_price', null, array('class' => 'form-control')) }}
            </div>
        </div>

        {{--<div class="form-group">
            {{ Form::label('nerd_level', 'Nerd Level') }}
            {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
        </div>--}}

        {{ Form::submit('Редактировать', array('class' => 'btn btn-primary')) }}
        <a href="{{ url('/quests') }}" class="btn btn-info">Вернуться к списку квестов</a>

        {{ Form::close() }}

    </div>

@stop