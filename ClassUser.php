<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($Ename, $EXT, $Email, $Job, $Position, $Username, $Password)
	{
		try
		{
			
			$stmt = $this->conn->prepare("INSERT INTO employee( Ename, EXT, Email, Briefjobdescription,Position, Username, Password) VALUES(:Ename, :EXT, :Email, :Job, :Position, :Username, :Password)");
			
			$stmt->bindparam(":Ename", $Ename);
			$stmt->bindparam(":Email", $Email);										  
			$stmt->bindparam(":Username", $Username);	
            $stmt->bindparam(":Password", $Password);				
			$stmt->bindparam(":Position", $Position);
			$stmt->bindparam(":EXT", $EXT);										  
			$stmt->bindparam(":Job", $Job);	
			
			$stmt->execute();	
			
			//$stmt->execute(array(':Ename'=>$Ename,':EXT'=>$EXT, 'Email'=>$Email, ':Job'=>$Job, 'Position'=>$Position, ':Username'=>$Username, ':Password'=>$Password) );
					
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($uname,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT EID, Username, Password FROM employee WHERE Username=:uname ");
			$stmt->execute(array(':uname'=>$uname));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if($upass == $userRow['Password'])
				{
					$_SESSION['user_session'] = $userRow['EID'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>