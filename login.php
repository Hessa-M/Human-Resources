       
<?php
session_start();
require_once("ClassUser.php");
$login = new USER();

$error;


if(isset($_POST['btn-login'])&& !empty($_POST['txt_uname'])&& !empty($_POST['txt_password']))
{
	$uname = $_POST['txt_uname'];
	$upass = $_POST['txt_password'];
		
	if($login->doLogin($uname,$upass))
	{
		
		$login->redirect('index.html');
	}
	else
	{
		$error = "Username or Password incorrect!";
	}	
}
?>
	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Login </title>
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
  
        <style>
        /* Basics */
        html, body {
            width: 100%;
            height: 100%;
            font-family: 'Open Sans', sans-serif;
			font-style: italic;
            color: #444;
            -webkit-font-smoothing: antialiased;
            background: #f8f8f8;
        }
        #container {
            position: fixed;
            width: 340px;
            height: 280px;
            top: 50%;
            left: 50%;
            margin-top: -140px;
            margin-left: -170px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);

        }
		.login { 
	position: absolute;
	top: 35%;
	left: 50%;
	margin: -140px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #5a5a5a; text-shadow: 0 0 0px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

		
        form {
            margin: 0 auto;
            margin-top: 20px;
        }
        label {
            color: #555;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 14px;
        }
        p a {
            font-size: 11px;
            color: #aaa;
            float: right;
            margin-top: -13px;
            margin-right: 20px;
         -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            transition: all .4s ease;
        }
        p a:hover {
            color: #555;
        }
        input {
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            outline: none;
        }
        input[type=text],
        input[type=password] ,input[type=time]{
            color: #777;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 290px;
            height: 35px;
            border: 1px solid #c7d0d2;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            transition: all .4s ease;
            }
        input[type=text]:hover,
        input[type=password]:hover,input[type=time]:hover {
            border: 1px solid #b6bfc0;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
        }
        input[type=text]:focus,
        input[type=password]:focus,input[type=time]:focus {
            border: 1px solid #a8c9e4;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #b3c7df;
        }
        #lower {
            background: #b3c7df;
            width: 100%;
            height: 69px;
            margin-top: 20px;
            box-shadow: inset 0 1px 1px #fff;
            border-top: 1px solid #ccc;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        input[type=checkbox] {
            margin-left: 1px;
            margin-top: 30px;
        }
        .check {
            margin-left: 3px;
            font-size: 11px;
            color: #444;
            text-shadow: 0 1px 0 #fff;
        }
        input[type=submit] {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            width: 80px;
            height: 30px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #6b92c1; /*IE fallback*/
            background-image: -webkit-gradient(linear, left top, left bottom, from(#6b92c1), to(#6b92c1));
            background-image: -moz-linear-gradient(top left 90deg, #6b92c1 0%, #6b92c1 100%);
            background-image: linear-gradient(top left 90deg, #6b92c1 0%, #6b92c1 100%);
            border-radius: 30px;
            border: 1px solid #66add6;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#6b92c1), to(#6b92c1));
            background-image: -moz-linear-gradient(top left 90deg, #6b92c1 0%, #6b92c1 100%);
            background-image: linear-gradient(top left 90deg, #6b92c1 0%, #6b92c1 100%);
        }
        input[type=submit]:active {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#426b9d), to(#426b9d));
            background-image: -moz-linear-gradient(top left 90deg, #426b9d 0%, #426b9d 100%);
            background-image: linear-gradient(top left 90deg, #426b9d 0%, #426b9d 100%);
        }
		
		
#buttSub {
transform:translate(-220px,20px);
	height: 30px;
	width: 90px;
    margin-left: 450px;
    padding: 0 20px;
	top:50%;
	left:50%;
    vertical-align: middle;
    background: #426b9d;
    border: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 20 px;
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

        </style>

        </head>

 
 <body> 

		
		 <nav class="navbar" role="navigation">
			 <div class="container">
				 <div class="navbar-header">
					 
					 <a class="navbar-brand"></a>
				 </div>
				 </div> 
				 </nav>
             <div class="login">
	          <h1 align="center">Login</h1>
              </div>

			
           <div id="container">
			
		
				<div id="error"> 
		
	<?php

			if(isset($error))
			{
				
                echo ' <div class="alert alert-danger">';
                  echo ' <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; ';  echo $error; 
                echo '</div>';
			}
			
		?>
        </div>
			
       <form  method="post" >
                    
					<label for="username">Username:</label>
                    <input type="text" class="form-control" name="txt_uname" placeholder="Username" required />
         
		
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="txt_password" placeholder="Password" required/>

                    <div id="lower">
                    <button type="submit" name="btn-login"  id="buttSub" class="btn btn-default">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; Login
			</button>
        </div>
		<!--/ lower-->
                </form>
            </div><!--/ container-->
            <!-- End Page Content -->

		</body>
        </html>