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
        <form action="/update-resumeSumary/{{ $edit->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Main Titre</label>
                <input type="text" name="mainTitre" value="{{ old('mainTitre') ? old('mainTitre') : $edit->mainTitre}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" name="titre" value="{{ old('titre') ? old('titre') : $edit->titre }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" name="description" value="{{ old('description') ? old('description') : $edit->description }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
