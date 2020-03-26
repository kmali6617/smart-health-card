<?php
$dsn = "mysql:host=localhost; dbname=ssip";
$db_user="root";
$db_password="";



$sql ="SELECT * FROM appointment";
$search_result = filterTable($sql);


// function to connect and execute the query
function filterTable($sql)
{
    $connect = mysqli_connect("localhost", "root", "", "ssip");
    $filter_Result = mysqli_query($connect, $sql);
    return $filter_Result;
} 

?>

<!DOCTYPE html>
<html>
<head>
    
 
           
  <title>TEST</title>
  <link rel="stylesheet" href="appointmentfetch.css">
</head>

<body>
    <form action="appointment.php" method="post">
    <table class="content-table" style="margin-left:auto;margin-right:auto;">
  <thead>
    <tr>
      <th >First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone No</th>
      <th>Date of Addmission & Time</th>
      
      <th>Gender</th>
      <th>City</th>
      <th>Message</th>
      
    </tr>
    <?php while($row = mysqli_fetch_array($search_result)):?>
      <tbody>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['pno'];?></td>
                    <td><?php echo $row['date1'];?></td>
                    
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['message'];?></td>
                    
                        </tr>
                </tbody>
                <?php endwhile;?>
  </thead>
  
</table>

 
</form>
</body>
</html>


