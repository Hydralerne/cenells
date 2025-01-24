<?php

include("../connectdb/index.php");

?>


<?php

if(isset($_POST['login'])){
	$doing = addslashes(htmlspecialchars(strip_tags($_POST['doing'])));
	$password = addslashes(htmlspecialchars(strip_tags($_POST['access'])));
	$fillchek = preg_replace('/ +/', '', $password);
	$accesspass = $info['c_password'];
	if(empty($fillchek)){
		echo '
		<script>
		var html = \'<div class="insetloginerror"><p>من فضلك ادخل كلمة المرور<p></div>\';
		$(".loginerror_5501").html(html);
		</script>
		';
	}else {
		if(md5($password) == $accesspass){
			$_SESSION['setsecu'] = md5($info['c_password']);	
			setcookie("_VSEC_45", md5($info['id']), time() + (86400 * 30), "/");
            $mdimcroaf = round(microtime(true))."".date("ymdhis");
			setcookie("_TOKKIEN_SETCTY_45", $mdimcroaf, time() + (86400 * 30), "/");
			echo '<script>window.location = "?security=1";</script>';
		}else {
			echo '
		   <script>
		   var html = \'<div class="insetloginerror"><p>كلمة المرور المدخلة خاطئة<p></div>\';
		   $(".loginerror_5501").html(html);
		   </script>
		   ';				
		}
	}
?>
<script>
$(".submit_setlog_5501").removeAttr("disabled");
$(".settings_logpass_5501").removeAttr("readonly");
</script>
<?php
}else {
	die('submit order');
}
?>
