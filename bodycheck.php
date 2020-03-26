<?php
$patientid = $_POST['patientid'];
$AllergyName = $_POST['AllergyName'];
$Symptoms = $_POST['Symptoms'];
$Medication = $_POST['Medication'];
$Frequency = $_POST['Frequency'];
$message = $_POST['message'];


if (!empty($patientid) || !empty($AllergyName) || !empty($Symptoms) || !empty($Medication) || !empty($Frequency)|| !empty($message)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT patientid From allergy Where patientid = ? Limit 1";
     $INSERT = "INSERT Into allergy (patientid, AllergyName, Symptoms,Medication,Frequency,message) values('$patientid','$AllergyName','$Symptoms','$Medication','$Frequency','$message')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $patientid);
     $stmt->execute();
     $stmt->bind_result($Medication);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);

           
      $stmt->execute();
      header ("location: ../../patient_portal.php");
     } else {
      echo "Someone is already registered already register using this id";
     }
     $stmt->close();
     $conn->close();
    }
} else {
   
 die();
}
?> 