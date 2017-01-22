@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @if(count($quests) > 0)
                <div class="col-md-12 text-center">
                    <a href="{{ url('/image/create') }}" class="btn btn-primary" role="button">
                        Добавить квест
                    </a>
                    <hr/>
                    @include('admin.error-notification')
                </div>
            @endif


            @forelse($quests as $quest)
                <div class="col-md-3">
                    <div class="thumbnail">

                        <img src="{{asset($quest['images'][0]['thumbnail'])}}"/>

                        <div class="caption">
                            <h5>{{$quest->name}}</h5>

                            <p>{!! substr($quest->description, 0,100) !!}</p>

                            <div class="row text-center" style="padding-left:1em;">
                                {{--<a href="{{ url('/image/'.$quest->id.'/edit') }}" class="btn btn-info pull-left">Подробнее</a>--}}
                                <a href="{{ url('/admin/quests/'.$quest->id.'/edit') }}" class="btn btn-info pull-left">Подробнее</a>
                                <span class="pull-left">&nbsp;</span>
                                {!! Form::open(['url'=>'/image/'.$quest->id, 'class'=>'pull-left']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Точно удалить квест ?\')']) !!}
                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>
            @empty
                <p>No images yet, <a href="{{ url('/image/create') }}">add a new one</a>?</p>
            @endforelse
        </div>
        <div align="center">{!! $quests->render() !!}</div>
    </div>
@endsection