<html>
    <head>
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
    
            <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
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
            <link rel="manifest" href="../favicon/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">
            <script src="cities.js"></script>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <header>
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
                              <span class="text"><?php 
                                  session_start();
                                  echo "".$_SESSION['student_id'];
                              ?></span>
                          </div>
                          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                              <p class="mb-0 register-link"><a href="../logindata/logout.php" class="mr-3">Log Out</a></p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
      </div>
  
      
                            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
                                <div class="container">
                                <a class="navbar-brand" href="home.html">
                                    <!--img src="favicon/logo.png"  width="40" height="40">&nbsp &nbsp &nbsp &nbsp </img-->
                                    <input type="image" src="../favicon/logo.png"  width="40" height="40">&nbsp &nbsp &nbsp &nbsp
                                </a>
                                    <a class="navbar-brand" href="index.html">Health Card</a>
                                    <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="oi oi-menu"></span> Menu
                                    </button>
                        
                                    <div class="collapse navbar-collapse" id="ftco-nav">
                                    <ul class="navbar-nav nav ml-auto">
                                        <li class="nav-item"><a href="patient_portal.php" class="nav-link"><span>Home</span></a></li>
                                        <li class="nav-item"><a href="#about-section" class="nav-link"><span> Appointment</span></a></li>
                                        
                                        
                                            <li class="nav-item">
                                                
                                                <div class="dropdown">
                                                    <div class="nav-link">
                                                        
                                                                <span class="dropbtn"> Department </span>
                        
                                                        <div class="dropdown-content">
                                                    
                                                            <a href="#">Neurology</a>
                                                                <a href="#">Opthalmology</a>
                                                            <a href="#">Nucler Magnetic</a>
                                                            <a href="#">Surgical</a>
                                                                <a href="#">Cardiology</a>
                                                                <a href="#">Dental</a>
                                                            <a href="#">Gynecologist</a>
                                                            <a href="#">Dermatology</a>
                                                            <a href="#">Athologists</a>
                            
                                                        </div>
                                                </div>
                                                </div>
                                            </li>
                                        <li class="nav-item"><a href="../kkkkk/allergy/Allergy.html" class="nav-link"><span>Allergy</span></a></li>
                                        <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>History</span></a></li>
                                        <!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
                                        <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li> -->
                                        <li class="nav-item"><a href="patientpro.php" class="nav-link"><span>Profile</span></a></li>
                                        
                                    </ul>
                                    </div>
                                </div>
                            </nav>
        

                    
               
                    </div>
 </header>

            </body>
        </html>