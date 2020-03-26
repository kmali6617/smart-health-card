<?php
$dsn = "mysql:host=localhost; dbname=ssip";
$db_user="root";
$db_password="";



$sql ="SELECT * FROM allergy";
$search_result = filterTable($sql);


// function to connect and execute the query
function filterTable($sql)
{
    $connect = mysqli_connect("localhost", "root", "", "ssip");
    $filter_Result = mysqli_query($connect, $sql);
    return $filter_Result;
} 
if(isset($_POST['update']))
{
    $data = getPosts();
  
        
        $updateStmt = $con->prepare('UPDATE test SET fname = :fname, lname = :lname, age = :age WHERE id = :id');
        $updateStmt->execute(array(
                    ':id'=> $data[0],
                    ':fname'=> $data[1],
                    ':lname'=> $data[2],
                    ':age'  => $data[3],
        ));
        
        
        
    
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>TEST</title>
  <link rel="stylesheet" href="allergyfatch.css">
</head>
<body>
    <form action="allergyfatch.php" method="post">
    <table class="content-table">
  <thead>
    <tr>
      <th >Registration No</th>
     
      <th>Allergy Name</th>
      <th>Symptoms</th>
      <th>Medication</th>
      <th>Frequency</th>
      <th>Message</th>
     
    </tr>
    <?php while($row = mysqli_fetch_array($search_result)):?>
      <tbody>
                <tr>
                    <td><?php echo $row['RegistrationNo'];?></td>
                    <td><?php echo $row['AllergyName'];?></td>
                    <td><?php echo $row['Symptoms'];?></td>
                    <td><?php echo $row['Medication'];?></td>
                    <td><?php echo $row['Frequency'];?></td>
                    <td><?php echo $row['message'];?></td>

                </tr>

                </tbody>
                <?php endwhile;?>
  </thead>
  
</table>

 
</form>
</body>
</html>

