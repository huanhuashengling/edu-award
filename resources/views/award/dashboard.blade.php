  @extends('layouts.app')

  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <canvas id="numPerTypeChart" width="600" height="400"></canvas>
      </div>
      <div class="col-6">
        <canvas id="numPerYearChart" width="600" height="400"></canvas>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-6">
        <canvas id="numPerLevelChart" width="600" height="400"></canvas>
      </div>
      <div class="col-6">
        <canvas id="numPerRankChart" width="600" height="400"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="/js/dashboard.js?v={{rand()}}"></script>
@endsection