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
        <form action="/update-footerLink/{{ $edit->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Lien</label>
                <input type="text" name="lien" value="{{ old('lien') ? old('lien') : $edit->lien}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{ old('name') ? old('name') : $edit->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" name="icon" value="{{ old('icon') ? old('icon') : $edit->icon }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
