<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$query=$query="SELECT value, count(*) as number FROM 'umadevi' GROUP BY value";
$result=mysqli_query($conn,$query);
?>
<!doctype html>
<head>
<script type="text/javascript" src="https://www..gstatic.com/charts/loader.js">
google.charts.load('current',{'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart()
{
var data=google.visualization.arrayToDataTable([
['value','Number'],
<?php
while($row=mysqli_fetch_array($result))
{
echo "['".$row["value"]."',".$row["number"]."],";	
}
?>	
]);	
var options:{
	title:'Percentage of marks'
};
var chart=new google.visualization.Piechart(document.getElementById('pc'));
chart.draw(data,options);
}
</script>
</head>
<body>
<div style="width:900px;">
<div  id="pc" style="width:900px;height:500px;"></div>
</div>
</body>