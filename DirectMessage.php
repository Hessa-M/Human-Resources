<?php
	require_once("session.php");	
	require_once("ClassUser.php");
	
	?>
<!DOCTYPE html>	
<html> 
<head> 
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Direct Messages</title>

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

		
      <link rel="stylesheet" href="assets/css/style2.css">		
	  <link rel="preload" href="https://abs.twimg.com/c/swift/en/init.76b6026449ca56e7d0103eb7b49939aed1c144dd.js" as="script">
      <link rel="preload" href="https://abs.twimg.com/c/swift/en/bundle/timeline.3caf2b4dfa92bec105473901c96b221a1587708e.js" as="script">
      <link rel="preload" href="https://abs.twimg.com/c/swift/en/bundle/boot.f3ec6d04bcd5e679da827ae244b0f598d537d506.js" as="script">
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

		
		
		
<style>

#d{

color:#444;
}

#buttSub2 {
transform:translate(470px,-10px);
}

#butt {
transform:translate(400px,-10px);
	
	background: #ffffff;
	color: #fff;
    text-shadow: none;
	border: 0;
	font-size:30px;
}

#but{

	height: 30px;
	width: 150px;
	    background: #426b9d;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 30 px;
    font-weight: bold;
	    color: #fff;
}

#buttSub {
transform:translate(-440px,-1px);
	height: 30px;
	width: 150px;
    margin-left: 450px;
    padding: 0 20px;
	top:50%;
	left:50%;
    vertical-align: middle;
    background: #426b9d;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 30 px;
    font-weight: bold;
    line-height: 30px;
    color: #fff;
    text-shadow: none;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    -moz-box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}
#buttSub:hover {
	background: #8facd0;
    border: 0;
    color: #fff;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}

#buttSub:active {
	outline: 0;
    background: #8facd0;
    border: 0;
    color: #fff;
    -moz-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
}

#buttSub:focus {
	outline: 0;
    background: #8facd0;
    border: 0;
    color: #fff;
}

#buttSub:active:focus, #buttSub.active:focus {
	outline: 0;
    background: #8facd0;
    border: 0;
    color: #fff;
}
#btnSub {
transform:translate(30px,0px);
	height: 30px;
    margin: 0;
    padding: 0 20px;
	top:50%;
	left:90%;
    vertical-align: middle;
    background: fff;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 20 px;
    font-weight,: 400;
    line-height: 30px;
    color: #fff;
    text-shadow: none;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    -moz-box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}
#btnSub:hover {
	background: #8facd0;
    border: 0;
    color: #fff;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}

#btnSub:active {
	outline: 0;
    background: #8facd0;
    border: 0;
    color: #fff;
    -moz-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
}

#btnSub:focus {
	outline: 0;
    background: #8facd0;
    border: 0;
    color: #fff;
}

#btnSub:active:focus, #btnSub.active:focus {
	outline: 0;
    background: #8facd0;
    border: 0;
    color: #fff;
}

.contact-us-container {
    margin-top: 20px;
    padding-bottom: 50px;
    text-align: left;
	color: #505050;
}

.contact-us-container h3 {
    margin-top: 25px;
    font-family: 'Droid Sans', sans-serif;
    font-size: 16px;
    color: #5d5d5d;
    font-weight: bold;
    text-shadow: 0 1px 0 rgba(255,255,255,.7);
}

#container {
            position: fixed;
            width: 340px;
            height: 90px;
            top: 50%;
            left: 50%;
            margin-top: -140px;
            margin-left: -170px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);

        }
div.scroll {
    width: 100%;
    height: 650px;
    overflow: auto;
}

</style>

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
						<li class=" active">
							<a href="index.html">
								<i class="fa fa-home"></i><br>Home 
							</a>
							
						</li>
						<li>
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
                        <i class="fa fa-envelope"></i>
                        <h1>Direct Messages</h1>
                        <p>Here is easy & useful way to chat with others </p>
                    </div>
					<div class="container">
                       <ul class="breadcrumb">
                          <li><a   href="index.html">Home</a></li>
                          <li class="active">Direct Messages</li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>


		
		<!-- Dierct Messages -->
      <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
					   <div class="portfolio-box2 web-design"> 
		                 <div class="portfolio-box2-container">
					        <div class="DMActivity-header">
						  <div class="DMActivity-toolbar">
     						<button type="submit" name="new" >
									<a href="NewMsg.php" >New Message</a> 
                                </button>
  					</div>
					</div>
					<!-- ---------------------------------- -->								

					
<?php	

	$arr = array();
	
    $user = new USER();
	$EID1 = $_SESSION['user_session']; 
	$MTo1 = $_SESSION['user_session'];
	$result = $user->runQuery("SELECT * FROM message WHERE EID= :EID1 OR MTo= :MTo1");
	$result->execute(array(':EID1' => $EID1, ':MTo1' => $MTo1 ));
                    
          		
					
                   echo'  <div class="DMActivity-container">';  
                   echo'    <div class="DMActivity-body js-ariaBody">';
				   echo'     <div class="DMInbox-content u-scrollY">'; 
				   echo'	   <ul class="DMInbox-conversations">';  
	               echo' <div class="scroll">';
   		 	for($i=0; $row = $result->fetch(); $i++){  
			    if( $row['EID'] == $EID1 ){
			       if(!in_array($row['MTo'] , $arr , true)) 
					  $arr[] = $row['MTo'];
				}
				else {
					if(!in_array($row['EID'] , $arr , true))
					   $arr[] = $row['EID'];
			  }
			}
			
                    $result2 = $user->runQuery("SELECT * FROM employee");
  	                $result2->execute(); 
	        for($i=0; $row2 = $result2->fetch(); $i++){
				if(in_array($row2['EID'] , $arr , true)){
				   echo'          <li class="DMInbox-conversationItem">';  
	               echo'            <div class="DMInboxItem">';
                   echo'              <div class="DMInboxItem-avatar">'; 
                   echo'                 <div class="DMAvatar DMAvatar--1 u-chromeOverflowFix">';
                   echo'                    <span class="DMAvatar-container">';
                   echo'                    <img class="DMAvatar-image" src="upload/'.$row2['EID'].'.jpg">'; 
                   echo'                    </span>';
                   echo'                   </div>';
                   echo'                 </div>';

                   echo'     <div class="DMInboxItem-title">';
                   echo'         <b class="fullname">'.$row2['Ename'].'</b>';
                   echo'         <small class="username">  @'.$row2['Username'].'</small>';
                   echo'     </div>';
				   $_SESSION['MTo'] = $row2['EID'];
                   echo' <button id="butt"><a href="Message.php?MTo='.$row2['EID'].'" > > </a> </button>';
                   echo'  </div>';
                   echo'   </li>';
						
			}
			}			
       			   echo' </div>';
                   echo'  </ul>';
				   echo'</div> ';	     		
                   echo' </div>';
				   echo' </div>';	
	
	
	
	

?>
				
<!-- -----------------  -->	
					   </div>
					</div>
				</div>
			</div>
      </div>			

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