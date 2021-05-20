<?php
session_start();
require_once("ClassUser.php");
$edit = new USER();
$Ename = $_POST['Ename'];
$Email = $_POST['Email'];
$EID = $_POST['EID'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];
$Job = $_POST['BriefJobDescription'];

if(isset($_POST['but-save'])){

if(isset($Ename, $Email, $EID, $Password, $ConfirmPassword, $Job)){

	 if(strstr($Email, "@kacst.edu.sa")){
		if(strlen($Job) < 225 ){
			if($Password == $ConfirmPassword){
               if($Password == ''){
                     $sql = "UPDATE employee 
                             SET Ename=?, Email=?, BriefJobDescription=?
	                       	 WHERE EID=?";
                     $q = $edit->runQuery($sql);
                     $q->execute(array($Ename,$Email,$Job,$EID));
                     $edit->redirect('AuthorisationProfile.php');
	}else{
		  $sql = "UPDATE employee 
                 SET Ename=?, Email=?, BriefJobDescription=?, Password=?
		         WHERE EID=?";
          $q = $edit->runQuery($sql);
          $q->execute(array($Ename,$Email,$Job,$Password,$EID));
          $edit->redirect('AuthorisationProfile.php');
	}
	}else{
	    $_SESSION['error'] = "worng password";
		$edit->redirect('EmpEditform.php');
	}
		}else{
			$_SESSION['error'] ="Brief Job Description must be less than 225";
		    $edit->redirect('EmpEditform.php');
		
	}
	}else{
		$_SESSION['error'] = "Email must be as '@kacst.edu.sa'";
		$edit->redirect('EmpEditform.php');
		
		}
	 }else{	  
    	$_SESSION['error'] =  "Cant EDIT ACCOUNT!";
		$edit->redirect('EmpEditform.php');
		}
}else{
        $edit->redirect('AuthorisationProfile.php');
}
?>