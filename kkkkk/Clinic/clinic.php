<?php
$clinicname = $_POST['clinicname'];
$docname = $_POST['docname']; 
$pass = $_POST['pass'];
$licno= $_POST['licno'];
$address = $_POST['address'];
$contact= $_POST['contact'];
$gender = $_POST['gender'];
$document = $_POST['document'];
$idproof = $_POST['idproof'];





if (!empty($clinicname) || !empty($docname) || !empty($pass) || !empty($licno) || !empty($address) || !empty($contact)|| !empty($gender)|| !empty($document)|| !empty($idproof)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT clinicname From clinic Where clinicname = ? Limit 1";
     $INSERT = "INSERT Into clinic (clinicname, docname, pass,licno,address,contact,gender,document,idproof) values('$clinicname','$docname','$pass','$licno','$address','$contact','$gender','$document ','$idproof')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $clinicname);
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