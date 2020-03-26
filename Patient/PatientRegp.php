<?php
$patientid = $_POST['patientid'];
$pfname = $_POST['pfname']; 
$plname = $_POST['plname'];
$password = $_POST['password'];
$address = $_POST['address'];
$country = $_POST['country'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$bloodgroup = $_POST['bloodgroup'];
$gender = $_POST['gender'];
$birthdate= $_POST['birthdate'];
$emergency_name = $_POST['emergency_name'];
$emergency_no = $_POST['emergency_no'];
$allergy = $_POST['allergy'];
if (!empty($patientid) || !empty($pfname) || !empty($plname) || !empty($password) || !empty($address) || !empty($country)|| !empty($city)|| !empty($phone)|| !empty($email)|| !empty($bloodgroup) || !empty($gender)|| !empty($birthdate) || !empty($emergency_name)|| !empty($emergency_no)|| !empty($allergy)) {
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
 $SELECT = "SELECT patientid From patientreg Where patientid = ? Limit 1";
 $INSERT = "INSERT Into patientreg (patientid, pfname, plname, password,address,country,city,phone,email,bloodgroup,gender,birthdate,emergency_name,emergency_no,allergy,reg_id) values('$patientid','$pfname','$plname','$password','$address','$country','$city','$phone ','$email','$bloodgroup','$gender','$birthdate','$emergency_name','$emergency_no','$allergy','$regid')";
 //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $patientid);
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
 header ("location:../logindata/login.php");
}
?> 