@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">荣誉上传</div>

        

        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{ route('upload.post') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-6">
              <button type="submit" class="btn btn-success">上传</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <div class="card">
        <div class="card-header">最新上传</div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        <img class="img-fluid" src="images/{{ Session::get('image') }}">
        @endif
      </div>
    </div>

  </div>
</div>
@endsection