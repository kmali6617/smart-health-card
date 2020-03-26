<?php
$HospitalId = $_POST['HospitalId'];
$HospitalName = $_POST['HospitalName']; 
$Password = $_POST['Password'];
$EmailId = $_POST['EmailId'];
$Address = $_POST['Address'];
$CityName = $_POST['CityName'];
$StateName = $_POST['StateName'];
$CountryName = $_POST['CountryName'];
$ContactNo = $_POST['ContactNo'];
$HospitalCategory = $_POST['HospitalCategory'];
$Website= $_POST['Website'];
$LicenseNo= $_POST['LicenseNo'];
$LicensePdf= $_POST['LicensePdf'];



if (!empty($HospitalId) || !empty($HospitalName) || !empty($Password) || !empty($EmailId) || !empty($Address) || !empty($CityName)|| !empty($StateName)|| !empty($CountryName)|| !empty($ContactNo)|| !empty($HospitalCategory) || !empty($Website)|| !empty($LicenseNo) || !empty($LicensePdf)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT HospitalId From hospitalreg Where HospitalId = ? Limit 1";
     $INSERT = "INSERT Into hospitalreg (HospitalId, HospitalName, Password, EmailId,Address,CityName,StateName,CountryName,ContactNo,HospitalCategory,Website,LicenseNo,LicensePdf) values('$HospitalId','$HospitalName','$Password','$EmailId','$Address','$CityName','$StateName','$CountryName ','$ContactNo','$HospitalCategory','$Website','$LicenseNo','$LicensePdf')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $HospitalId);
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