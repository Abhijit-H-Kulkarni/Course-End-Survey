<!DOCTYPE html>
<html>
<head>
<title>front page</title>
<style type="text/css">
body,html{height:100%;width:100%;}
.one{background-color:black;padding:5px;
height:20%;}
.two{background-color:grey;
height:80%;width:20%;float:left;
}
.three{background-color:powderblue;
height:80%;width:80%;float:left;}
.but{
background-color:powderblue;
font-size:30px;
border-radius:5px;
width:18%;
}
a:hover{font-family:'lucida handwriting';color:red;
}
a{text-decoration:none;}
</style>
</head>
<body>
<div class="one"><img src="bmslogo.jpg" style="float:left;border-radius:100px;"/><p style="font-family:'lucida handwriting';font-size:50px;color:white;">WELCOME TO COURSE END SURVEY!!!</p></div>
<div class="two"><br><br>
<div class="but" style="position:absolute; top:240px;left:15px;font-size:20px"><a href="teachersfpage.php">HOME</a></div>
</div>
<div class="three" >
<?php
session_start();
?>
<?php
$i=0;
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$query1="SELECT * FROM studdet WHERE status='1'";
$res1=mysqli_query($conn,$query1);
if(!$res1 )
{
  die('Could retrieve data: ' . mysqli_error($connection));
}
echo "<p style='color:black;font-family:courier;font-size:40px;'>YOUR AVERAGE FEEDBACK RESULT IS:</p><br />";
while ($row = mysqli_fetch_array($res1)) {
$i++;
}
$user=$_SESSION["psw"];
$sum=0;
if($user=="uma123")
{
$query="SELECT * FROM umadevi";
$res=mysqli_query($conn,$query);
if(!$res )
{
  die('Could retrieve data: '. mysqli_error($conn));
}
while ($row = mysqli_fetch_array($res)) {
$sum=$sum+$row[1];
}
echo "<p style='font-family:courier;font-size:30px;'>".$sum/($i*5)."</p>";
echo "<br><br><br><br><a href='graph.php'>CLICK HERE TO SEE RESPONSES IN GRAPHICAL WAY</a>";
mysqli_close($conn);
}
else if($user=="kayal123")
{
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$user=$_SESSION["psw"];
$query="SELECT * FROM kayal";
$res=mysqli_query($conn,$query);
if(!$res )
{
  die('Could retrieve data: '. mysqli_error($conn));
}
while ($row = mysqli_fetch_array($res)) {
$sum+=$row[1];
}
echo "<p style='font-family:courier;font-size:30px;'>".$sum/($i*5)."</p>";
echo "<br><br><br><br><a href='g1.php'>CLICK HERE TO SEE RESPONSES IN GRAPHICAL WAY</a>";
mysqli_close($conn);
}
?>
</p>
</div>
</body>
</html>