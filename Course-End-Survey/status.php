<?php
session_start();
?>
<?php
$usn=$_SESSION['psw'];
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$query="UPDATE studdet SET status='1' WHERE psw='$usn'";
mysqli_query($conn,$query);
header("location:submitsuccess.html");
?>