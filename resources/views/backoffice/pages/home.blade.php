@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom de la Table</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Navbar</th>
                    <td><a class="btn btn-primary" href="/back-navbar">Show</a></td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
