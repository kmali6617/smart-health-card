<?php
$doctorid=$_POST['doctorid'];
$password=$_POST['password'];
if(empty($doctorid))	
{
	header("location:Dlogin.php");
}
else
{
	$con=mysqli_connect("localhost","root","","ssip");

	if($con)
	{
		echo "connection successfully <br>";
	}
	else
	{
		die(mysql_error());
	}

	// mysql_select_db("ssip");

	$qry="select password from doctorreg where doctorid='".$doctorid."'";
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($result);

	session_start();
	if  ($password==$row['password'])
	{
		$_SESSION['doctor_id']=$doctorid;
		header ("location: ../doctor_portal.php");
	
	}

	else
	{
		$msg="incorrect email_id or password";
		header ("location:Dlogin.php?error=".$msg);
	}
}
?>
