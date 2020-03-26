<?php
$BloodPressure = $_POST['BloodPressure'];
$BloodSuger= $_POST['BloodSuger'];
$BodyTemprature = $_POST['BodyTemprature']; 
$Weight = $_POST['Weight'];
$Prescription = $_POST['Prescription'];

if (!empty($BloodPressure) || !empty($BloodSuger) || !empty($BodyTemprature) || !empty($Weight) || !empty($Prescription)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT BloodPressure From medicalhistory Where BloodPressure = ? Limit 1";
     $INSERT = "INSERT Into medicalhistory (BloodPressure, BloodSuger, BodyTemprature, Weight,Prescription) values('$BloodPressure','$BloodSuger','$BodyTemprature','$Weight','$Prescription')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $BloodPressure);
     $stmt->execute();
     $stmt->bind_result($Weight);
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