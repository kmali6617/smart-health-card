<?php
$patientid = $_POST['patientid'];
$bill_no = $_POST['bill_no']; 
$disease_type = $_POST['disease_type'];
$medicine_charge = $_POST['medicine_charge'];
$lab_charge = $_POST['lab_charge'];
$doctor_fee = $_POST['doctor_fee'];
$nursing_charge = $_POST['nursing_charge'];
$room_charge = $_POST['room_charge'];
$operation_charge = $_POST['operation_charge'];
$advance_payment = $_POST['advance_payment'];

if ( !empty($bill_no) || !empty($patientid) || !empty($disease_type) || !empty($medicine_charge) || !empty($lab_charge) || !empty($doctor_fee)|| !empty($nursing_charge)|| !empty($room_charge)|| !empty($operation_charge)|| !empty($advance_payment) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else 
 $SELECT = "SELECT * From patientbill ";
 $INSERT = "INSERT Into patientbill (patientid, bill_no, disease_type, medicine_charge, lab_charge, doctor_fee, nursing_charge ,room_charge, operation_charge, advance_payment) 
 values('$patientid','$bill_no','$disease_type','$medicine_charge','$lab_charge','$doctor_fee','$nursing_charge','$room_charge ','$operation_charge','$advance_payment')";
 //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $patientid);
     $stmt->execute();
     $stmt->bind_result($address);
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
 else {
 echo "All field are required";
 die();
 header ("location:partient_details.php");
}
?> 