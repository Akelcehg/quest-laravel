@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit {{ $quest->name }}</h1>

        <!-- if there are creation errors, they will show here -->
        {{ Html::ul($errors->all()) }}

        {{ Form::model($quest, array('action' => array('Admin\QuestsController@update', $quest->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('nerd_level', 'Nerd Level') }}
            {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@stop