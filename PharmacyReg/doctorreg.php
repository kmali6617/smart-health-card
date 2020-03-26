<?php
//$doctorid = $_POST['doctorid'];
$regdate = $_POST['regdate'];
$dfirstname = $_POST['dfirstname'];
$dlastname = $_POST['dlastname']; 
$password = $_POST['password']; 
$hname = $_POST['hname'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$phoneno = $_POST['phoneno'];
$expertise = $_POST['expertise'];
$demail = $_POST['demail'];
$licenseno = $_POST['licenseno'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];



if (!empty($doctorid) || !empty($regdate) || !empty($dfirstname) || !empty($dlastname) || !empty($password) || !empty($hname)  || !empty($address) || !empty($gender) || !empty($birthdate)|| !empty($phoneno) || !empty($expertise)|| !empty($demail) || !empty($licenseno) || !empty($city) || !empty($state) || !empty($country)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) 
    {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {function RandStr($length, $encrypt = 10){
      $doc_id = '';
      $str = '';
      for($i=0;$i<$encrypt;$i++){
          $doc_id = base_convert(md5(microtime(true)).$str,16,10);}
      return substr($doc_id, 0, $length);
  }
  $docid = RandStr(10);
$SELECT = "SELECT doctorid From doctorreg Where doctorid = ? Limit 1";
$INSERT = "INSERT Into doctorreg(doctorid,regdate,dfirstname,dlastname,password,hname,address,gender,birthdate,phoneno,expertise,licenseno,city,country,demail,state) values('$doctorid','$regdate','$dfirstname','$dlastname','$password','$hname','$address','$gender','$birthdate','$phoneno','$expertise ','$licenseno ','$city','$country','$demail','$state')";
//Prepare bdatement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("i", $docid);
$stmt->execute();
     /* $SELECT = "SELECT doctorid From doctorreg Where doctorid = ? Limit 1";
     $INSERT = "INSERT Into doctorreg values('$doctorid','$regdate','$dfirstname','$dlastname','$password','$hname','$address','$gender','$birthdate','$phoneno','$expertise ','$licenseno ','$city','$country','$demail','$state')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $doctorid);
     $stmt->execute();  */  
     $stmt->bind_result($address);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
        if ($rnum==0) 
        {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->execute();
          echo "New employee inserted sucessfully";
        } 
        else 
        {
            echo "Someone is already registered already register using this id";
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
header("location: ../logindata/Dlogin.php");
?> 