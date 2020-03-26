<?php
$regno = $_POST['regno'];
$regdate= $_POST['regdate'];
$Dname = $_POST['Dname']; 
$lname = $_POST['lname']; 
$address = $_POST['address'];
$gender = $_POST['gender'];
$bdate = $_POST['bdate'];
$mno = $_POST['mno'];
$skills = $_POST['skills'];
$sepc = $_POST['sepc'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


if (!empty($regno) || !empty($regdate) || !empty($Dname) || !empty($lname)|| !empty($address) || !empty($gender) || !empty($bdate)|| !empty($mno)|| !empty($skills )|| !empty($sepc)|| !empty($email) || !empty($phone)|| !empty($message)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT regno From doctorreg Where regno = ? Limit 1";
     $INSERT = "INSERT Into doctorreg (regno, regdate, Dname, lname, address,gender,bdate,mno,skills,sepc,email,phone,message) values('$regno','$regdate','$Dname','$lname','$address','$gender','$bdate','$mno','$skills ','$sepc','$email','$phone','$message')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $regno);
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
} else {
 echo "All field are required";
 die();
}
?> 