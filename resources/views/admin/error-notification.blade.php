@if( Session::has('errors') )
    <div class="alert alert-danger" role="alert" align="center" style="font-size: 14px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if( Session::has('message') )
    <div class="alert alert-success" role="alert" align="center" style="font-size: 14px;">
        {{ Session::get('message') }}
    </div>
@endif