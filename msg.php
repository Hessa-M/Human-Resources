<?php
session_start();
require_once("ClassUser.php");
$user = new USER();

	$EID = $_SESSION['user_session'];
    $MTo = $_GET['MTo'];
    if(isset($_POST['send'])){
	   $Content = $_POST['Content'];
       if(isset($Content) && !empty($Content)){
		    $sql = "INSERT INTO message(MTo, Content, EID) VALUES(:MTo, :Content, :EID)";
			$stmt = $user->runQuery($sql);									  
			$stmt->bindparam(":MTo", $MTo);
			$stmt->bindparam(":Content", $Content);
			$stmt->bindparam(":EID", $EID);
			$stmt->execute();	
		  
	        $user->redirect('Message.php?MTo='.$MTo.'');
      }else{
	      $user->redirect('Message.php?MTo='.$MTo.'');
	  }	
    }
	
?>