<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$query="SELECT * FROM umadevi";
$result=mysqli_query($conn,$query);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
		['some','value'],
        ['a',      5],
		['b',      8],
		['c',     12],
		['d',      3]
		]);

        var options = {
          title: 'Umadevi mam Final Score'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>