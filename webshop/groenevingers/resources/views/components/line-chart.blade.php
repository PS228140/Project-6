<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
              google.charts.load('current', {'packages':['line', 'corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var chartDiv = document.getElementById('chart_div');

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Month');
      data.addColumn('number', "Users per month");

      data.addRows([
        @foreach($users as $key => $group)
            [new Date(2024, (<?php echo $key; ?> - 1)), <?php echo count($group); ?>],
        @endforeach
      ]);

      var materialOptions = {
        chart: {
          title: 'Users per Month'
        },
        width: 900,
        height: 500,
        series: {
          // Gives each series an axis name that matches the Y-axis below.
          0: {axis: 'Users'},
          1: {axis: 'Daylight'}
        },
        axes: {
          // Adds labels to each axis; they don't have to match the axis names.
          y: {
            Temps: {label: 'Users'},
            Daylight: {label: 'Daylight'}
          }
        }
      };

      function drawMaterialChart() {
        var materialChart = new google.charts.Line(chartDiv);
        materialChart.draw(data, materialOptions);
      }

      drawMaterialChart();

    }
    </script>
  </head>
  <body>
    @foreach($users as $key => $group)
        <tr>
                    <td>{{ $key }}</td>
                    <td>{{ count($group) }}</td>
            </tr>
    @endforeach    
    <div id="chart_div" style="width: 900px; height: 500px"></div>
  </body>
</html>