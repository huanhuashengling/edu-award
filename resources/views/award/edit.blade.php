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

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="isvisionedCheck">
              <label class="form-check-label" for="gridCheck">
                该图片已解析
              </label>
            </div>
          </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="awardee">获奖人</label>
                <input type="text" class="form-control" id="awardee" placeholder="获奖人">
              </div>
              <div class="form-group col-md-4">
                <label for="awardLevel">获奖级别</label>
                <select id="awardLevel" class="form-control">
                  <option selected>请选择级别</option>
                  <option>国家级</option>
                  <option>省级</option>
                  <option>市级</option>
                  <option>区级</option>
                  <option>校级</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="awardTypesId">荣誉类型</label>
                <select id="awardTypesId" class="form-control">
                  <option selected>请选择类型</option>
                  <option>论文撰写</option>
                  <option>课堂教学</option>
                  <option>学生辅导</option>
                  <option>个人素质</option>
                  <option>志愿服务</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="awardYear">获奖年度</label>
                <input type="text" class="form-control" id="awardYear" placeholder="荣誉标题">
              </div>
              <div class="form-group col-md-9">
                <label for="eventTitle">活动标题</label>
                <input type="text" class="form-control" id="eventTitle" placeholder="荣誉标题">
              </div>
            </div>
            <div class="form-group">
              <label for="title">论文标题</label>
              <input type="text" class="form-control" id="title" placeholder="荣誉标题">
            </div>
            <div class="form-group">
              <label for="imgUrl">图片路径：{{URL::to('/')}}/images/{{$award->img_url}}</label>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="awardRank">获奖等第</label>
                <select id="awardRank" class="form-control">
                  <option selected>请选择等第</option>
                  <option>特等奖</option>
                  <option>一等奖</option>
                  <option>二等奖</option>
                  <option>三等奖</option>
                  <option>第一名</option>
                  <option>第二名</option>
                  <option>第三名</option>
                  <option>优胜奖</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="awardDate">获得日期</label>
                <input type="text" class="form-control" id="award_date" placeholder="荣誉日期">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="awardStory">荣誉故事</label>
                <textarea class="form-control" rows="5" name="awardStory"></textarea> 
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
