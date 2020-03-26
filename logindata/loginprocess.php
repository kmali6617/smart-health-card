<?php
$reg_id=$_POST['email'];
$password=$_POST['password'];
if(empty($reg_id))	
{
	header("location:login.php");
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

	$qry="select password from patientreg where reg_id='".$reg_id."'";
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($result);

	session_start();
	if  ($password==$row['password'])
	{
		$_SESSION['student_id']=$reg_id;
		header ("location:../Patient/patient_portal.php");
	
	}

	else
	{
		$msg="incorrect reg_id or password";
		header ("location:login.php?error=".$msg);
	}
}
?>
