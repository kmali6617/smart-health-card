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
?>
	<form role="form" method="post" name="search">

<div class="form-group">
<label for="doctorname">
Search by Registraion No.
</label>
<input type="Number" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
</div>

<button type="submit" name="search" id="submit" class="btn btn-o btn-primary">
Search
</button>
</form>
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
<h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

<table class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th class="center">#</th>
<th>Registration Number</th>
<th>Full Name</th>
<th>Address</th>
<th>Country</th>
<th>City</th>
<th>Phone</th>
<th>Email</th>
<th>Blood Group</th>
<th>Gender</th>
<th>Birthdate</th>
<th>Mobile No</th>
<th>Emergency Contact</th>
</tr>
</thead>
<tbody>
<?php
$sql=mysqli_query($con,"select * from patientreg where regno like '%$sdata%' " );
$num=mysqli_num_rows($sql);
if($num>0){
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['regno'];?></td>
<td><?php echo $row['Dname'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['Country'];?></td>
<td><?php echo $row['City'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['BloodGroup'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['Birthdate'];?></td>
<td><?php echo $row['mno'];?></td>
<td><?php echo $row['EmergencyC'];?></td>

<td>

<a href="edit-patient.php?editid=<?php echo $row['ID'];?>"><i class="fa fa-edit"></i></a> || <a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>

</td>
</tr>
<?php 
$cnt=$cnt+1;
}
 } else 
{ ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
<?php }} ?></tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>