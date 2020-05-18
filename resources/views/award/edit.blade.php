@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">完善荣誉信息</div>
          
          <div class="card-body">
          <label>荣誉照片</label>
          <div>
            <img class="img-thumbnail img-fluid" src="/images/{{$award->img_url}}" />
          </div>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
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

          <div>
            <button type="button" id="vision-btn" value="{{$award->id}}" class="btn btn-primary">解析图片中的文本</button>
          </div>

          文本获取结果：
          <label id="vision-txt"></label>

          <form action="{{ route('save.award.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="awardee">获奖人</label>
                <input type="text" class="form-control" id="awardee" placeholder="获奖人">
              </div>
              <div class="form-group col-md-4">
                <label for="awardTypesId">获奖级别</label>
                <select id="inputState" class="form-control">
                  <option selected>国家级</option>
                  <option>省级</option>
                  <option>市级</option>
                  <option>市级</option>
                  <option>区级</option>
                  <option>校级</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="awardTypesId">荣誉类型</label>
                <select id="inputState" class="form-control">
                  <option selected>论文撰写</option>
                  <option>课堂教学</option>
                  <option>学生辅导</option>
                  <option>个人素质</option>
                  <option>志愿服务</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="title">荣誉标题</label>
              <input type="text" class="form-control" id="title" placeholder="荣誉标题">
            </div>
            <div class="form-group">
              <label for="imgUrl">图片路径：{{URL::to('/')}}/images/{{$award->img_url}}</label>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">荣誉等级</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">荣誉日期</label>
                <input type="text" class="form-control" id="title" placeholder="荣誉日期">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="awardStory">荣誉故事</label>
                <textarea class="form-control" rows="5" name="awardStory"></textarea> 
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="/js/list.js?v={{rand()}}"></script>
@endsection
