<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>STUDENT LOGIN</title>
<script type="text/javascript">
function validate()
{
var usn=document.forms[0].elements[0].value;
var psw=document.forms[0].elements[1].value;
var f=usn.search(/1bm16cs[0-9]{3}/i);
if(f==-1||psw==""){
alert("you have entered usn or password incorrectly");
if(f==-1)
document.forms[0].elements[0].focus();
else if(psw=="")
document.forms[0].elements[1].focus();
return false;
}
else
return true;
}
</script>
</head>
<body style="background-image:url('f.jpg');">
<marquee  behavior="slide" scrollamount="20"  ><img src="mn.jpg" height="300px" width="400px" >&nbsp
<img src="n.jpg"   height="300px" width="500px">&nbsp
<img src="o.jpg"   height="300px" width="460px">&nbsp </marquee>
<marquee scrollamount="20" style="font-family:courier;font-size:50px;color:white;">HEY GUYS!!!WELCOME TO COURSE END SURVEY.</marquee><br><br><br><br><center>
<form action="loginstud.php"onsubmit="return(validate());" method="POST" >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b style="color:white;">USN</b><input type="text" name="usn"></label>
<br><br>
<label style="color:white;"><b>PASSWORD</b><input type="password" name="psw"></label><br><br>
<input type="submit" value="SUBMIT" name="login" >&nbsp
<input type="reset" value="CLEAR">&nbsp
</form><br>
<form action="rproj1.html"><input type="submit" value="HOME">
</form>
</body></center>
</html>


<?php
if(isset($_POST['login']))  
	{  
   
	  $usn=$_POST['usn'];
$psw=$_POST['psw'];
$conn=mysqli_connect("localhost","root","") or die("failed to connect to mysql".mysqli_error());
$db=mysqli_select_db($conn,"wpproject2017") or die("failed to connect to mysql".mysqli_error($conn));
	   $check_user="SELECT * FROM studdet WHERE usn='$usn' AND psw='$psw'";  
       $query="SELECT * FROM studdet WHERE usn='$usn'";
	    $res=mysqli_query($conn,$check_user);  
		$res1=mysqli_query($conn,$query);
		$row = mysqli_fetch_array($res1);
	    if(mysqli_num_rows($res))  
	    {  
	        header("location:rprojstudfpage.php"); 
	       $_SESSION['usn']=$usn;
		   $_SESSION['psw']=$psw;
		   $_SESSION['fname']=$row[1];
		   $_SESSION['lname']=$row[2];
		}
	    else  
	    {  
	  
	  echo "<script>alert('YOU HAVE ENTERED WRONG PASSWORD OR USN!')</script>";
		}  
	}	
?>