<?php
$ShopOwner = $_POST['ShopOwner'];
$Password= $_POST['Password'];
$ShopName = $_POST['ShopName']; 
$Address = $_POST['Address'];
$ContactNo = $_POST['ContactNo'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$City = $_POST['City'];
$CertificateLicense = $_POST['CertificateLicense'];
$ShopRegistrationNumber = $_POST['ShopRegistrationNumber'];


if (!empty($ShopOwner) || !empty($Password) || !empty($ShopName) || !empty($Address) || !empty($ContactNo) || !empty($State)|| !empty($Country)|| !empty($City )|| !empty($CertificateLicense)|| !empty($ShopRegistrationNumber)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "pharmacy";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT ShopOwner From register Where ShopOwner = ? Limit 1";
     $INSERT = "INSERT Into register (ShopOwner, Password, ShopName, Address,ContactNo,State,Country,City,CertificateLicense,ShopRegistrationNumber ) values('$ShopOwner','$Password','$ShopName','$Address','$ContactNo','$State','$Country','$City ','$CertificateLicense','$ShopRegistrationNumber')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $ShopOwner);
     $stmt->execute();
     $stmt->bind_result($Address);
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