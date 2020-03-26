<?php
$Patinetid = $_POST['Patinetid'];
$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$pno = $_POST['pno'];
$hname = $_POST['hname'];
$Hid = $_POST['Hid'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$gender = $_POST['gender'];
$roomno = $_POST['roomno'];
$checkbox= $_POST['checkbox'];
$a1= $_POST['a1'];
$Expected= $_POST['Expected'];
$Price= $_POST['Price'];




if (!empty($Patinetid) || !empty($fname) || !empty($lname) || !empty($pno) || !empty($hname) || !empty($Hid)|| !empty($date1)|| !empty($date2)|| !empty($gender)|| !empty($roomno) || !empty($checkbox)|| !empty($a1) || !empty($Expected)|| !empty($Price)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Patinetid From admitpatient Where Patinetid = ? Limit 1";
     $INSERT = "INSERT Into admitpatient (Patinetid, fname, lname, pno,hname,Hid,date1,date2,gender,roomno,checkbox,a1,Expected,Price) values('$Patinetid','$fname','$lname','$pno','$hname','$Hid','$date1','$date2 ','$gender','$roomno','$checkbox','$a1','$Expected','$Price')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $Patinetid);
     $stmt->execute();
     $stmt->bind_result($hname);
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