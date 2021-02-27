@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Content</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($secondJob as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->content }}</td>
                        <td><a class="btn btn-success" href="/edit-resumeSecondJob/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-resumeSecondJob/{{$item->id}}">Delete</a></td>
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
        <form action="/store-resumeSecondJob" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <input type="text" name="content" value="{{old('content')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
