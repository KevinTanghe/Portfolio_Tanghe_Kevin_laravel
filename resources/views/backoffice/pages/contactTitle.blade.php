@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Ombre Title</th>
                    <th scope="col">Title</th>
                    <th scope="col">Sous Title</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($contactTitle as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->ombreTitle }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->sousTitle }}</td>
                        <td><a class="btn btn-success" href="/edit-contactTitle/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-contactTitle/{{$item->id}}">Delete</a></td>
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
        <form action="/store-contactTitle" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Ombre Title</label>
                <input type="text" name="ombreTitle" value="{{old('ombreTitle')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Sous Title</label>
                <input type="text" name="sousTitle" value="{{old('sousTitle')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
