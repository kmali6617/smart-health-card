<?php
$fname = $_POST['fname'];
$lname = $_POST['lname']; 
$email = $_POST['email'];


if (!empty($fname) || !empty($lname) || !empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {function RandStr($length, $encrypt = 12){
        $reg_id = '';
        $str = '';
        for($i=0;$i<$encrypt;$i++){
            $reg_id = base_convert(md5(microtime(true)).$str,16,10);}
        return substr($reg_id, 0, $length);
    }
    $regid = RandStr(12);
 $SELECT = "SELECT * From enquiry";
 $INSERT = "INSERT Into table enquiry (fname, lname, email) values('$fname','$lname','$email')";
 //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
    // $stmt->bind_param("i", $patientid);
     $stmt->execute();
     //$stmt->bind_result($address);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->execute();
      echo "New employee inserted sucessfully";
     } 
     $stmt->close();
     $conn->close();
    }
} 
else 
{
 echo "All field are required";
 die();
}
header ("location: home.html");
?> 