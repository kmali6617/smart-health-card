<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Data</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="jquery.js"></script> 
    <script> 
    $(function(){
      $("#includedContent").load("doctor_header.html"); 
    });
	</script>

	 <script> 
    $(function(){
      $("#includedFooter").load("doctor_footer.html"); 
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
	 

		  <?php $doc1 = $_SESSION['doctor_id']; ?>

		<div class ="spec">


			<?php
			$conn=mysqli_connect("localhost","root","","ssip");
			$result=mysqli_query($conn,"select * from doctorreg where doctorid='$doc1'");
			?>
	  
				<h1>  </h1>
				<table class="table table-bordered" id="customers" border="0" align="center" >			
						<tr>
						<td colspan="4" style="font-size:30px;color:black" bgcolor="#007acc" >
						<b>Doctor Profile</b></td></tr>

						<?php
							while($row=mysqli_fetch_array($result))
							{
						?>

						<tr>
							<tr>
							<th scope>Doctor id</th>
								<td><?php echo $row['doctorid'];?></td>
							</tr>
													
							<tr>
							<th scope>First name</th>
								<td><?php echo $row['dfirstname'];?></td>
							</tr>

							<tr>
							<th scope>Lastname</th>
								<td><?php echo $row['dlastname'];?></td>
							</tr>

							
							<tr>
								<th scope>hospital Name:-</th>
								<td><?php echo $row['hname'];?></td>
							</tr>
							<tr>
							<th scope>Address</th>
								<td><?php echo $row['address'];?></td>	
							</tr>

							<tr>
							<th scope>Email</th>
								<td><?php echo $row['demail'];?></td>
							</tr>

							<tr>
							<th scope>city</th>
								<td><?php echo $row['city'];?></td>
							</tr>
							
					
							

							<tr>
							<th scope>State</th>
								<td><?php echo $row['state'];?></td>
							</tr>
							
							<tr>
							<th scope>Country</th>
								<td><?php echo $row['country'];?></td>
							</tr>
							
							<tr>
							<th scope>Gender</th>
								<td><?php echo $row['gender'];?></td>
							</tr>

							<th scope>Birthdate</th>
								<td><?php echo $row['birthdate'];?></td>
							</tr>

							<tr>
							<th scope>Phone no</th>
								<td><?php echo $row['phoneno'];?></td>
							</tr>
							
							<tr>
							<th scope>Expertise:-</th>
								<td><?php echo $row['expertise'];?></td>
							</tr>
							
							<tr>
							<th scope>licenseno</th>
								<td><?php echo $row['licenseno'];?></td>
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