<?php
$dsn = "mysql:host=localhost; dbname= ssip";
$db_user="root";
$db_password="";



$sql ="SELECT * FROM disease";

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
               <b>Disease Details</b></td></tr>

                
                <tr>
                  <th scope>Date</th>
                  <td><?php  echo $row['date'];?></td>        
                </tr>
                <tr>
                  <th scope>Time</th>
                  <td><?php  echo $row['time'];?></td>        
                </tr>
                  <tr>
                  <th>Doctor ID</th>
                  <td><?php  echo $row['docid'];?></td>
                </tr>
                <tr>
                  <th>Name</th>
                  <td><?php  echo $row['name'];?></td>
                </tr>
                <tr>
                  <th>Height</th>
                  <td><?php  echo $row['height'];?></td>
                </tr>
                 <tr>
                  <th>Weight</th>
                  <td><?php  echo $row['weight'];?></td>
                </tr>
                <tr>
                  <th>Disease Type</th>
                  <td><?php  echo $row['diseasetype'];?></td>
                </tr>
                <tr>
                  <th>Disease Description</th>
                  <td><?php  echo $row['diseasedescription'];?></td>
                </tr>
                <tr>
                  <th>Report Type</th>
                  <td><?php  echo $row['reporttype'];?></td>
                </tr>
                <tr>
                  <th>Report Name</th>
                  <td><?php  echo $row['reportname'];?></td>
                </tr>
                <tr>
                  <th>Blood Pressure</th>
                  <td><?php  echo $row['bloodpress'];?></td>
                </tr>
                <tr>
                  <th>Diabetes</th>
                  <td><?php  echo $row['Diabetes'];?></td>
                </tr>
                <tr>
                  <th>File</th>
                  <td><?php  echo $row['myfile'];?></td>
                </tr>
                <!-- <tr>
                  <th>Emergency Contact No</th>
                  <td><?php // echo $row['emergency_no'];?></td>
                </tr>
                  <tr>
                  <th>Allergy</th>
                  <td><?php  //echo $row['allergy'];?></td>
                </tr> -->
                

                <i class="fa fa-eye" aria-hidden="true"></i>

                        </table>
                    <?php endwhile;?>
              


       </div>
     
</body><br>
