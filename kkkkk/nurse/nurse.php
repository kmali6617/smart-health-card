<?php
$nurid = $_POST['nurid'];
$name = $_POST['name'];
$pass = $_POST['pass']; 
$hospital = $_POST['hospital'];
$contact = $_POST['contact'];
$docid= $_POST['docid'];
$idproof = $_POST['idproof'];

if (!empty($nurid) || !empty($name) || !empty($pass) || !empty($hospital)   || !empty($contact) || !empty($docid)|| !empty($idproof)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT nurid From nurse Where nurid = ? Limit 1";
     $INSERT = "INSERT Into nurse (nurid,name, pass, hospital,contact,docid,idproof) values('$nurid ','$name','$pass','$hospital','$contact','$docid','$idproof')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $nurid);
     $stmt->execute();
     $stmt->bind_result($contact);
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