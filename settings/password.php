<?php
include ("../connectdb/index.php");
?>

<?php

if(isset($_SESSION['setsecu']) && $_SESSION['setsecu'] == md5($info['c_password']) && $_COOKIE['_VSEC_45'] == md5($info['id'])){
if(isset($_POST['submit'])){
	
$password = addslashes(htmlspecialchars(trim($_POST['password'])));
$tooken = addslashes(htmlspecialchars(strip_tags(trim($_POST['tooken']))));	
$fillpass = preg_replace('/ +/', '', $password);
$tooken = preg_replace('/ +/', '', $tooken);
$password = md5($password);
if(strlen($fillpass) < 8){
echo '<div class="error6"><h3>كلمة المرور المدخلة طويلة جدا</h3></div>';
}else if(strlen($fillpass) > 32){
echo '<div class="error6"><h3>كلمة المرور المدخلة قصيرة جدا</h3></div>';
}else {
if($info['c_password'] == $password){
echo '<div class="error6"><h3>كلمة المرور المدخلة هي نفس كلمة المرور الحالية</h3></div>';
}else {
if($tooken == $_COOKIE['_TOKKIEN_SETCTY_45']){
$update = mysql_query("UPDATE users SET c_password='$password' WHERE id='$id'");
$_SESSION['setsecu'] = $password;	
if(isset($update)){
echo '
<script>
location.reload();
</script>
';
unset($_SESSION['setsecu']);
setcookie("_VSEC_45", "TREUDONE", time() + (86400 * 30), "/");	
setcookie("_TOKKIEN_SETCTY_45", "TRUEDONE", time() + (86400 * 30), "/");
die();
}
} else { 
	unset($_SESSION['setsecu']);
	setcookie("_VSEC_45", "denied in password", time() + (86400 * 30), "/");
	setcookie("_TOKKIEN_SETCTY_45", "denied in password", time() + (86400 * 30), "/");
    die("access is denied");
}
}
}
}
}else {
	unset($_SESSION['setsecu']);
	setcookie("_VSEC_45", "denied in password", time() + (86400 * 30), "/");
	setcookie("_TOKKIEN_SETCTY_45", "denied in password", time() + (86400 * 30), "/");
    die("access is denied");
}


?>