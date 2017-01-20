@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>123</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <button type="button" class="btn btn-default btn-sm">Default</button>
                            <button type="button" class="btn btn-primary btn-sm">Primary</button>
                            <button type="button" class="btn btn-success btn-sm">Success</button>
                            <button type="button" class="btn btn-info btn-sm">Info</button>
                            <button type="button" class="btn btn-warning btn-sm">Warning</button>
                            <button type="button" class="btn btn-danger btn-sm">Danger</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection