<?php
	  require_once("Includes/dbt.php");
 	
if(isset($_POST['btnsearch']) && !empty($_POST['uname2'])){
	 $result = UserDB::getInstance()->get_single_user($_POST['uname2']);
     while ($row = mysqli_fetch_array($result)):
              $MTo = $row['EID'];
              header('Location: Message.php?MTo='.$MTo.'');
     
		   endwhile;
            mysqli_free_result($result);
	}else{
		
	   header('Location: NewMsg.php');
       
	}

?>