<?php

	   include('ClassUser.php');
       $user = new USER();
	   $OID=$_GET['OID'];
	   
	    $ReplyStatus = $_POST['ReplyStatus'];
        $Comment = $_POST['Comment'];
        $type=$_POST['type'];

   if(isset($ReplyStatus, $Comment)&& !empty($_POST['ReplyStatus']) ){
	   if($ReplyStatus=='Accept'){
		    $p= $user->runQuery("UPDATE resource 
        SET Quantity= Quantity - 1
		WHERE TYPE=:type ");
        $p->execute(array(':type' =>$type));
		   
	   }

        $q = $user->runQuery("UPDATE purchaseorder 
        SET ReplyStatus=?, Comment=? 
		WHERE OID=? ");
        $q->execute(array($ReplyStatus,$Comment,$OID));
      $user->redirect('ordersdisplay.php');
		   
 }else{
		   
		 $user->redirect('ReplyRequest.php?OID='.$OID.'');

	   }
		     
	   
		
?>