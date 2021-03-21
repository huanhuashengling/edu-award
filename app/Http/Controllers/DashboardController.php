<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Award;
use App\Models\AwardType;
use App\Models\AwardLevel;
use App\Models\AwardRank;
use DB;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function dashboard()
  {
    return view('dashboard.index');
  }

  public function numPerYearChart() {
    $user = auth()->user();
    $awards = Award::select("award_year", DB::raw('count(*) as total'))
    ->where("users_id", "=", $user->id)
    ->where("title", "<>", "")
    ->groupBy("award_year")->get();
    $currentYear =  date('Y');
    $dataset = [];
    for ($i=$user->year_to_start_work; $i <= $currentYear; $i++) { 
      $dataset[$i] = 0;
    }
    foreach ($awards as $key => $award) {
      $dataset[$award->award_year] = $award->total;
    }
    // dd($dataset);
    return $dataset;
  }

  public function numPerTypeChart() {
    $user = auth()->user();
    $awardTypes = AwardType::all();
    $awards = Award::select("award_types.label", DB::raw('count(*) as total'))
    ->leftJoin('award_types', function($join) {
        $join->on('award_types.id', '=', 'awards.award_types_id');
    })
    ->where("users_id", "=", $user->id)
    ->where("title", "<>", "")
    ->groupBy("award_types.label")->get();
    $dataset = [];
    // foreach ($awardTypes as $key => $awardType) {
    //   $dataset[$awardType->label] = 0;
    // }
    foreach ($awards as $key => $award) {
      $dataset[$award->label] = $award->total;
    }
    return $dataset;
  }

  public function numPerLevelChart() {
    $user = auth()->user();
    $awardLevels = AwardLevel::all();
    $awards = Award::select("award_levels.label", DB::raw('count(*) as total'))
    ->leftJoin('award_levels', function($join) {
        $join->on('award_levels.id', '=', 'awards.award_levels_id');
    })
    ->where("users_id", "=", $user->id)
    ->where("title", "<>", "")
    ->groupBy("award_levels.label")->get();
    // dd($awards);
    $dataset = [];
    foreach ($awardLevels as $key => $awardLevel) {
      $dataset[$awardLevel->label] = 0;
    }
    foreach ($awards as $key => $award) {
      $dataset[$award->label] = $award->total;
    }
    // dd($dataset);
    return $dataset;
  }

  public function numPerRankChart() {
    $user = auth()->user();
    $awardRanks = AwardRank::all();
    $awards = Award::select("award_ranks.label", DB::raw('count(*) as total'))
    ->leftJoin('award_ranks', function($join) {
        $join->on('award_ranks.id', '=', 'awards.award_ranks_id');
    })
    ->where("users_id", "=", $user->id)
    ->where("title", "<>", "")
    ->groupBy("award_ranks.label")->get();
    // dd($awards);
    $dataset = [];
    foreach ($awardRanks as $key => $awardRank) {
      $dataset[$awardRank->label] = 0;
    }
    foreach ($awards as $key => $award) {
      $dataset[$award->label] = $award->total;
    }
    // dd($dataset);
    return $dataset;
  }
}
