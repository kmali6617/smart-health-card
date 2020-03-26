<?php
$doctorid = $_POST['doctorid'];
$Patinetid = $_POST['Patinetid']; 
$Patientname = $_POST['Patientname'];
$State = $_POST['State'];
$City = $_POST['City'];
$gender = $_POST['gender'];
$Diseasetype = $_POST['Diseasetype'];
$descryption= $_POST['descryption'];




if (!empty($doctorid) || !empty($Patinetid) || !empty($Patientname) || !empty($State) || !empty($City) || !empty($gender)|| !empty($Diseasetype)|| !empty($date2)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT doctorid From prescription Where doctorid = ? Limit 1";
     $INSERT = "INSERT Into prescription (doctorid, Patinetid, Patientname, State,City,gender,Diseasetype,descryption) values('$doctorid','$Patinetid','$Patientname','$State','$City','$gender','$Diseasetype','$descryption')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $doctorid);
     $stmt->execute();
     $stmt->bind_result($City);
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