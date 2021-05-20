<!DOCTYPE html>


<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>

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

		
		<link rel="stylesheet" href="assets/css/style.css" />
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
        <script type="text/javascript" src="assets/js/jquery-1.8.0.min.js"></script> 


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
	<STYLE>



 .web{font-family:tahoma;size:12px;top:10%;border:1px solid #CDCDCD;border-radius:10px;padding:10px;width:50%;}.result{color:#FF0000;}h1{margin:3px 0;font-size:13px;text-decoration:underline;}
div.pagination {
padding: 3px;
margin: 3px;
text-align:center;
font-family:tahoma;
font-size:12px;
}

div.pagination a {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #007799;

text-decoration: none; /* no underline */
color: #426b9d;
}
div.pagination a:hover, div.digg a:active {
border: 1px solid #426b9d;

color: #000;
}
div.pagination span.current {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #426b9d;

font-weight: bold;
background-color: #426b9d;
color: #FFF;
}
div.pagination span.disabled {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #EEE;
color: #DDD;
}


body, input{
	font-family: Calibri, Arial;
	margin: 0px;
	padding: 0px;
}
a {
	color: #0254EB
}
a:visited {
	color: #0254EB
}
#header h2 {
	color: white;
	background-color: #00A1E6;
	margin:0px;
	padding: 5px;
}
.comment {
	width: 400px;
	background-color: #f0f0f0;
	margin: 10px;
}
a.morelink {
	text-decoration:none;
	outline: none;
}
.morecontent span {
	display: none;

}
</STYLE>	
		
<script type="text/javascript">
$(document).ready(function(){
	change_page('0');
});
function change_page(page_id){
     //$(".flash").show();
     //$(".flash").fadeIn(400).html('Loading <img src="ajax-loader.gif" />');
     var dataString = 'page_id='+ page_id;
     $.ajax({
           type: "POST",
           url: "load_data.php",
           data: dataString,
           cache: false,
           success: function(result){
           $(".flash").hide();
			     $("#page_data").html(result);
           }
      });
}
</script>
      
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
							<a href="index.html">
								<i class="fa fa-home"></i><br>Home 
							</a>
							
						</li>
						<li class=" active">
							<a href="Contact.php"><i class="fa fa-camera"></i><br>Contact</a>
						</li>
						
						<li>
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
                        <i class="fa fa-camera"></i>
                        <h1>Contact/</h1>
                        <p>Here you can show all Employee cards and search for an employee</p>
                    </div>
                </div>
            </div>
        </div>
		<br><br>
<br><br>

		
		<!--Search -->
		<form action="contact.php" method="post">
                
		 <div class="label_div">    <h5>Type a Name: </h5> </div>
                <div class="input_container">
                    <input type="text" name="uname2" id="User_names" onkeyup="autocomplet()" >
                    <ul id="User_names_list"></ul>
                </div>
				<input type="submit" name="btnsearch" class="btn" value="search"></input>
            

		   </form>
					
<br><br>
        <!-- Contact -->
        <div class="portfolio-container">
	         <div class="container">
	            <div class="row">
 					<?php

  require_once("Includes/dbt.php");

if(isset($_POST['btnsearch']) && !empty($_POST['uname2'])){
	 $result = UserDB::getInstance()->get_single_user($_POST['uname2']);
 while ($row = mysqli_fetch_array($result)):
             
                           
							echo ' <div class="portfolio-box web-design">';
		                	echo ' <div class="portfolio-box-container">';
			                echo ' <img src="upload/'. $row['EID'].'.jpg">';
			                echo '		<h3>';
							echo $row['Ename']; 
							echo '</h3>';
							echo'	<div class="more">';
							echo ' <h5>';							
							echo ' Email:   ';
                            echo $row['Email'];  
							echo '<br>';
							echo ' EXT:  ';
		                    echo $row['EXT']; 
							echo '<br>';
							echo ' Position:   ';
		                    echo $row['Position']; 
							echo '		 <br>';
							echo ' Brief Job Description:  ';
		                    echo $row['BriefJobDescription'];
							echo ' </h5>';
					        echo '	</div>'; 
			                echo '	</div>'; 
							echo'<br><br><br><br>';
			                echo '</div>';
     
		   endwhile;
            mysqli_free_result($result);

	 
}else{
	
	 //$result = UserDB::getInstance()->get_users();
echo ' <div id="page_data"></div>  '; 
	 }

?>
					
		   
					
	                </div>
	            </div> 
				
	        </div>
			<br><br><Br>

		
		
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