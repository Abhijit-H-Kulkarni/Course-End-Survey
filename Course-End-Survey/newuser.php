<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$psw=$_POST['psw'];
$usn=$_POST['usn'];
$conn=mysqli_connect("localhost","root","") or die("failed to connect to mysql".mysqli_error());
$db=mysqli_select_db($conn,"wpproject2017") or die("failed to connect to mysql".mysqli_error($conn));
$query="INSERT INTO studdet(ID,fname,lname,psw,usn)VALUES(NULL,'$fname','$lname','$psw','$usn')";
$res=mysqli_query($conn,$query);
if($res)
{
	header("location:rproj1.html");
}
else
{
	die('erorr:'.mysqli_error($conn));
}
mysqli_close($conn);	
?>
