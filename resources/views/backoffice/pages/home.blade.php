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
                <tr>
                    <th scope="row">Hero</th>
                    <th><a class="btn btn-primary" href="/back-hero">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">About Title</th>
                    <th><a class="btn btn-primary" href="/back-aboutTitle">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">About Description</th>
                    <th><a class="btn btn-primary" href="/back-aboutDescription">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">About Project</th>
                    <th><a class="btn btn-primary" href="/back-aboutProject">Show</a></th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
