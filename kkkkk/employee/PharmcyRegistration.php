<?php
$Shop Owner = $_POST['Shop Owner'];
$Password= $_POST['Password'];
$Shop Name = $_POST['Shop Name']; 
$Address = $_POST['Address'];
$Contact No. = $_POST['Contact No.'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$City = $_POST['City '];
$Certificate/License = $_POST['Certificate/License'];
$Shop Registration Number = $_POST['Shop Registration Number'];


if (!empty($Shop Owner) || !empty($Password) || !empty($Shop Name) || !empty($Address) || !empty($Contact No.) || !empty($State)|| !empty($Country)|| !empty($City )|| !empty($Certificate/License)|| !empty($Shop Registration Number)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "pharmacy";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Shop Owner From register Where Shop Owner = ? Limit 1";
     $INSERT = "INSERT Into register (Shop Owner, Password, Shop Name, Address,Contact No.,State,Country,City,Certificate/License,Shop Registration Number ) values('$Shop Owner','$Password','$Shop Name','$Address','$Contact No.','$State','$Country','$City ','$Certificate/License','$Shop Registration Number')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $Shop Owner);
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