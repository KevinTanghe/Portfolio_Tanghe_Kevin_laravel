@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Main Titre</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($resumeSumary as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->mainTitre }}</td>
                        <td>{{ $item->titre }}</td>
                        <td>{{ $item->description }}</td>
                        <td><a class="btn btn-success" href="/edit-resumeSumary/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-resumeSumary/{{$item->id}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/store-resumeSumary" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Main Titre</label>
                <input type="text" name="mainTitre" value="{{old('mainTitre')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" name="titre" value="{{old('titre')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
