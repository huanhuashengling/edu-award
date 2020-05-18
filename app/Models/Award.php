<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
  protected $fillable = [
    'awardee', 'award_types_id', 'title', 'img_url', 'award_years', 'award_level', 'award_date', 'is_visioned', 'vision_txt'
  ];
}
