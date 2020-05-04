<?php
	$conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"wpproject2017");
	$c1=0;
	$c2=0;
	$c3=0;
	$c4=0;
	$c5=0;
	$query="SELECT * FROM `kayal` WHERE `value`=5;";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result)){$c1++;}
	$query="SELECT * FROM `kayal` WHERE `value`=4;";
	$res=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($res)){$c2++;}
	$query="SELECT * FROM `kayal` WHERE `value`=3;";
	$res1=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($res1)){$c3++;}
	$query="SELECT * FROM `kayal` WHERE `value`=2;";
	$res2=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($res2)){$c4++;}
	$query="SELECT * FROM `kayal` WHERE `value`=1;";
	$res3=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($res3)){$c5++;}
echo '<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">';
 echo "google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	function drawChart(){
	var q1data=google.visualization.arrayToDataTable([
	['rating','Number Of Responses'],
	['EXCELLENT'   ,  ".$c1."],
	['VERY GOOD'   ,  ".$c2."],
	['GOOD'        ,  ".$c3."],
	['SATISFACTORY',  ".$c4."],
	['POOR'        ,  ".$c5."],
	]);
	var q1options={title:'YOUR FINAL RESULT :'};
	var chart = new google.visualization.BarChart(document.getElementById('piechart'));
	chart.draw(q1data,q1options);
	}
	</script>
	</head>
	<body>";
	echo '<div id="piechart" style="width: 900px; height: 500px;"></div><br />';
	echo '<center><form action="fresel.html"><input type="submit" value="HOME" /></form></center>';
	echo '</body>';
	?>