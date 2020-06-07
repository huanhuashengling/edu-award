<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            // awardee 获奖人
            $table->string('awardee')->nullable();
            // award_types_id 荣誉类型
            $table->string('award_types_id')->nullable();
            // title 荣誉标题
            $table->string('title')->nullable();
            // img_url 图片保存路径
            $table->string('img_url');
            // award_year 获奖年度
            $table->string('award_year')->nullable();
            // award_level 获奖级别
            $table->string('award_levels_id')->nullable();
            // award_level 获奖等第
            $table->string('award_ranks_id')->nullable();
            // award_date 获得日期
            $table->string('award_date')->nullable();
            // is_visioned 是否已被视觉化
            $table->string('is_visioned');
            // vision_txt 视觉化返回的结果
            $table->string('vision_txt')->nullable();
            // award_story 荣誉故事
            $table->string('award_story')->nullable();
            // event_title 活动标题
            $table->string('event_title')->nullable();
            // issuer 颁发单位
            $table->string('issuer')->nullable();
            // subjects_id 所属学科
            $table->string('subjects_id')->nullable();
            // school_sections_id 所属学段
            $table->string('school_sections_id')->nullable();
            // unique_id 存储文件的唯一编码
            $table->string('unique_id')->nullable();
            // is_public 是否公开别人可见
            $table->string('is_public')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awards');
    }
 }
