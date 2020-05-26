@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">编辑荣誉信息</div>
          
          <div class="card-body">
          <div class="text-center">
            <img class="img-thumbnail img-fluid" style="width: 500px" src="/images/{{$award->img_url}}" />
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

          <div class="text-center">
            <button type="button" id="vision-btn" value="{{$award->id}}" class="btn btn-primary">读取文本
              <svg class="bi bi-chevron-double-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg>
            </button>
          </div>

          <div class="alert alert-primary" role="alert">
            <p id="vision-txt">{{$award->vision_txt}}</p>
          </div>
          
          <form action="{{ route('save.award.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="awards_id" value="{{$award->id}}">
            <input type="hidden" name="hiddenVisionTxt" id="hiddenVisionTxt">
            <!-- <div class="form-group">
              <label>
                <input type="checkbox" value="" name="isVisioned" checked="{{('true' == $award->is_visioned)?'checked':''}}">
                该图片已解析
              </label>
            </div> -->
            <div class="form-row">

              <div class="form-group col-md-3">
                <label for="awardTypesId">荣誉类型</label>
                <select name="awardTypesId" class="form-control" required>
                  <option value="" selected>请选择类型</option>
                  @foreach($awardTypes as $awardType)
                  <option value="{{$awardType->id}}" {{($award->award_types_id == $awardType->id)?"selected":""}}>
                    {{$awardType->label}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="awardLevelsId">获奖级别</label>
                <select name="awardLevelsId" class="form-control" required>
                  <option value="" selected>请选择级别</option>
                  @foreach($awardLevels as $awardLevel)
                  <option value="{{$awardLevel->id}}" {{($award->award_levels_id == $awardLevel->id)?"selected":""}}>
                    {{$awardLevel->label}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="awardee">获奖人</label>
                <input type="text" class="form-control" name="awardee" placeholder="自己的名字" value="{{$award->awardee}}" required>
              </div>


              <div class="form-group col-md-3">
                <label for="awardYear">获奖年度</label>
                <input type="text" class="form-control" name="awardYear" placeholder="例:2019" value="{{$award->award_year}}" required>
              </div>
            </div>

            <div class="form-row">  
              <div class="form-group col-md-12">
                <label for="eventTitle">活动标题</label>
                <input type="text" class="form-control" name="eventTitle" placeholder="活动标题" value="{{$award->event_title}}" required>
              </div>
            </div>
            
            <div class="form-row"> 
              <div class="form-group col-md-12">
                <label for="title">内容标题</label>
                <input type="text" class="form-control" name="title" placeholder="论文标题/课堂教学课题等" value="{{$award->title}}" required>
              </div>
            </div> 

            <div class="form-row"> 
              <div class="form-group col-md-12">
                <label for="issuer">颁发单位</label>
                <input type="text" class="form-control" name="issuer" placeholder="颁发单位" value="{{$award->issuer}}" required>
              </div>
            </div> 

            <div class="form-row">

              <div class="form-group col-md-3">
                <label for="awardRanksId">获奖等第</label>
                <select name="awardRanksId" class="form-control" required>
                  <option value="" selected>请选择等第</option>
                  @foreach($awardRanks as $awardRank)
                  <option value="{{$awardRank->id}}" {{($award->award_ranks_id == $awardRank->id)?"selected":""}}>
                    {{$awardRank->label}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group col-md-3">
                <label for="schoolSectionsId">所属学段</label>
                <select name="schoolSectionsId" class="form-control" required>
                  <option value="" selected>请选择学段</option>
                  @foreach($schoolSections as $schoolSection)
                  <option value="{{$schoolSection->id}}" {{($award->schoolSections_id == $schoolSection->id)?"selected":""}}>
                    {{$schoolSection->label}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="subjectsId">所属学科</label>
                <select name="subjectsId" class="form-control" required>
                  <option value="" selected>请选择学科</option>
                  @foreach($subjects as $subject)
                  <option value="{{$subject->id}}" {{($award->subjects_id == $subject->id)?"selected":""}}>
                    {{$subject->label}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="awardDate">获得日期</label>
                <input type="text" class="form-control" name="awardDate" placeholder="例:201903/20190312" value="{{$award->award_date}}" required>
              </div>

              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="awardStory">荣誉故事</label>                   
                  <textarea class="form-control" rows="5" name="awardStory" value="{{$award->award_story}}" required>好故事</textarea> 
                </div>
              </div>

            <!-- <div class="form-group">
              <label for="imgUrl">图片路径：{{URL::to('/')}}/images/{{$award->img_url}}</label>
            </div> -->

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
