@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($contactEmail as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->icon }}</td>
                        <td>{{ $item->title }}</td>
                        <td><a class="btn btn-success" href="/edit-contactEmail/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-contactEmail/{{$item->id}}">Delete</a></td>
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
        <form action="/store-contactEmail" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" name="icon" value="{{old('icon')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
