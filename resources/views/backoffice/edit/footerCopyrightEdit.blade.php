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
        <form action="/update-footerCopyright/{{ $edit->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Copyright</label>
                <input type="text" name="copyright" value="{{ old('copyright') ? old('copyright') : $edit->copyright}}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{ old('name') ? old('name') : $edit->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Droit</label>
                <input type="text" name="droit" value="{{ old('droit') ? old('droit') : $edit->droit }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
