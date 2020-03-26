<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'ssip');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>	<form role="form" method="post" name="search">
<body style="text-align:center;">
<div class="form-group">
<label for="doctorname"> <font size="4">Search by Registraion No.</font>

</label>
<input type="Number" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
</div>
 <br>
  <button type="submit" name="search" id="submit" class="button "> Search
</button>
</form> 
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
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
  background-color:  #88cdee;
  color: black;
 
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
</style>
</head>




<body style="text-align:center;">


<table class="table table-hover" id="customers" border="1">


	<?php
$sql=mysqli_query($con,"select * from  disease where id like '%$sdata%' " );
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

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


<?php 
$cnt=$cnt+1;
}
 } else 
{ ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
<?php }} ?>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body><br>
<button type="submit" name="submit" class="button " >
																Update
															</button>