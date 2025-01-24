<?php

include("../connectdb/index.php");

?>

<?php

if(isset($_SESSION['setsecu']) && $_SESSION['setsecu'] == md5($info['c_password']) && $_COOKIE['_VSEC_45'] == md5($info['id'])){

$filluser = addslashes(htmlspecialchars(strip_tags(trim($_POST['username']))));	
$tooken = addslashes(htmlspecialchars(strip_tags(trim($_POST['tooken']))));	
$filluser = preg_replace('/ +/', '', $filluser);
$tooken = preg_replace('/ +/', '', $tooken);

if(isset($_POST['check'])){

$serty = mysql_query("SELECT user_name FROM users WHERE id='$id'");
while($der = mysql_fetch_array($serty)){
	$celeint_user = $der['user_name'];
}


if(empty($filluser)){
$errors[] = "<div class='error5'><h3>فضلا ادخل اسم المستخدم</h3></div>";
}else {
	$fillchreo = str_replace('_', '', $filluser);
	$fillchret = str_replace('.', '', $fillchreo);
	$fillchrer = str_replace('-', '', $fillchret);
	if(empty($fillchrer)){
	    $errors[] = "<div class='error5'><h3>اسم المستخدم غير صالح</h3></div>";
	}else{
	$rotyui = preg_replace('/[0-9]/', '', $filluser); // some thing wrong here you should redected it
	if(preg_match('/[^A-Za-z0-9,.,_]/', $filluser) || strlen($rotyui) == 0){
		$errors[] = "<div class='error5'><h3>اسم المستخدم غير صالح</h3></div>";
	}else {
	$lengthval = preg_replace('/[^A-Za-z0-9,.,_]/', '', $filluser);
	if(strlen($lengthval) < 4){
		$errors[] = "<div class='error5'><h3>اسم المستخدم قصير جدا</h3></div>";
	}else if(strlen($lengthval) > 20){
		$errors[] = "<div class='error5'><h3>اسم المستخدم طويل جدا</h3></div>";
	}else {
		$reruiujm = str_replace('._', '', $filluser);
		$ofurbnsh = str_replace('_.', '', $reruiujm);
        if(substr($ofurbnsh,-1) == "_" || substr($ofurbnsh,-1) == "."){
        $filename =  substr($ofurbnsh,0,-1);
        }else {
        $filename = $ofurbnsh;
        }
        if(substr($filename,0,1) == "_" || substr($filename,0,1) == "."){
        $boboname = substr($filename,1);
        }else {
        $boboname = $filename;
        }// make old name for folders for more security
		$selectuse = mysql_query("SELECT COUNT(id) FROM users WHERE user_name='$boboname'");
	    $usercount = mysql_result($selectuse,0);		
		if($usercount !== "0"){
			$errors[] = "<div class='error5'><h3>هذا الاسم مستخدم مسبقا</h3></div>";
		}else {
		$fhgoikhr = str_replace('._', '', $filluser);
		$fillname = str_replace('_.', '', $fhgoikhr);
        if(substr($fillname,-1) == "_" || substr($fillname,-1) == "."){
        $filtname =  substr($fillname,0,-1);
        }else {
        $filtname = $fillname;
        }
        if(substr($filtname,0,1) == "_" || substr($filtname,0,1) == "."){
        $username = substr($filtname,1);
        }else {
        $username = $filtname;
        }
		}
	}
	}
	}
}

if(!empty($username)){
$filexists = '../'.$username.'';	
if(is_dir($filexists)){
$errors[] = "<div class='error5'><h3>اسم المستخدم هذا غير متاح</h3></div>";
echo '<script>$(".subusername_5501").attr("disabled","disabled");</script>';
}else {
echo '<div class="true_username"><h3>اسم المستخدم متاح</h3></div>';
echo '<script>$(".subusername_5501").removeAttr("disabled");</script>';
$emam = "true";
}
}else {}
if(isset($_POST['submit'])){
if(isset($_POST['check']) && $emam == "true" && empty($errors) && $tooken == $_COOKIE['_TOKKIEN_SETCTY_45']){
$dirname = $username;
$update = mysql_query("UPDATE users SET user_name='$dirname' WHERE id='$id'");
if(isset($update)){
$renamedir = rename('../'.$celeint_user.'','../'.$dirname.'');
if(isset($renamedir)){
$file = fopen("../{$info['id']}/index.php","w");
fwrite($file,"<?php");
fwrite($file,"
");
fwrite($file,'header("Location:../');
fwrite($file,$dirname);
fwrite($file,'");');
fwrite($file,"
");
fwrite($file,"?>");
fclose($file);
}
echo '
<script>
location.reload();
</script>
';
unset($_SESSION['setsecu']);
setcookie("_VSEC_45", "TREUDONE", time() + (86400 * 30), "/");	
setcookie("_TOKKIEN_SETCTY_45", "TRUEDONE", time() + (86400 * 30), "/");
}else {}
}else {
	unset($_SESSION['setsecu']);
	setcookie("_VSEC_45", "denied in username", time() + (86400 * 30), "/");	
	setcookie("_TOKKIEN_SETCTY_45", "denied in username", time() + (86400 * 30), "/");
    die("access is denied");
}
}
if(empty($errors)){


}else {
foreach($errors as $er){
	echo $er;
}
echo '<script>$(".subusername_5501").attr("disabled","disabled");</script>';
}
}
}else {
	unset($_SESSION['setsecu']);
	setcookie("_VSEC_45", "denied in username", time() + (86400 * 30), "/");
	setcookie("_TOKKIEN_SETCTY_45", "denied in username", time() + (86400 * 30), "/");
    die("access is denied");
}
?>