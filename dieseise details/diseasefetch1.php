<?php
$dsn = "mysql:host=localhost; dbname=nayan";
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
  
  width: 100%;
}

#customers td, #customers th {
 
  padding: 7px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;

  padding-bottom: 12px;
  text-align: left;
  background-color:  #99d6ff;
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
              <table class="table table-hover" id="customers" border="1">

              <?php while($row = mysqli_fetch_array($search_result)):?>

              <table class="table table-bordered" id="customers" >
               <tr align="center">
              <td colspan="4" style="font-size:30px;color:black" >
               <b>Patient Disease Details</b></td></tr>

                  <tr>
                  <th scope>Date</th>
                  <td width="400"><?php  echo $row['date'];?></td>
                  <th scope>Time</th>
                  <td><?php  echo $row['time'];?></td>
                </tr>
                <tr>
                  <th scope>Doctor Id</th>
                  <td><?php  echo $row['docid'];?></td>
                  <th>Patient Name</th>
                  <td><?php  echo $row['name'];?></td>
                </tr>
                  <tr>
                  <th> Height</th>
                  <td><?php  echo $row['height'];?></td>
                  <th>Weight </th>
                  <td><?php  echo $row['weight'];?></td>

                </tr>
                <tr>
                  <th> Disease Type</th>
                  <td><?php  echo $row['diseasetype'];?></td>
                  <th>Disease Description</th>
                  <td><?php  echo $row['diseasedescription'];?></td>

                </tr>
                <tr>
                  <th>Report Type</th>
                  <td><?php  echo $row['reporttype'];?></td>
                  <th>Report Name </th>
                  <td><?php  echo $row['reportname'];?></td>

                </tr>
                 <tr>
                  <th>Blood Pressure</th>
                  <td><?php  echo $row['bloodpress'];?></td>
                  <th>Diabetes</th>
                  <td><?php  echo $row['Diabetes'];?></td>

                </tr>

                <i class="fa fa-eye" aria-hidden="true"></i>

                        </table>
                    <?php endwhile;?>
              </table>


       </div>
     
</body><br>
<button class="button ">
																Update
															</button>