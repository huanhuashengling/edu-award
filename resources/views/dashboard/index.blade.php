  @extends('layouts.app')

  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <canvas id="numPerTypeChart"></canvas>
      </div>
      <div class="col-6">
        <canvas id="numPerRankChart"></canvas>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-6">
        <canvas id="numPerLevelChart"></canvas>
      </div>
      <div class="col-6">
        <canvas id="numPerYearChart"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="/js/dashboard.js?v={{rand()}}"></script>
@endsection