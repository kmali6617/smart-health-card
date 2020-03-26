<?php
$dsn = "mysql:host=localhost; dbname= ssip";
$db_user="root";
$db_password="";



$sql ="SELECT * FROM admitpatient";

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
               <b>Admin patient</b></td></tr>

                
                <tr>
                  <th scope>patientid</th>
                  <td><?php  echo $row['patientid'];?></td>        
                </tr>
                <tr>
                  <th scope>hospitalid</th>
                  <td><?php  echo $row['hospitalid'];?></td>        
                </tr>
                  <tr>
                  <th>Doctor ID</th>
                  <td><?php  echo $row['doctorid'];?></td>
                </tr>
                <tr>
                  <th>Date of Admit</th>
                  <td><?php  echo $row['dateofadmit'];?></td>
                </tr>
                <tr>
                  <th>roomno</th>
                  <td><?php  echo $row['roomno'];?></td>
                </tr>
                 <tr>
                  <th>wardno</th>
                  <td><?php  echo $row['wardno'];?></td>
                </tr>
                
                <tr>
                  <th>casualty</th>
                  <td><?php  echo $row['casualty'];?></td>
                </tr>
                <tr>
                  <th>Fees</th>
                  <td><?php  echo $row['Fees'];?></td>
                </tr>
                
                

                <i class="fa fa-eye" aria-hidden="true"></i>

                        </table>
                    <?php endwhile;?>
              


       </div>
     
</body><br>
