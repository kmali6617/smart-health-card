<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Patient Details</title>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">


    <!--==========Favicon==========-->

        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href.0="../favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91*******</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">
                                <?php 
                                    $doc2 = $_SESSION['doctor_id'];
                                    echo $doc2;
                                ?>
                            </span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="logindata/logout.php" class="mr-3">Log Out</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">

            <a href="home.html">
        <input type="image" src="../favicon/logo.png"  width="40" height="40">&nbsp &nbsp &nbsp &nbsp
        </a>
	      <a class="navbar-brand" href="index.html">Health Card</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index.html#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="index.html#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="index.html#department-section" class="nav-link"><span>Department</span></a></li>
	          <li class="nav-item"><a href="index.html#doctor-section" class="nav-link"><span>Doctors</span></a></li>
	          <li class="nav-item"><a href="index.html#blog-section" class="nav-link"><span>Blog</span></a></li>
	          <li class="nav-item"><a href="index.html#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <!-- <li class="nav-item cta mr-md-2"><a href="healtchk.html" class="nav-link">Appointment</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_10.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">PATIENT DETAILS</h1>
             <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p> -->
          </div>
        </div>
      </div>
    </section>



    <!-- particular patient page -->


    <div id="services" class="services-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h2>
                                <?php 
                                    $sql ="SELECT pfname FROM patientreg where reg_id='" . $_POST['Patinetid'] . "'";
                                    $search_result = filterTable($sql);
                                
                                    // function to connect and execute the query
                                    function filterTable($sql)
                                    {
                                        $connect = mysqli_connect("localhost", "root", "", "ssip");
                                        $filter_Result = mysqli_query($connect, $sql);
                                        return $filter_Result;
                                    }

                                    $row = mysqli_fetch_array($search_result);
                                    echo $row['pfname'];
                                ?>
                            </h2>
                            <p class="line1"></p>
                            <!-- <p class="line2"></p> -->
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4" >
                        
                        <div class="single-services text-center" data-toggle="modal" data-target="#myModal">
                            
                            <div class="services-icon">
                               <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                 <h3 ><a  href="../dieseise details/Patientdisease.html">Diesease Details</a></h3><!--edit the service you give-->
                                </div>
                            </div>
                          <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                       
                      
                </div>
            </div>
        </div>
    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fa fa-ambulance" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="../addmitdata.php">Admit</a></h3> <!--edit the service you give-->
                                <p></p>
                            </div>
                        </div>
                    </div>





                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fa fa-history" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                <h3>Medical History</h3> <!--edit the service you give-->
                                <p></p>
                            </div>
                        </div>
                    </div>




                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <i class="fa fa-file-text" aria-hidden="true"></i>

                            </div>
                            <div class="services-content">
                                <h3>Prescription</h3> <!--edit the service you give-->
                                <p></p>
                            </div>
                        </div>
                    </div>



                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center" data-toggle="modal" data-target="#myModal2">
                            <div class="services-icon" >
                                <i class="fa fa-inr" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                <h3>Payment Roll</h3> <!--edit the service you give-->
                             </div>
                            </div>
                          <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2 class="modal-title">
                                Appoinment
                              
                            </h2>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                 
                                

                                <div class="form-group">
                                    <label for="name"> Docotr ID:</label>
                                    <input type="text" class="form-control" id="Patinetid" name="Patinetid" required maxlength="50">
                                </div>


                                
                                <div class="form-group">
                                    <label for="name">Expert Doctor Name:</label>
                                    <input type="text" class="form-control" name="Expected">
                                </div>



                                <div class="form-group">
                                    <label for="name">Hostipal/Clinic name:</label>
                                    <input type="text" class="form-control" name="Expected">
                                </div>

                                <div class="form-group">
                                    <label for="name">Schedule:</label>
                                    <input type="datetime-local" class="form-control" name="Expected">
                                </div>

                                <div class="form-group">
                                    <label for="name">Purpose:</label>
                                    <input type="textarea" class="form-control" name="Expected">
                                </div>

                                

                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit</button>
                            </form>
          
                    </div>
                </div>
            </div>
        </div>
    </div>



                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single-services text-center" data-toggle="modal" data-target="#myModal3">
                            <div class="services-icon">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </div>
                            <div class="services-content">
                                <h3>Reports</h3> <!--edit the service you give-->
                                </div>
                            </div>
                          <div id="myModal3" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2 class="modal-title">
                                Bill  
                            </h2>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="POST" id="reused_form" action="patient_bill.php">
                                 
                                

                                <div class="form-group">
                                    <label for="name"> Bill Number:</label>
                                    <input type="text" class="form-control"  name="bill_no" required maxlength="50">
                                </div>


                                
                                <div class="form-group">
                                    <label for="name">Patient ID:</label>
                                    <input type="number" class="form-control" name="patientid">
                                </div>


                                <div class="form-group">
                                    <label for="name">Disease Type:</label>
                                    <input type="text" class="form-control" name="disease_type">
                                </div>

                                <div class="form-group">
                                    <label for="name">Medicine Charge:</label>
                                    <input type="text" class="form-control" name="medicine_charge">
                                </div>

                                <div class="form-group">
                                    <label for="name">Lab Charge:</label>
                                    <input type="text" class="form-control" name="lab_charge">
                                </div>



                                <div class="form-group">
                                    <label for="name">Doctor Fees:</label>
                                    <input type="text" class="form-control" name="doctor_fee">
                                </div>

                                <div class="form-group">
                                    <label for="name">Nursing Charge:</label>
                                    <input type="text" class="form-control" name="nursing_charge">
                                </div>

                                <div class="form-group">
                                    <label for="name">Room Charge:</label>
                                    <input type="text" class="form-control" name="room_charge">
                                </div>

                                <div class="form-group">
                                    <label for="name">Operation Charge:</label>
                                    <input type="text" class="form-control" name="operation_charge">
                                </div>

                                <div class="form-group">
                                    <label for="name">Advance Payment:</label>
                                    <input type="text" class="form-control" name="advance_payment">
                                </div>









                                <button type="submit" class="btn btn-lg btn-success btn-block" name="billsubmit">Submit</button>
                            </form>
                             


                              
                          
                        
                    </div>
                </div>
            </div>
        </div>
    </div>




                   </div>
            </div>
        </div>


        <!-- Particular patient end -->


    
		

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Health Card</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Departments</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Neurology</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Opthalmology</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nuclear Magnetic</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Surgical</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cardiology</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Pricing</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services/a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">A. D. Patel Institute of Technology, New Vallabh Vidyanagar,Anand,Gujarat,India</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91**********</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">healthcard@mgail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  
  <script src="../js/main.js"></script>
    
  </body>
</html>