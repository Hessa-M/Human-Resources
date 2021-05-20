<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=humanresourcemanagement', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$ii = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM employee WHERE Ename LIKE (:ii) ORDER BY EID ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':ii', $ii, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$Ename = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['Ename']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['Ename']).'\')">'.$Ename.'</li>';
}
?>