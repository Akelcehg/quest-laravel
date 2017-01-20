@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
                <!-- Standard button -->
                <button type="button" class="btn btn-default">Default</button>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary">Primary</button>

                <!-- Indicates a successful or positive action -->
                <button type="button" class="btn btn-success">Success</button>

                <!-- Contextual button for informational alert messages -->
                <button type="button" class="btn btn-info">Info</button>

                <!-- Indicates caution should be taken with this action -->
                <button type="button" class="btn btn-warning">Warning</button>

                <!-- Indicates a dangerous or potentially negative action -->
                <button type="button" class="btn btn-danger">Danger</button>

                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                <button type="button" class="btn btn-link">Link</button>
            </div>
        </div>
    </div>
@endsection