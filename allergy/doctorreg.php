<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$con = mysqli_connect("localhost","root","","ssip");
if($con){
	echo "connected";
}
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("ssip", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from doctorreg", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href="rdoctorreg.php?id={$row['regno']}">{$row['skills']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from doctorreg where regno=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Registration No:</span> <?php echo $row1['regno']; ?>
<span>Full Name:</span> <?php echo $row1['skills']; ?>
<span>Allergy Name:</span> <?php echo $row1['address']; ?>
<span>Symptoms:</span> <?php echo $row1['gender']; ?>
<span>Medication:</span> <?php echo $row1['mno']; ?>
<span>Frequency:</span> <?php echo $row1['skills']; ?>
<span>Message:</span> <?php echo $row1['sepc']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>