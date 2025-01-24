<?php

ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

?>

<?php

if(isset($_POST['loginofouper'])){

$filluser = addslashes(htmlspecialchars(strip_tags(trim($_POST['username']))));
$password = addslashes(htmlspecialchars(strip_tags(trim($_POST['password']))));
$username = preg_replace('/ +/', '', $filluser);
$usercoun = mysql_query("SELECT COUNT(id) FROM cerange WHERE r_user='$username'");
$emailcou = mysql_result($usercoun,0);
$passcoun = mysql_query("SELECT COUNT(id) FROM cerange WHERE r_password='$password' AND r_user='$username'");
$fetpcoun = mysql_result($passcoun,0);

if(empty($username)){
	$error[] = "<div class='username_error'><p>فضلا ادخل اسم المستخدم</p><a>▲</a></div>";
}else {
	if($emailcou == "0"){
		$error[] = "<div class='username_error'><p>اسم المستخدم غير صحيح</p><a>▲</a></div>";
	}else {}
}
if(empty($password) && empty($username)){
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

$_SESSION['cerange'] = $username;
echo '
<script>
$(".buttlog_info input").val("");
</script>
';

}else {
	foreach($error as $er){
		echo $er;
	}
}

echo '
	<script>
    $(document).ready(function(){
	    $("#loginbtclick").removeAttr("disabled");
	    $(".buttlog_info input").removeAttr("readonly");
    });
    </script>
	';
}

?>