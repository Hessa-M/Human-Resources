<?php

class UserDB extends mysqli {

    // single instance of self shared among all instances
    private static $instance = null;
    // db connection config vars
    private $user = "root";
    private $pass = "";
    private $dbName = "humanresourcemanagement";
    private $dbHost = "localhost";
	
 public function __construct() {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset('utf-8');
    }
	
	
	  public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }
	 public function get_users() {
        return $this->query("SELECT * FROM employee GROUP BY Ename ");
    }
public function get_single_user($uname2) {
        return $this->query("SELECT * FROM employee WHERE Ename = '"
                        . $uname2 . "'");
    }
	public function get_user_info_by_name($name) {
        $name = $this->real_escape_string($name);
        $user1 = $this->query("SELECT * FROM employee WHERE Ename = '"
                        . $name . "'");

        if ($user1->num_rows > 0){
            $row = $user1->fetch_row();
            return $row[0];
        } else
         return null;
    } 

	   public function delete_user($userID) {
        $this->query("DELETE FROM employee WHERE EID = " . $userID);
    }
	
}
?>