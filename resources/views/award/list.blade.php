  @extends('layouts.app')

  @section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
          </div>
          <img src="images/{{ Session::get('image') }}">
          @endif

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
          <div class="row">
            @foreach ($awards as $key => $award)
            <div class="col-4">
              <a href="{{ route('edit', $award->id) }}"><img class='award-img img-thumbnail' src=/images/{{$award->img_url}}></img>
              </a>
            </div>
            @if ((($key+1) % 3) === 0)
            <div class="w-100"></div>
            @endif
            @endforeach
          </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="/js/list.js?v={{rand()}}"></script>
@endsection