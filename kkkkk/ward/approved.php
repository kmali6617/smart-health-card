<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo "connection successfully </br>";
}
else
{
	die(mysql_error());
}
mysql_select_db("hack");

$result=mysql_query("select * from reg_two where r_email='".$_REQUEST['email']."'",$con);

if($row=mysql_fetch_array($result))
{
	$per=(($row['r_tenmark']+$row['r_twelve'])/($row['r_outoftenmarks']+$row['r_outoftwelvemarks']))*100;
	echo $per; 
}
$qry="update registration set s_per='".$per."' where s_emailid='".$_REQUEST['email']."'";
$qry2="update registration set s_authentic='yes' where s_emailid='".$_REQUEST['email']."'";
if(mysql_query($qry,$con) && mysql_query($qry2,$con))
{
	header("location:adhome1.php");
	
}
?>