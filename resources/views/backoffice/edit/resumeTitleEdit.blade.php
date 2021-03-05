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
        <form action="/update-resumeTitle/{{ $edit->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">head</label>
                <input type="text" name="head" value="{{ old('head') ? old('head') : $edit->head}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" name="title" value="{{ old('title') ? old('title') : $edit->title}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">years</label>
                <input type="text" name="years" value="{{ old('years') ? old('years') : $edit->years}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">sousTitle</label>
                <input type="text" name="sousTitle" value="{{ old('sousTitle') ? old('sousTitle') : $edit->sousTitle}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">content</label>
                <input type="text" name="content" value="{{ old('content') ? old('content') : $edit->content }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
