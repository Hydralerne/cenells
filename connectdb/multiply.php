<?php

ob_start();
session_start();
$hostname = '127.0.0.1';
$username = 'root';
$password = 'asdwqe123';
$dbh1 = mysql_connect($hostname, $username, $password); 
$dbh2 = mysql_connect($hostname, $username, $password, true); 
mysql_select_db('cemail', $dbh1);
mysql_select_db('contries', $dbh2);

function profile_connected($dbh1){
	
	$data = array();
	$userid = $_SESSION['ceuser'];
	$query = mysql_query("SELECT * FROM users WHERE id='$userid'",$dbh1);

	while($rows = mysql_fetch_assoc($query)){
		$data[] = $rows;
	}
	return $data;
	
	
}
$data = profile_connected($dbh1);

foreach($data as $info){

}

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

$id = $info['id'];

?>