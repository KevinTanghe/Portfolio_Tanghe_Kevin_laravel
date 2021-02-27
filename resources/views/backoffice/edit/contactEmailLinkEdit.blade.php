@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/update-contactEmailLink/{{ $edit->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mail</label>
                <input type="text" name="mail" value="{{ old('mail') ? old('mail') : $edit->mail}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
