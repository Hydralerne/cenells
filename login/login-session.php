<?php
ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

if(isset($_SESSION['ceuser'])){
	Header("Location:../");
	die("already login");
}

// login

	
if(isset($_POST['login'])){

$filluser = addslashes(htmlspecialchars(strip_tags(trim($_POST['email']))));
$password = addslashes(htmlspecialchars(strip_tags(trim($_POST['password']))));
$c_email = preg_replace('/ +/', '', $filluser);
$usercoun = mysql_query("SELECT COUNT(id) FROM users WHERE c_email='$c_email'");
$emailcou = mysql_result($usercoun,0);
$mdshpass = md5($password);
$passcoun = mysql_query("SELECT COUNT(id) FROM users WHERE c_password='$mdshpass' AND c_email='$c_email'");
$fetpcoun = mysql_result($passcoun,0);

if(empty($c_email)){
	$error[] = "<div class='username_error'><p>فضلا ادخل البريد الالكتروني</p><a>▲</a></div>";
}else {
	if($emailcou == "0"){
		$error[] = "<div class='username_error'><p>البريد الالكتروني غير صحيح</p><a>▲</a></div>";
	}else {}
}
if(empty($password) && empty($c_email)){
	$error[] = "<div class='password_error'><p>من فضلك ادخل كلمة المرور</p><a>▲</a></div>";
}else {
	if($emailcou == "1" && empty($password)){
		$error[] = "<div class='password_error'><p>من فضلك ادخل كلمة المرور</p><a>▲</a></div>";
	}else {
		if($emailcou == "1" && $fetpcoun == "0"){
			$error[] = "<div class='password_error'><p>كلمة المرور المدخلة خاطئة</p><a>▲</a></div>";
		}else {}
	}
}

if(empty($error)){
$selectid = mysql_query("SELECT id FROM users WHERE c_email='$c_email' AND c_password='$mdshpass' LIMIT 1");
$userid = mysql_result($selectid,0);
if(!empty($userid)){
	$_SESSION['ceuser'] = $userid;
	setcookie("_CEUSER", $userid, time() + (86400 * 30), "/");
	$range = mysql_query("SELECT id FROM cerange WHERE cemail_id='$userid' LIMIT 1");
	while($fet = mysql_fetch_assoc($range)){
		$rangeid = $fet['id'];
		if(!empty($rangeid)){
		$_SESSION['cerange'] = $rangeid;
		setcookie("_RANGEUSER", $rangeid, time() + (86400 * 30), "/");
		}
	}
	echo '
	<script>
    location.reload();
    </script>
	';
}else {
	die('access is denied');
}
if(isset($_SESSION['ceuser'])){
include "getinfo.php";
}else {}
} else {
	foreach($error as $er){
		echo $er;
	}
}


echo '
<script>
$(document).ready(function(){
$("#sub-logn").removeAttr("disabled");
$(".logindiv-back input").removeAttr("readonly");
if($(".username_error").length == 0){
	$(".password_error").addClass("margintop");
}else {
	$(".password_error").removeClass("margintop");
}
});
</script>
';
		

}
	
?>
