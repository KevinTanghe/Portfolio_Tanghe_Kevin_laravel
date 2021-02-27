@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Language</th>
                    <th scope="col">Pourcentage</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($aboutProgress as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->language }}</td>
                        <td>{{ $item->pourcentage }}</td>
                        <td><a class="btn btn-success" href="/edit-aboutProgress/{{$item->id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete-aboutProgress/{{$item->id}}">Delete</a></td>
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
        <form action="/store-aboutProgress" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">language</label>
                <input type="text" name="language" value="{{old('language')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">pourcentage</label>
                <input type="text" name="pourcentage" value="{{old('pourcentage')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
