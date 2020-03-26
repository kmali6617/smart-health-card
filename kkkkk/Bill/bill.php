<?php
$billno = $_POST['billno'];
$patid = $_POST['patid']; 
$disease = $_POST['disease'];
$medchr= $_POST['medchr'];
$labchr = $_POST['labchr'];
$docch = $_POST['docch'];
$skills = $_POST['skills'];
$roomchr = $_POST['roomchr'];
$opchr = $_POST['opchr'];
$city = $_POST['city'];
$advpay= $_POST['advpay'];




if (!empty($billno) || !empty($patid) || !empty($disease) || !empty($medchr) || !empty($labchr) || !empty($docch)|| !empty($skills)|| !empty($roomchr)|| !empty($opchr)|| !empty($city) || !empty($advpay)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT billno From bill Where billno = ? Limit 1";
     $INSERT = "INSERT Into bill (billno, patid, disease,medchr,labchr,docch,skills,roomchr,opchr,city,advpay) values('$billno','$patid','$disease','$medchr','$labchr','$docch','$skills','$roomchr ','$opchr','$city','$advpay')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $billno);
     $stmt->execute();
     $stmt->bind_result($labchr);
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