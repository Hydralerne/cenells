<?php
ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());


function profile_connected(){
	$data = array();
	$userid = $_SESSION['ceuser'];
	$query = mysql_query("SELECT * FROM users WHERE id='$userid'");
	while($rows = mysql_fetch_assoc($query)){
		$data[] = $rows;
	}
	return $data;
}

$data = profile_connected();

foreach($data as $info){

}

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

$id = $info['id'];

?>