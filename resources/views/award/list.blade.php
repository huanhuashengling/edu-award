  @extends('layouts.app')

  @section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">

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

          <div>筛选</div>
          <div>排序</div>
          <div class="row">
            @foreach ($awards as $key => $award)
            <div class="col-4 py-3">
                <a href="{{ route('edit', $award->id) }}"><img class='award-img img-thumbnail' src="{{Storage::url($award->thumb_url)}}"></img>
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