@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Color</th>
                    <th scope="col">Number</th>
                    <th scope="col">Description</th>
                    <th scope="col">Content</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($aboutProject as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->icon }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->number }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->content }}</td>
                        <td><a class="btn btn-success" href="/edit-aboutProject/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-aboutProject/{{$item->id}}">Delete</a></td>
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
        <form action="/store-aboutProject" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">icon</label>
                <input type="text" name="icon" value="{{old('icon')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">color</label>
                <input type="text" name="color" value="{{old('color')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">number</label>
                <input type="text" name="number" value="{{old('number')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">content</label>
                <input type="text" name="content" value="{{old('content')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection