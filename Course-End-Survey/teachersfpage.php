<?php 
session_start();
?>
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
width:18%;
}
a:hover{font-family:calibri;color:red;
}
a{text-decoration:none;color:black;}
</style>
</head>
<body>
<div class="one"><img src="bmslogo.jpg" style="float:left;border-radius:100px;"/><p style="font-family:'lucida handwriting';font-size:50px;color:white;">WELCOME TO COURSE END SURVEY!!!</p></div>
<div class="two"><br><br>
<div class="but" style="position:absolute; top:240px;left:15px;font-size:20px"><a href="sfeedstat.php">Student's Feedback Status</a></div>
<div class="but" style="position:absolute; top:300px;left:15px;font-size:25px"><a href="re.html">Remove Students</a></div>
<div class="but" style="position:absolute; top:360px;left:15px;font-size:25px"><a href="fbres.php">Feedback Result</a></div>
<div class="but" style="position:absolute; top:420px;left:15px;font-size:25px"><a href="teach.php">LOGOUT</a></div>
</div>
<div class="three" >
<?php
$count=0;
echo "<h1 style='font-family:monotype corsiva;font-size:45px;'>WELCOME ".$_SESSION['user']." MAM!</h1>";
$conn=mysqli_connect("localhost","root","");
if(! $conn ) {
  die('Could not connect: ' . mysqli_error($connection));
 }
$db=mysqli_select_db($conn,"wpproject2017");
$query="SELECT * FROM studdet WHERE status='1'";
$res=mysqli_query($conn,$query);
if(!$res )
{
  die('Could retrieve data: ' . mysqli_error($connection));
}
while($row = mysqli_fetch_array($res)){
	$count++;
}
echo "<marquee style='background-color:black;color:red;font-size:30px;'>Number of students who have given feedback: ".$count."</marquee>";
?>
</div>
</body>
</html>