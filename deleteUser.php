<?php
  require_once("Includes/dbt.php");
  
  UserDB::getInstance()->delete_user ($_POST['userID']);
  header('Location: Delete.php' );
?>

