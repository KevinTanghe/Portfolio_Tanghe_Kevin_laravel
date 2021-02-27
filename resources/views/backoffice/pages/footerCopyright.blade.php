@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Copyright</th>
                    <th scope="col">Name</th>
                    <th scope="col">Droit</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($footerCopyright as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->copyright }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->droit }}</td>
                        <td><a class="btn btn-success" href="/edit-footerCopyright/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-footerCopyright/{{$item->id}}">Delete</a></td>
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
        <form action="/store-footerCopyright" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Copyright</label>
                <input type="text" name="copyright" value="{{old('copyright')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Droit</label>
                <input type="text" name="droit" value="{{old('droit')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
