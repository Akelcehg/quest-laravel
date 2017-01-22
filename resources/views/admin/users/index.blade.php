@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Список пользователей</h3>
                            </div>
                            {{--<div class="col col-xs-6 text-right">
                                <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                            </div>--}}
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th><em class="fa fa-cog"></em></th>
                                <th class="hidden-xs">ID</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                                <tr>
                                    <td align="center">
                                        <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                        <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    </td>
                                    <td class="hidden-xs">1</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="panel-footer">
                        <div class="row">

                            <div class="col col-xs-12">
                                <div class="pull-right">
                                    {{ $users->links() }}
                                </div>
                                {{--<ul class="pagination hidden-xs pull-right">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                                <ul class="pagination visible-xs pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div>

                {{--<table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Имейл</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $key=>$user)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm">Default</button>
                                <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                <button type="button" class="btn btn-success btn-sm">Success</button>
                                <button type="button" class="btn btn-info btn-sm">Info</button>
                                <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                <button type="button" class="btn btn-danger btn-sm">Danger</button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>--}}
            </div>
        </div>
    </div>
@endsection