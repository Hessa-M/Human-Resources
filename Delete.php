<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Delete Account</title>
<link rel="stylesheet" href="assets/css/style.css" />
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>


    
		
		<style>
		table#showTable{
border-spacing:10 px;
margin: 0;
    padding:2 px;
    vertical-align: middle;
    background: none;
    border: 1px solid #ddd;
   font-family: 'Open Sans', sans-serif;
    font-size: 15 px;
    font-weight: 100;
    color: #888;
  scrollbars:yes;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;

}
table#showTable th {
    background-color: #426b9d;
    color: white;
}


.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } 
.datagrid {    font-size: 25 px; font-family: 'Open Sans', sans-serif; background: #fff; overflow: hidden; border: 1px solid #DDDDDD; }
.datagrid table td, .datagrid table th { padding: 9px 4px; }
.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #426B9D), color-stop(1, #426B9D) );background:-moz-linear-gradient( center top, #426B9D 5%, #426B9D 100% );
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#426B9D', endColorstr='#426B9D');
background-color:#426B9D; color:#FFFFFF; 
font-size: 15px; font-weight: bold; border-left: 1px solid #DDDDDD; } 
.datagrid table thead th:first-child { border: none; }
.datagrid table tbody td { color: #888888; border-left: 1px solid #DDDDDD;font-size: 12px;border-bottom: 1px solid #DDDDDD;font-weight: normal; }
.datagrid table tbody td:first-child { border-left: none; }
.datagrid table tbody tr:last-child td { border-bottom: none; }
.datagrid table tfoot td div { border-top: 1px solid #DDDDDD;background: #DDDDDD;} 
.datagrid table tfoot td { padding: 0; font-size: 12px } 
.datagrid table tfoot td div{ padding: 2px; }
.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
.datagrid table tfoot  li { display: inline; }
.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #F5F5F5;border: 1px solid #7D7D7D;background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #888888), color-stop(1, #888888) );background:-moz-linear-gradient( center top, #888888 5%, #888888 100% );
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#888888', endColorstr='#888888');
background-color:#888888; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #7D7D7D; color: #F5F5F5;
 background: none; background-color:#888888;}
 div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }
 

#d{

color:#444;
}
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}

#btnsrch {
transform:translate(100px,60px);
	height: 30px;
    margin: 0;
    padding: 0 20px;
	top:50%;
	left:90%;
    vertical-align: middle;
  background: #426b9d;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 20 px;
    font-weight: 400;
    line-height: 30px;
    color: #fff;
    text-shadow: none;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    -moz-box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 1px 25px 0 rgba(0,0,0,.05) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}
#btnsrch:hover {
	background: #8facd0;
    border: 0;
    color: #fff;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}

#btnsrch:active {
	outline: 0;
    background: #8facd0;;
    border: 0;
    color: #fff;
    -moz-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
}

#btnsrch:focus {
	outline: 0;
    background: #8facd0;;
    border: 0;
    color: #fff;
}

#btnsrch:active:focus, #btnsrch.active:focus {
	outline: 0;
    background: #8facd0;;
    border: 0;
    color: #fff;
}
#btnsh
 {
transform:translate(100 px,800 px);
	height: 30px;
    margin: 0;
    padding: 0 20px;
	top:50%;
	left:90%;
    vertical-align: middle;
    background: #426b9d;
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
#btnsh:hover {
	background: #8facd0;;
    border: 0;
    color: #fff;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}

#btnsh:active {
	outline: 0;
    background: #8facd0;;
    border: 0;
    color: #fff;
    -moz-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
    box-shadow: 0 5px 10px 0 rgba(0,0,0,.15) inset, 0 -1px 25px 0 rgba(0,0,0,.05) inset;
}

#btnsh:focus {
	outline: 0;
    background:#8facd0;;
    border: 0;
    color: #fff;
}

#btnsh:active:focus, #btnsh.active:focus {
	outline: 0;
    background: #8facd0;;
    border: 0;
    color: #fff;
}



		</style>

