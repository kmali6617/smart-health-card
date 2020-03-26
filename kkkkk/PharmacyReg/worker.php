<?php
$Cs = $_POST['Cs'];
$Cn = $_POST['Cn']; 
$degree = $_POST['degree'];
$Seat = $_POST['Seat'];
$Contact = $_POST['Contact'];
$Passeddate = $_POST['Passeddate'];
$Fullname = $_POST['Fullname'];
$Bithdate = $_POST['Bithdate'];
$address = $_POST['address'];
$Email = $_POST['Email'];
$Adhar= $_POST['Adhar'];


if (!empty($Cs) || !empty($Cn) || !empty($degree) || !empty($Seat) || !empty($Contact) || !empty($Passeddate)|| !empty($Fullname)|| !empty($Bithdate)|| !empty($address)|| !empty($Email) || !empty($Adhar)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Cs From worker Where Cs = ? Limit 1";
     $INSERT = "INSERT Into worker (Cs, Cn, degree, Seat,Contact,Passeddate,Fullname,Bithdate,address,Email,Adhar) values('$Cs','$Cn','$degree','$Seat','$Contact','$Passeddate','$Fullname','$Bithdate ','$address','$Email','$Adhar')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $Cs);
     $stmt->execute();
     $stmt->bind_result($Contact);
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