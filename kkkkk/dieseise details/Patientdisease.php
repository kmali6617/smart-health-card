<?php
$date = $_POST['date'];
$time = $_POST['time']; 
$docid = $_POST['docid'];
$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$diseasetype = $_POST['diseasetype'];
$diseasedescription = $_POST['diseasedescription'];
$reporttype = $_POST['reporttype'];
$reportname = $_POST['reportname'];
$bloodpress = $_POST['bloodpress'];
$Diabetes= $_POST['Diabetes'];
$myfile = $_POST['myfile'];



if (!empty($date) || !empty($time) || !empty($docid) || !empty($name) || !empty($height) || !empty($weight)|| !empty($diseasetype)|| !empty($diseasedescription)|| !empty($reporttype)|| !empty($reportname) || !empty($bloodpress)|| !empty($Diabetes) || !empty($myfile)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT date From disease Where date = ? Limit 1";
     $INSERT = "INSERT Into disease (date, time, docid, name,height,weight,diseasetype,diseasedescription,reporttype,reportname,bloodpress,Diabetes,myfile) values('$date','$time','$docid','$name','$height','$weight','$diseasetype','$diseasedescription ','$reporttype','$reportname','$bloodpress','$Diabetes','$myfile')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $date);
     $stmt->execute();
     $stmt->bind_result($height);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);

           
      $stmt->execute();
      echo "New employee inserted sucessfully";
     } else {
      echo "Someone is already registered already register using this id";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?> 