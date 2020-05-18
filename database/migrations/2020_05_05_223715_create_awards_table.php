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
            $table->string('awardee')->nullable();
            $table->string('award_types_id')->nullable();
            $table->string('title')->nullable();
            $table->string('img_url');
            $table->string('award_years')->nullable();
            $table->string('award_level')->nullable();
            $table->string('award_date')->nullable();
            $table->string('is_visioned');
            $table->string('vision_txt')->nullable();
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
