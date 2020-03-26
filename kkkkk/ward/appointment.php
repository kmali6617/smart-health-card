<?php
$fname = $_POST['fname'];
$lname = $_POST['lname']; 
$email = $_POST['email'];
$pno = $_POST['pno'];
$date1 = $_POST['date1'];
$hname = $_POST['hname'];
$dname = $_POST['dname'];
$gender = $_POST['gender'];
$message = $_POST['message'];
$status = $_POST['status'];



if (!empty($fname) || !empty($lname) || !empty($email) || !empty($pno) || !empty($date1) || !empty($hname)|| !empty($dname)|| !empty($gender)|| !empty($message)|| !empty($status)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbregdate = "";
    $dbname = "ssip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbregdate, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT fname From appointment Where fname = ? Limit 1";
     $INSERT = "INSERT Into appointment (fname,lname,email,pno,date1,hname,dname,gender,message,status) values('$fname','$lname','$email','$pno','$date1','$hname','$dname','$gender ','$message','$status')";
     //Prepare bdatement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $fname);
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
 if(isset($_POST['status']))  
      {  
        $selected_val = $_POST['radio'];
          $sql = "UPDATE appointment SET lastname='status' WHERE pno=1234567890"; 
           $statement = $conn->prepare($sql);  
           $statement->execute(  
                array(  
                     'status'     =>     $_POST["status"]  
                )   
           );  
           $count = $statement->rowCount();  
           if($count > 0)  
           {  
                echo "Appointment is approoved"  .$selected_val ;
           }  
           else  
           {  
                echo 'reject by doctor due to doctor is not avaialable';  
           }  
      }  


}
?> 