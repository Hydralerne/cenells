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
	$c_email = $_SESSION['c_email'];
	$query = mysql_query("SELECT * FROM users WHERE c_email='$c_email'",$dbh1);

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

if(isset($_GET['country_user'])){

$userid = addslashes(htmlspecialchars(htmlentities(strip_tags(trim($_GET['getid'])))));
$userid = preg_replace('/ +/', '', $userid);

$selectinf = mysql_query("SELECT * FROM info WHERE user_id='$userid'",$dbh1);
while($finfo = mysql_fetch_array($selectinf)){
	$filcontry = $finfo['contry'];
	$city = $finfo['city'];
	$loctype = $finfo['loctype'];
}
$contryquery = mysql_query("SELECT * FROM countries WHERE id='$filcontry'",$dbh2);
while($fetcountry = mysql_fetch_array($contryquery)){
	$finalcountry = $fetcountry['name'];
	$countrycodem = $fetcountry['sortname'];
	$phonecodecnt = $fetcountry['phonecode'];	
}
if($loctype == "city"){
$cityquery = mysql_query("SELECT * FROM cities WHERE id='$city'",$dbh2);
}else {
if($loctype == "state"){
$cityquery = mysql_query("SELECT * FROM states WHERE id='$city'",$dbh2);
}else {}
}
while($cityfetch = mysql_fetch_array($cityquery)){
	$finalcity = $cityfetch['name'];
}
echo '
<div class="relative_codecontry"><p>'.$countrycodem.'</p><a>+'.$phonecodecnt.'</a></div><div class="location_relayivespan"><span>'.$finalcity.' - '.$finalcountry.'</span></span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm8.94 3c-.46-4.17-3.77-7.48-7.94-7.94V1h-2v2.06C6.83 3.52 3.52 6.83 3.06 11H1v2h2.06c.46 4.17 3.77 7.48 7.94 7.94V23h2v-2.06c4.17-.46 7.48-3.77 7.94-7.94H23v-2h-2.06zM12 19c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"></path>
</svg>
';

}

?>