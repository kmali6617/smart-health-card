<?php
$dsn = "mysql:host=localhost; dbname= ssip";
$db_user="root";
$db_password="";



$sql ="SELECT * FROM patientreg";

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
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  
  width: 50%;
  border:3px solid black;
}

#customers td, #customers th {
 
  padding: 7px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th{
  padding-top: 12px;
  width: 40%;
  padding-bottom: 12px;
  padding-left: 130px;
  text-align: left;
  
  color: black;
 
}
.button {
  background-color: #007acc;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  }
</style>



</head>




<body style="text-align:center;">

    
            <div>
              <!-- <table class="table table-hover" id="customers" border="10"> -->

              <?php while($row = mysqli_fetch_array($search_result)):?>

              <table class="table table-bordered" id="customers" border="0" align="center">
               <tr>
              <td colspan="4" style="font-size:30px;color:black" bgcolor="#007acc" >
               <b>Patient Details</b></td></tr>

                
                <tr>
                  <th scope>Patient Rno:-</th>
                  <td><?php  echo $row['patientid'];?></td>        
                </tr>
                <tr>
                  <th scope>First Name</th>
                  <td><?php  echo $row['pfname'];?></td>        
                </tr>
                  <tr>
                  <th>Least sname</th>
                  <td><?php  echo $row['plname'];?></td>
                </tr>
                <tr>
                  <th>password</th>
                  <td><?php  echo $row['password'];?></td>
                </tr>
                <tr>
                  <th>address</th>
                  <td><?php  echo $row['address'];?></td>
                </tr>
                 <tr>
                  <th>country</th>
                  <td><?php  echo $row['country'];?></td>
                </tr>
                <tr>
                  <th>city</th>
                  <td><?php  echo $row['city'];?></td>
                </tr>
                <tr>
                  <th>Phone</th>
                  <td><?php  echo $row['phone'];?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php  echo $row['email'];?></td>
                </tr>
                <tr>
                  <th>Bloodgroup</th>
                  <td><?php  echo $row['bloodgroup'];?></td>
                </tr>
                <tr>
                  <th>Gender:</th>
                  <td><?php  echo $row['gender'];?></td>
                </tr>
                <tr>
                  <th>Birthdate</th>
                  <td><?php  echo $row['birthdate'];?></td>
                </tr>
                <tr>
                  <th>Emergency Name</th>
                  <td><?php  echo $row['emergency_name'];?></td>
                </tr>
                <tr>
                  <th>Emergency No</th>
                  <td><?php  echo $row['emergency_no'];?></td>
                </tr>
                <tr>
                  <th>Allergy</th>
                  <td><?php  echo $row['allergy'];?></td>
                </tr>
                

                <i class="fa fa-eye" aria-hidden="true"></i>

                        </table>
                    <?php endwhile;?>
              


       </div>
     
</body><br>
<button class="button ">
		Update
</button>