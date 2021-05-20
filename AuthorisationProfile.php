<?php 
    session_start();
	require_once("session.php");	
	require_once("ClassUser.php");
	$user = new USER();
	
	
	$EID = $_SESSION['user_session'];


    
	$query = "SELECT Position FROM employee WHERE EID= :EID";
	$result = $user->runQuery($query);
	$result->execute(array(':EID'=>$EID));       
    $userRow = $result->fetch(PDO::FETCH_ASSOC);   
	 $postion = $userRow['Position'] ;
	if ( $postion == "admin"){
		
		$user->redirect('Admin.php');
	}
	else if ( $postion == "hr"){
		
		$user->redirect('HR.php');
	}
	else{
		
		$user->redirect('profile.php');
	}
	

?>