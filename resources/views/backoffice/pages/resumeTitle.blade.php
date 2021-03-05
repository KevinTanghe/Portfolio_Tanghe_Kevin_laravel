@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Head</th>
                    <th scope="col">Title</th>
                    <th scope="col">Years</th>
                    <th scope="col">Sous Title</th>
                    <th scope="col">Content</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($resumeTitle as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->head }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->years }}</td>
                        <td>{{ $item->sousTitle }}</td>
                        <td>{{ $item->content }}</td>
                        <td><a class="btn btn-success" href="/edit-resumeTitle/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-resumeTitle/{{$item->id}}">Delete</a></td>
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
        <form action="/store-resumeTitle" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">head</label>
                <input type="text" name="head" value="{{old('head')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">years</label>
                <input type="text" name="years" value="{{old('years')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">sousTitle</label>
                <input type="text" name="sousTitle" value="{{old('sousTitle')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">content</label>
                <input type="text" name="content" value="{{old('content')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
