<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Data</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="jquery.js"></script> 
    <script> 
    $(function(){
      $("#includedContent").load("patient_header.php"); 
    });
	</script>
	 <script> 
    $(function(){
      $("#includedFooter").load("patient_footer.html"); 
    });
    </script>
	
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
  .spec{
	margin-top: 130px;
  		}
</style>

</head>
	
	  <body style="text-align:center;">
	  <div id="includedContent"></div>

		  <?php $doc1 = $_SESSION['student_id']; ?>

		<div class ="spec">


			<?php
			$conn=mysqli_connect("localhost","root","","ssip");
			$result=mysqli_query($conn,"select * from patientreg where reg_id='$doc1'");
			?>
	  
				<h1>  </h1>
				<table class="table table-bordered" id="customers" border="0" align="center" >			
						<tr>
						<td colspan="4" style="font-size:30px;color:black" bgcolor="#007acc" >
						<b>Patient Profile</b></td></tr>

						<?php
							while($row=mysqli_fetch_array($result))
							{
						?>

						<tr>
							<tr>
							<th scope>Reg Id</th>
								<td><?php echo $row['reg_id'];?></td>
							</tr>
							<tr>
								<th scope>Patient Id</th>
								<td><?php echo $row['patientid'];?></td>
							</tr>
							
							<tr>
							<th scope>First name</th>
								<td><?php echo $row['pfname'];?></td>
							</tr>

							<tr>
							<th scope>Lastname</th>
								<td><?php echo $row['plname'];?></td>
							</tr>

							<tr>
							<th scope>Password</th>
								<td><?php echo $row['password'];?></td>
							</tr>

							<tr>
							<th scope>Address</th>
								<td><?php echo $row['address'];?></td>	
							</tr>
							
							<tr>
							<th scope>Country</th>
								<td><?php echo $row['country'];?></td>
							</tr>
							
							<tr>
							<th scope>City</th>
								<td><?php echo $row['city'];?></td>
							</tr>

							<tr>
							<th scope>Phone no</th>
								<td><?php echo $row['phone'];?></td>
							</tr>
							
							<tr>
							<th scope>Email Id</th>
								<td><?php echo $row['email'];?></td>
							</tr>
							
							<tr>
							<th scope>Blood Group</th>
								<td><?php echo $row['bloodgroup'];?></td>
							</tr>
							
							<tr>
							<th scope>Gender</th>
								<td><?php echo $row['gender'];?></td>
							</tr>
							
							<tr>
							<th scope>Birthdate</th>
								<td><?php echo $row['birthdate'];?></td>
							</tr>

							<tr>
							<th scope>Emergency Name</th>
								<td><?php echo $row['emergency_name'];?></td>
							</tr>

							<tr>
							<th scope>Emergency Number</th>
								<td><?php echo $row['emergency_no'];?></td>
							</tr>
							
							<tr>
							<th scope>Allergy</th>
								<td><?php echo $row['allergy'];?></td>
							</tr>
							
							
							
						</tr>	
							
							<?php
								}
							?>

				</table>
		</div>
		<div id="includedFooter"></div>
	</body>
</html>