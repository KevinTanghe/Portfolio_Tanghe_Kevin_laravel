@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Lien</th>
                    <th scope="col">Name</th>
                    <th scope="col">Icon</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($footerLink as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->lien }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->icon }}</td>
                        <td><a class="btn btn-success" href="/edit-footerLink/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-footerLink/{{$item->id}}">Delete</a></td>
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
        <form action="/store-footerLink" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Lien</label>
                <input type="text" name="lien" value="{{old('lien')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" name="icon" value="{{old('icon')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
