<?php
// configuration
require_once 'ClassUser.php';
$obj1=new USER();
// new data
$Ename = $_POST['Ename'];
$Email = $_POST['Email'];
$EID = $_POST['EID'];
$Position = $_POST['Position'];
$EXT = $_POST['EXT'];
$Job = $_POST['BriefJobDescription'];
if(isset($_POST['but-save'])){
if(isset($Ename, $Email, $EID, $Position, $EXT, $Job)){
	 if(strstr($Email, "@Kacst.edu.sa")){
	if(strlen($EXT) == 5){
		if(strlen($Job) < 225 ){
$sql = "UPDATE employee 
        SET Ename=?, EXT=?, Email=?, BriefJobDescription=?, Position=?
		WHERE EID=?";
$q = $obj1->runQuery($sql);
$q->execute(array($Ename,$EXT,$Email,$Job,$Position,$EID));

header("location: Delete.php");
	}else{
		echo "Brief Job Description must be 225 only";
	}
	}else{
		echo "Extention must be 5 only";
	}
	}else{
		 echo"Email must be as '@kacst.edu.sa'";
	 }
	 }else{
	echo"Cant EDIT ACCOUNT!";
}
}else{
header("location: Delete.php");
}
?>

