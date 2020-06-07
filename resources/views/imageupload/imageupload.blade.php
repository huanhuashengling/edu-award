@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
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
          <input id="input-image" name="image" class="file" data-language="zh", type="file" class="form-control">
        </form>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">最新上传</div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        <img class="img-fluid" src="{{Storage::url(Session::get('image'))}}">
        @endif
      </div>
    </div>

  </div>
</div>
@endsection

@section('scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js"></script>
    <script src="/js/locales/LANG.js"></script>
<script src="/js/image-upload.js?v={{rand()}}"></script>
@endsection