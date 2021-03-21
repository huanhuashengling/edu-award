  @extends('layouts.app')

  @section('content')
  <style type="text/css">
.img-container {
  position: relative;
  width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  transform: translate(0px, -50%);
  top: 50%;
  left: 0px;
  text-align: center;
  -ms-transform: translate(0px, -50%);
  width: 100%;
  font-size: 16px;
}

.right-top {
  /*transition: .5s ease;*/
  /*opacity: 1;*/
  position: absolute;
  top: 0px;
  right: 0px;
  font-weight: 700;
/*  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);*/
  /*text-align: right;*/
}

.img-container:hover .image {
  opacity: 0.3;
}

.img-container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>

  </style>

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
              <div class="img-container">
                <img class='award-img img-thumbnail image' src="{{Storage::url($award->thumb_url)}}" />
                  <!-- <p class="title">资料完成度100%</p> -->
                  <div class="middle">
                    @if(isset($award->title))
                      <p>{{$award->award_year}}年{{$award->type_label}}</p>
                      <p>"{{$award->title}}"</p>
                      <p>{{$award->level_label}}{{$award->rank_label}}</p>
                    @else
                      <p>请点击编辑按钮完善信息</p>
                    @endif
                    <a class="btn btn-success btn-sm" href="{{ route('edit', $award->id) }}">  编辑 
                    </a>
                    <a class="btn btn-info btn-sm" href="{{ route('edit', $award->id) }}">  查看 
                    </a>
                  </div>
                  @if(isset($award->title))
                  <div class="right-top">
                    <svg class="bi bi-check2-square" width="3em" height="3em" viewBox="0 0 16 16" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" stroke="blue" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                      <path fill-rule="evenodd" stroke="blue" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
                    </svg>
                  </div>
                  @endif
              </div>
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