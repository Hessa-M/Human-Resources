<?php 
        require_once('session.php');
        require_once('ClassUser.php');
		$user = new USER();
	    $EID = $_SESSION['user_session'];
		
		
		     
			 




        	  if(isset($_POST['submit']) ){
             
			 	   $ResourceType= isset($_POST['ResourceType']) ? $_POST['ResourceType'] : '';
				   $content= isset($_POST['content']) ? $_POST['content'] : '';
				   $OID = isset($_POST['OID']) ? $_POST['OID'] : '';
				   $Date = date("Y/m/d");
				   $ReplyStatus= isset($_POST['ReplyState']) ? $_POST['ReplyState'] : '';
                   $comment=isset($_POST['comment']) ? $_POST['comment'] : '';
                   
			   
				   


                  $sql ="SELECT RID FROM resource where Type='$ResourceType'";
		           $result = $user->runQuery($sql);
		            $result->execute();
		             for($i=0; $row = $result->fetch(); $i++){
			           $RID =$row['RID'];
					 }
                               try{
                       $Q ="INSERT INTO PurchaseOrder(OID,Date,	ReplyStatus,content,EID,RID,comment) VALUES ('','$Date','start','$content','$EID','$RID','')";   
                       		 $result = $user->runQuery($Q);
                          	$result->execute(array(':OID'=>$OID,':Date'=>$Date ,':ReplyStatus'=>$ReplyStatus,':content'=>$content,':EID'=>$EID,':RID'=>$RID ,':comment'=>$comment));

                              $user->redirect('AuthorisationProfile.php');
							  
							   }catch (PDOException $e){
								   
								   echo $e->getMessage() ;
							   }

			  }

?>