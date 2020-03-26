<?php
$FullName = $_POST['FullName'];
$email= $_POST['email'];
$phone = $_POST['phone']; 
$message = $_POST['message'];


if (!empty($FullName) || !empty($email) || !empty($phone) || !empty($message) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "contact";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT FullName From contact Where FullName = ? Limit 1";
     $INSERT = "INSERT Into contact (FullName, email, phone, message) values('$FullName','$email','$phone','$message')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i",$FullName);
     $stmt->execute();
     $stmt->bind_result($message);
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