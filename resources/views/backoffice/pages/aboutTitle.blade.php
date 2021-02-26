@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">OmbreTitre</th>
                    <th scope="col">Titre</th>
                    <th scope="col">SousTitre</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutTitle as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->ombreTitre }}</td>
                        <td>{{ $item->titre }}</td>
                        <td>{{ $item->sousTitre }}</td>
                        <td><a class="btn btn-success" href="/edit-aboutTitle/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-aboutTitle/{{$item->id}}">Delete</a></td>
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
        <form action="/store-aboutTitle" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">OmbreTitre</label>
                <input type="text" name="ombreTitre" value="{{old('ombreTitre')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" name="titre" value="{{old('titre')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sous Titre</label>
                <input type="text" name="sousTitre" value="{{old('sousTitre')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection