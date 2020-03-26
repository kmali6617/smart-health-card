<?php
$regno = $_POST['regno'];
$Dname = $_POST['Dname']; 
$Password = $_POST['Password'];
$ReEnterPassword = $_POST['ReEnterPassword'];
$address = $_POST['address'];
$Country = $_POST['Country'];
$City = $_POST['City'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$BloodGroup = $_POST['BloodGroup'];
$gender = $_POST['gender'];
$Birthdate= $_POST['Birthdate'];
$mno = $_POST['mno'];
$Allergies = $_POST['Allergies'];
$sepc = $_POST['sepc'];
$EmergencyC= $_POST['EmergencyC'];


if (!empty($regno) || !empty($Dname) || !empty($Password) || !empty($ReEnterPassword) || !empty($address) || !empty($Country)|| !empty($City)|| !empty($phone)|| !empty($email)|| !empty($BloodGroup) || !empty($gender)|| !empty($Birthdate) || !empty($mno)|| !empty($Allergies)|| !empty($sepc)|| !empty($EmergencyC)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "patient";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT regno From patient Where regno = ? Limit 1";
     $INSERT = "INSERT Into patient (regno, Dname, Password, ReEnterPassword,address,Country,City,phone,email,BloodGroup,gender,Birthdate,mno,Allergies,sepc,EmergencyC) values('$regno','$Dname','$Password','$ReEnterPassword','$address','$Country','$City','$phone ','$email','$BloodGroup','$gender','$Birthdate','$mno','$Allergies','$sepc','$EmergencyC')";
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