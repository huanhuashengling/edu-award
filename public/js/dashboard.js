$(document).ready(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: "GET",
    url: '/dashboard/numPerRankChart',
    success: function( data ) {
      console.log(data);
      showNumPerRankChart(data);

    }
  });

  $.ajax({
    type: "GET",
    url: '/dashboard/numPerTypeChart',
    success: function( data ) {
      console.log(data);
      showNumPerTypeChart(data);
      // $("#numPerRankChart").height($("#numPerTypeChart").height());
    }
  });


  $.ajax({
    type: "GET",
    url: '/dashboard/numPerYearChart',
    success: function( data ) {
      console.log(data);
      showNumPerYearChart(data);
    }
  });

  $.ajax({
    type: "GET",
    url: '/dashboard/numPerLevelChart',
    success: function( data ) {
      console.log(data);
      showNumPerLevelChart(data);
    }
  });




function showNumPerTypeChart(dataset) {
  var labels= new Array();
  var datas= new Array();
  $.each(dataset, function( index, value ) {
    // alert( index + ": " + value );
    labels.push(index);
    datas.push(value);
  });

  var ctx1 = document.getElementById('numPerTypeChart').getContext('2d');
  var numPerTypeChart = new Chart(ctx1, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: '按类型所得荣誉数',
              data: datas,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        responsive: true,
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true,
                      stepSize: 1,
                  }
              }]
          }
      }
  });

}


function showNumPerYearChart(dataset) {
  var labels= new Array();
  var datas= new Array();
  $.each(dataset, function( index, value ) {
    // alert( index + ": " + value );
    labels.push(index);
    datas.push(value);
  });

  var ctx2 = document.getElementById('numPerYearChart').getContext('2d');
  var numPerYearChart = new Chart(ctx2, {
      type: 'line',
      data: {
          labels: labels,
          datasets: [{
              label: '按年获得荣誉数',
              data: datas,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
              ],
              borderWidth: 1
          }]
      },
      options: {
        responsive: true,
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true,
                      stepSize: 1,
                  }
              }]
          }
      }
  });
};

function showNumPerLevelChart(dataset) {
  var labels= new Array();
  var datas= new Array();
  $.each(dataset, function( index, value ) {
    // alert( index + ": " + value );
    labels.push(index);
    datas.push(value);
  });

  var ctx3 = document.getElementById('numPerLevelChart').getContext('2d');
  var numPerTypeChart = new Chart(ctx3, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: '按等级所得荣誉数',
              data: datas,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        responsive: true,
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true,
                      stepSize: 1,
                  }
              }]
          }
      }
  });
}

function showNumPerRankChart(dataset) {
  var labels= new Array();
  var datas= new Array();
  $.each(dataset, function( index, value ) {
    // alert( index + ": " + value );
    labels.push(index);
    datas.push(value);
  });

  var ctx4 = document.getElementById('numPerRankChart').getContext('2d');
  var numPerTypeChart = new Chart(ctx4, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: '按等级所得荣誉数',
              data: datas,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        responsive: true,
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true,
                      stepSize: 1,
                  }
              }]
          }
      }
  });
}



});