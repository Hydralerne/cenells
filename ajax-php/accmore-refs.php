<?php

include ("../connectdb/index.php");

?>

<?php

if(isset($_POST['favorite'])){
$select = mysql_query("SELECT COUNT(id) FROM favourite WHERE fav_user_id='$id' AND fav_for_id='$use' AND fav_type='user'");
$counts = mysql_result($selec,0);
if($counts == 0){
$insert = mysql_query("INSERT INTO favourite(fav_user_id,fav_for_id,fav_type,fav_date) VALUES('$id','$use','user','$timedate')");
$inlert = mysql_query("INSERT INTO follow_alert(user_id,to_id,forse,type,date,seen,online) VALUES('$id','$use','favourite','favourite_user','$timedate','no','insert')");
}else {}
}
if(isset($_POST['removfav'])){
$select = mysql_query("DELETE FROM favourite WHERE fav_user_id='$id' AND fav_for_id='$use' AND fav_type='user'");
$select = mysql_query("DELETE FROM follow_alert WHERE user_id='$id' AND to_id='$use' AND forse='favourite' AND type='favourite_user'");
}

?>

<?php


if(isset($_POST['substarfiv'])){
	$querydre = mysql_query("SELECT * FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
	while($feto = mysql_fetch_array($querydre)){
		$fetid = $feto['id'];
	}
	if(empty($fetid)){
		$queryone = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','five')");
	}else {
		$querytwo = mysql_query("DELETE FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
		if(isset($querytwo)){
		    $querythr = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','five')");
		}
	}
}

if(isset($_POST['substarfor'])){
	$querydre = mysql_query("SELECT * FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
	while($feto = mysql_fetch_array($querydre)){
		$fetid = $feto['id'];
	}
	if(empty($fetid)){
		$queryone = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','four')");
	}else {
		$querytwo = mysql_query("DELETE FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
		if(isset($querytwo)){
		    $querythr = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','four')");
		}
	}
}

if(isset($_POST['substarthr'])){
	$querydre = mysql_query("SELECT * FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
	while($feto = mysql_fetch_array($querydre)){
		$fetid = $feto['id'];
	}
	if(empty($fetid)){
		$queryone = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','three')");
	}else {
		$querytwo = mysql_query("DELETE FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
		if(isset($querytwo)){
		    $querythr = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','three')");
		}
	}
}


if(isset($_POST['substartwo'])){
	$querydre = mysql_query("SELECT * FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
	while($feto = mysql_fetch_array($querydre)){
		$fetid = $feto['id'];
	}
	if(empty($fetid)){
		$queryone = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','two')");
	}else {
		$querytwo = mysql_query("DELETE FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
		if(isset($querytwo)){
		    $querythr = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','two')");
		}
	}
}

if(isset($_POST['substarone'])){
	$querydre = mysql_query("SELECT * FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
	while($feto = mysql_fetch_array($querydre)){
		$fetid = $feto['id'];
	}
	if(empty($fetid)){
		$queryone = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','one')");
	}else {
		$querytwo = mysql_query("DELETE FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
		if(isset($querytwo)){
		    $querythr = mysql_query("INSERT INTO antily(to_id,from_id,type,type_main) VALUES('$use','$id','stars','one')");
		}
	}
}


?>
