<!DOCTYPE html>
<html>
<head>
<title>TEACHER'S LOGIN</title>
<script type="text/javascript">
function validate()
{
var user=document.forms[0].elements[0].value;
var psw=document.forms[0].elements[1].value;
if(user==""||psw=="")
{
alert("PLEASE FILL ALL THE FIELDS!");
return false;
} 
else
{
return true;
}
}
</script>
</head>
<body style="background-color:gold;">
<marquee behavior="slide" scrollamount="20"><img src="mn.jpg" height="300px" width="400px"  >&nbsp
<img src="n.jpg"   height="300px" width="500px">&nbsp
<img src="o.jpg"   height="300px" width="400px">&nbsp</marquee>
<marquee scrollamount="20"   style="font-family:courier;font-size:40px;color:blue;">HELLO SIR/MADAM!!!WELCOME TO COURSE END SURVEY.</marquee><br><br><br><br><center>
<form action="rprojteach.php" onsubmit="return(validate());">
<label><b>USERNAME:</b><input type="text"  name="usn"></label>
<br><br>
<label><b>PASSWORD:</b><input type="password" name="psw"></label><br><br>
<input type="submit" value="SUBMIT" name="login">&nbsp
<input type="reset" value="CLEAR"><br></form>
<form action="rproj1.html">
<input type="submit"  value="HOME">
</form></body></center>
</html>

<?php  
	session_start();
	?>
<?php
if(isset($_POST['login']))  
	{  
   $usn=$_POST['usn'];
$psw=$_POST['psw'];
$conn=mysqli_connect("localhost","root","") or die("failed to connect to mysql".mysqli_error());
$db=mysqli_select_db($conn,"wpproject2017") or die("failed to connect to mysql".mysqli_error($conn));

	  
	   $check_user="SELECT * FROM teachinfo WHERE username='$usn' AND pswd='$psw'";  
  
	    $res=mysqli_query($conn,$check_user);  
	  
	    if(mysqli_num_rows($res))  
	    {  
	        header("location:teachersfpage.html"); 
	       $_SESSION['usn']=$usn;
		}  
	    else  
	    {  
	  echo "<script>alert('YOU HAVE ENTERED WRONG PASSWORD OR USERNAME!')</script>";
		}  
	}	
?>