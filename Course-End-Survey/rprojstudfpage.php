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
.three{height:80%;width:80%;position:absolute;
top:150px;
left:340px;}
.but{
background-color:orange;
font-size:30px;
width:18%;
}
a:hover{font-family:'courier';}
a{text-decoration:none;style="font-family:calibri;"}
</style>

</head>
<body>
<div class="one"><img src="bmslogo.jpg" style="float:left;border-radius:100px;"/><p style="font-family:'lucida handwriting';color:white;font-size:50px;">WELCOME TO COURSE END SURVEY!!!</p></div>
<div class="two"><br><br>
<div class="but" style="position:absolute; top:230px;left:15px;font-size:20px"><a href="check.php">START COURSE END SURVEY</a></div>
<div class="but" style="position:absolute; top:290px;left:15px;" ><a href="loginstud.php">LOGOUT</a></div></div>
<div class="three" style="background-image:url(e.jpg);">
<?php
echo "<h3><br />   WELCOME!  ".$_SESSION['fname']." ".$_SESSION['lname']."</h3>";
?>
</div>
</body>
</html>
