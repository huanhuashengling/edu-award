<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
  protected $fillable = [
    'awardee', 'award_types_id', 'event_title', 'title', 'img_url', 'award_year', 'award_ranks_id', 'issuer', 'award_levels_id', 'award_date', 'is_visioned', 'vision_txt', 'award_story', 'school_sections_id'
  ];
}
