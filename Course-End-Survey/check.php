<?php
session_start()
?>
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"wpproject2017");
$v=$_SESSION['usn'];
$query="SELECT * FROM studdet WHERE usn='$v'";
$res1=mysqli_query($conn,$query);
$row = mysqli_fetch_array($res1);
if($row[5]==1){
	header('location:rprojstudfpage.php');
    }
	else
	header('location:inst.php');
	?>