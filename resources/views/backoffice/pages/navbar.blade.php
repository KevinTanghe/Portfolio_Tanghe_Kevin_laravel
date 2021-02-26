@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Chemin</th>
                    <th scope="col">Titre</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($navbar as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->chemin }}</td>
                        <td>{{ $item->titre }}</td>
                        <td><a class="btn btn-success" href="/edit-navbar/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-navbar/{{$item->id}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="/store-navbar" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Chemin</label>
                <input type="text" name="chemin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
