<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body,html{height:100%;width:100%;}
.one{background-color:black;padding:5px;
height:20%;}
.but{
background-color:black;
font-size:30px;
width:7%;
}
a:hover{
font-family:courier;
color:red;
}
a{text-decoration:none;color:white;}
</style>
</head>
<body style="background-color:powderblue;">
<div class="one"><img src="bmslogo.jpg" style="float:left;border-radius:100px;"/><p style="font-family:'lucida handwriting';font-size:50px;color:white;">WELCOME TO COURSE END SURVEY!</p></div>
<div class="but" style="position:absolute;left:1160px;top:190px;"><a href="teachersfpage.php">HOME</a></div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","");
if(! $conn ) {
  die('Could not connect: ' . mysqli_error($connection));
 }
$db=mysqli_select_db($conn,"wpproject2017");
echo "<h1>THE STUDENTS WHO HAVEN'T GIVEN FEEDBACK YET:</h1><br />";
$query="SELECT * FROM studdet WHERE status='0'";
$res=mysqli_query($conn,$query);
if(!$res )
{
  die('Could retrieve data: ' . mysqli_error($connection));
}
echo "<center><table border='2'>";
echo "<tr><th style='font-size:30px;'>NAME</th><th style='font-size:30px;'>USN</th></tr>";
while ($row = mysqli_fetch_array($res)) {
echo "<tr><td><h2 style='color:red;'>".$row[1]." ".$row[2]."</td></h2><td><h2 style='color:red;'>".$row[3]."</h2></td></tr><br />";
}
echo "</table></center>";
mysqli_close($conn);
?>