<script>
/*function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}*/
</script>


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
							<a href="index.html">
								<i class="fa fa-home"></i><br>Home 
							</a>
							
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
                       
                        <h1>Delete Account</h1>
                  
                    </div>
					<div class="container">
  <ul class="breadcrumb">
    <li><a   href="AuthorisationProfile.php">Profile</a></li>
    <li class="active">Delete Account</li>
  </ul>
</div>
                </div>
            </div>
        </div>

		
		

        <!-- Delete Account -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	              <!--   <div class="col-sm-7 contact-form wow" 	<p>Enter Employee name wich you want to delete his account then press SHOW his information then DELETE</p>
					
	            	<form  action="exed.php" method="post">      	
	     <input type="text" size="30" onkeyup="showResult(this.value)">
		 <div id="livesearch"></div><br/>
		 <div id="btnsh"<input type="submit" class="btn">
		 </form>show Personal information</input></div>-->


 <div class="content">
           <!-- <form>
                <div class="label_div">Type a keyword : </div>
                <div class="input_container">
                    <input type="text" id="EID" onkeyup="autocomplet()">
                    <ul id="country_list_id"></ul>
                </div>
				<input type="submit" name="btndelete" class="btn" value="Delet"></input>
            </form>

	هنا اخر عملية
	            	<form  action="exed.php" method="post">     

<input type="text" name="uname2" id="name" required>
<input type="submit" name="btndelete" class="btn" value="Delet"></input>
</form>	
<div id="d"<p> Account Information.......... </p></div>
-->
 <form action="Delete.php" method="post">
                
		 <div class="label_div">Type a Name : </div>
                <div class="input_container">
                    <input type="text" name="uname2" id="User_names" onkeyup="autocomplet()" required>
                    <ul id="User_names_list"></ul>
                </div>
				<input type="submit" name="btndelete" class="btn" value="search"></input>
            

		   </form>
</br></br></br>

<div class="datagrid"><table id='showTable' border="black"><thead><tr><th> Employee Name </th><th> Username </th><th> Position </th><th colspan="2"> Action </th></tr></thead>

       
<?php

  require_once("Includes/dbt.php");

if(isset($_POST['btndelete']) && !empty($_POST['uname2'])){
	 $result = UserDB::getInstance()->get_single_user($_POST['uname2']);
	// $result = WishDB::getInstance()->get_users();
	
}else{
	
	 $result = UserDB::getInstance()->get_users();
}


	 
            while ($row = mysqli_fetch_array($result)):
             
                echo "<tbody><tr><td>" . htmlentities($row['Ename']) . "</td>";		
				      echo "<td>" . htmlentities($row['Username']) . "</td>";
				echo "<td>" . htmlentities($row['Position']) . "</td>";
          
				$userID = $row['EID'];
               
	
				
				  
         
              
  echo "<td>"; 
                echo '<form name="Edit" action="editform.php" method="POST">'; 
                      echo '<input type="hidden" name="userID" value="'.$userID. '"/>'; 
					  echo'<input type="submit" name="edit" value="Edit"/>';  

                      // echo '<button > <a href="editform.php?EID='.$userID.'"> edit </a></button>'; 
                   echo "</form>"; 
				           echo " </td>";
			
          
             echo " <td>";  
                  echo' <form name="deleteUser" action="deleteUser.php" method="POST">';  
                       echo ' <input type="hidden" name="userID" value="'.$userID. '"/>';
                      echo'<input type="submit" name="deleteUser" value="Delete"/>';  
                  echo " </form>"; 
             echo " </td>";  
	
	 echo   "</tr></tbody>" ;
     
		   endwhile;
            mysqli_free_result($result);
			?>
</table>
	
	
	






	               </div>
	                       
	                     
	                </div>
	             
	            </div>
	        </div>
</br></br></br>
      <!--  $servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=HumanResourceManagement", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }       
                    // Write QUERY
                /*   $qry=$conn->query ("SELECT * FROM Employee");
				  $qry->execute();

                     
                    // Print results menu elements row by row
                    while($qry->setFetchMode(PDO::FETCH_ASSOC))
                    {
                        echo '<option value="'.$row['Ename'].'" </option>' ;
                    }
                 */
               */-->

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