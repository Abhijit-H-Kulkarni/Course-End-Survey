<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"wpproject2017");
$usn=$_POST['n'];
$query="DELETE FROM studdet WHERE usn='$usn'";
mysqli_query($conn,$query);
echo "<script>alert('YOU HAVE REMOVED SUCEESFULLY')</script>";
header('location:re.html');
?>