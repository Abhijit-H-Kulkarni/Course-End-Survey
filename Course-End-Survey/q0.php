<!DOCTYPE html>
<html>
<head>
<title>front page</title>
<style type="text/css">
body,html{height:100%;width:100%;}
.one{background-color:black;padding:5px;
height:20%;}
.three{background-color:powderblue;
height:80%;width:100%;float:left;}
.but{
background-color:black;
font-size:30px;
border-radius:10px;
width:13%;
}
</style>
</head>
<body>
<div class="one"><img src="bmslogo.jpg" style="float:left;border-radius:100px;"/><p style="font-family:'lucida handwriting';font-size:50px;color:white;">WELCOME TO COURSE END SURVEY!!!</p></div>
<div class="three"><p style="font-family:'monotype corsiva';font-size:40px;color:black;">Q1.Will the teacher explain material clearly?</p>
<form  action="q0.php" method="POST">
<label><input type="radio" name="q0" value="5"/>5</label><br><br>
<label><input type="radio" name="q0" value="4"/>4</label><br><br>
<label><input type="radio" name="q0" value="3"/>3</label><br><br>
<label><input type="radio" name="q0" value="2"/>2</label><br><br>
<label><input type="radio" name="q0" value="1"/>1</label><br><br>
<br><br><br><br>
<input type="submit" value="NEXT" name="login"  />
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])) 
{
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$a=$_POST["q0"];
$query="INSERT INTO umadevi(value) VALUES('$a')";
mysqli_query($conn,$query);
header("location:q1.php");
}
?>