<?php
	require_once("session.php");	
	require_once("ClassUser.php");
	$auth_user = new USER();
	
	
	$EID = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM employee WHERE EID=:EID");
	$stmt->execute(array(":EID"=>$EID));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	
	 
	
	
	?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="KACST-logo-tab" sizes="144x144" href="assets/ico/KACST-logo-tab-144.png">
        <link rel="KACST-logo-tab" sizes="114x114" href="assets/ico/KACST-logo-tab-114.png">
        <link rel="KACST-logo-tab" sizes="72x72" href="assets/ico/KACST-logo-tab-72.png">
        <link rel="KACST-logo-tab" href="assets/ico/KACST-logo-tab-57.png">

    </head>

    <body>

       
        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.html"><i class="fa fa-home"></i><br>Home</a>
						</li>
						<li>
							<a href="Contact.php"><i class="fa fa-camera"></i><br>Contact</a>
						</li>
						
						<li class=" active">
							<a href="AuthorisationProfile.php"><i class="fa fa-tasks"></i><br>profile</a>
						</li>
						<li>
							<a href="about.html"><i class="fa fa-user"></i><br>About</a>
						</li>
						<li>
							<a href="CallUS.html"><i class="fa fa-comments"></i><br>Call us</a>
						</li>
						<li> 
						<a href="login.php"><i class="fa fa-user"></i><br>logout</a></li>
					</ul>
				</div>
			</div>
		</nav>



        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <h1>Profile /</h1>
                        <p>Here there is your profile and your services we offer</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- PROFILE -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>Personal Information:</h3>
	                    <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
					<h4>
<?php
     print("Name:     " ); 
     print($userRow['Ename']); 
     echo '<br/></br>';
	 print("Email:     " ); 
     print($userRow['Email']); 
	 echo '<br/><br>';
	 print("Extention:     " ); 
     print($userRow['EXT']); 
	 echo '<br/><br>';
	 print("Position:     " ); 
     print($userRow['Position']); 
	 echo '<br/><br>';
	 print("Brief Job Description:     " ); 
     print($userRow['BriefJobDescription']); 
	?>
	<br><br>
<button ><a href="EmpEditform.php?EID=<?php echo $EID; ?>"> Edit Account </a> </button>
	</h4>
               </div>  
			        </div>
			            </div>
			                </div>
			                   </div>
			                     </div>
			                       </div>
			                          </div>
        <!-- Services -->
		<div class="col-sm-12 services-title wow fadeIn">
		</br>
		</br>
		<h3> Employee privilage:</h3>
		</div>
        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-eye"></i></div>
		                    <h3>Show Employees cards</h3>
		                    <p>The Admin,Employee and HR can show 20 employees information in the contact page .</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2" href="contact.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
					</div>
					<div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-table"></i></div>
		                    <h3>Show Order Result</h3>
		                    <p>The Employee can Show the request status. </p>
							<br>
		                    <div class="work-bottom">
		                        <a class="big-link-2" href="EmpOrder.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-search"></i></div>
		                    <h3>Search for an employee</h3>
		                    <p> The Admin, Employee and HR can search for an employee in the company by name.</p>
							<div class="work-bottom">
		                        <a class="big-link-2" href="contact.php"><i class="fa fa-link"></i></a>
								
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-print"></i></div>
		                    <h3>Request purchase order</h3>
		                    <p> The employee can Purchase order to the human Resource by send Request purchase order massage.</p>
		                   <div class="work-bottom">
		                        <a class="big-link-2" href="PurchaseOrder.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>

         </br>
		     </br>
			      </br>
				      </br>
					      </br>
						       </br>
		 
       <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	This manage Human Recourse web site that allow the employees purchase order to Human Resource by send direct massage, receive replied order from HR , send direct massage to other employee ,search for other employee by name and can get more information ,it is managed by admin which is responsible for add,edit,and delete account.
	                        </p>
	                        <p><a href="about.html">Read more...</a></p>
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
	                        <p><i class="fa fa-map-marker"></i> Address: King Abdulaziz City for Science and Technology (KACST),king abdullah road,Suadi Arabia</p>
	                        <p><i class="fa fa-phone"></i> Phone: 0039 333 12 68 347</p>
	                        <p><i class="fa fa-user"></i> Skype: Human_Resource</p>
	                        <p><i class="fa fa-envelope"></i> Email: <a href="">contact@andia.co.uk</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>