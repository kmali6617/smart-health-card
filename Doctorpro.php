<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
<title>Profile Data of Doctor</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctor</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css" >

    
    

       <!--========== Theme Fonts ==========-->

        
        <!--Font Awesome css-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css">

       

        <!--Template css-->
        <link rel="stylesheet" href="css/style.css">

        <!--Responsive css-->
        <link rel="stylesheet" href="css/responsive.css">


        <!--==========Favicon==========-->

        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


  
	
	<style type="text/css">
		.body{background: linear-gradient(to right, #79d9f9 0%,#97eafb 37%,#8de7fb 55%,#c0f3fc 100%);} 
		.class1{
 			 	border-style: solid;
				background-color:cyan;
				height: 6em;
		}
		
		.class2{


			background-image:url("images/bg_8.png"); 
			height: 975px; 
			background-position: 50% 0%;
				

		}



	</style>
</head>
	
  	<body class="body">
		  <?php $doc1 = $_SESSION['doctor_id']; ?>

  		<div class="class1">
						<h1><center>Profile Details of Doctor</center></h1>
		</div>
		<div>


			<?php
			$conn=mysqli_connect("localhost","root","","ssip");
			$result=mysqli_query($conn,"select * from doctorreg where email='$doc1'");
			?>
	  
				<h1> Doctor Details </h1>
				<table border="1">			
				

		</div>

		<?php


			
			while($row=mysqli_fetch_array($result))
			{
				?>

			<tr>
				<tr>
					<td>Doctor Id</td>
					<td><?php echo $row['doctorid'];?></td>
				</tr>
				
				<tr>
					<td>First name</td>
					<td><?php echo $row['firstname'];?></td>
				</tr>

				<tr>
					<td>Lastname</td>
					<td><?php echo $row['lastname'];?></td>
				</tr>

				<tr>
					<td>Address</td>
					<td><?php echo $row['address'];?></td>
				</tr>

				<tr>
					<td>Gender</td>
					<td><?php echo $row['gender'];?></td>	
				</tr>
				

				<tr>
					<td>Birthdate</td>
					<td><?php echo $row['birthdate'];?></td>
				</tr>
				
				<tr>
					<td>Phone no</td>
					<td><?php echo $row['phoneno'];?></td>
				</tr>
				
				<tr>
					<td>Expertisation</td>
					<td><?php echo $row['expertise'];?></td>
				</tr>

				<tr>
					<td>Email Id</td>
					<td><?php echo $row['email'];?></td>
				</tr>
				

				<tr>
					<td>License Number</td>
					<td><?php echo $row['licenseno'];?></td>
				</tr>
				
				<tr>
					<td>City</td>
					<td><?php echo $row['city'];?></td>
				</tr>

				<tr>
					<td>State</td>
					<td><?php echo $row['state'];?></td>
				</tr>

				<tr>
					<td>Country</td>
					<td><?php echo $row['country'];?></td>
				</tr>
			</tr>	
				
				<?php
			}
		?>

	</table>
</div>
</body>
</html>