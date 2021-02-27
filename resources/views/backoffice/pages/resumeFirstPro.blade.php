@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Main Title</th>
                    <th scope="col">Title</th>
                    <th scope="col">Years</th>
                    <th scope="col">Lieu</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($firstPro as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->mainTitle }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->years }}</td>
                        <td>{{ $item->lieu }}</td>
                        <td><a class="btn btn-success" href="/edit-resumeFirstPro/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-resumeFirstPro/{{$item->id}}">Delete</a></td>
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
        <form action="/store-resumeFirstPro" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Main Title</label>
                <input type="text" name="mainTitle" value="{{old('mainTitle')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Years</label>
                <input type="text" name="years" value="{{old('years')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Lieu</label>
                <input type="text" name="lieu" value="{{old('lieu')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
