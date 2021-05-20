
<?php
  
 
require_once 'session.php';
		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "humanresourcemanagement";
	
		
			
	  if(isset($_POST['submit']) ){
		 
	
		  if (!empty($_POST['name']) && !empty($_POST['extention']) && !empty($_POST['email']) && !empty($_POST['Briefjobdescription']) ){
					 
				
	   $name= isset($_POST['name']) ? $_POST['name'] : '';
       $EXT= isset($_POST['extention']) ? $_POST['extention'] : '';
	   $Email= isset($_POST['email']) ? $_POST['email'] : '';
	   $Job= isset($_POST['Briefjobdescription']) ? $_POST['Briefjobdescription'] : '';
	   $Position= isset($_POST['Position']) ? $_POST['Position'] : '';
       $pos = strpos($Email, '@');
       $Username= substr($Email,0,$pos);
       $Password= 'password';
	   
			 
			

  		   if(strstr($Email , "@kacst.edu.sa")){
			         
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO employee (EID, Ename, EXT,Email,BriefJobDescription,Position,Username,Password) VALUES ('', '$name','$EXT','$Email','$Job','$Position','$Username','$Password')";
   
    // use exec() because no results are returned  
	$conn->exec($sql);

    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	 $_SESSION['last_id']= $last_id; // You can set the value however you like.


    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


			 }}}else {
	  echo "can't add successfully ";}


    $conn = null;

			  
			 			 
						 
			  include 'upload.php';


?>