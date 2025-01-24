<?php

ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

if(isset($_POST['signup'])){
	
	$fillfirst = addslashes(htmlspecialchars(strip_tags(trim($_POST['first_name']))));
	$filllast = addslashes(htmlspecialchars(strip_tags(trim($_POST['last_name']))));
	$filemail = addslashes(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $first_name = preg_replace('/ +/', '', $fillfirst);
    $last_name = preg_replace('/ +/', '', $filllast);
    $email = preg_replace('/ +/', '', $filemail);
	$password = addslashes(htmlspecialchars($_POST['password']));
	$day = htmlspecialchars(trim($_POST['day']));
	$month = htmlspecialchars(trim($_POST['month']));
	$year = htmlspecialchars(trim($_POST['year']));
	$sex = htmlspecialchars(trim($_POST['sex']));
    $name = "$first_name $last_name";
	
// user check function 

if(empty($first_name)){
$error[] = "<div class='firstname_error'><p>من فضلك ادخل الاسم الاول</p><a>▲</a></div>";
}else {
	if(preg_match('/[0-9,.,_]/', $first_name)){
		$error[] = "<div class='firstname_error'><p>الاسم الاول غير صالح</p><a>▲</a></div>";
	}else {
	if(strlen($first_name) < 2){
		$error[] = "<div class='firstname_error'><p>الاسم الاول غير صالح</p><a>▲</a></div>";
	}else {
		if(strlen($first_name) > 30){
			$error[] = "<div class='firstname_error'><p>الاسم الاول غير صالح</p><a>▲</a></div>";
		}
	}
	}
}
	
if(empty($last_name)){
$error[] = "<div class='lastname_error'><p>من فضلك ادخل الاسم الثاني</p><a>▲</a></div>";
}else {
	if(preg_match('/[0-9,.,_]/', $last_name)){
		$error[] = "<div class='lastname_error'><p>الاسم الثاني غير صالح</p><a>▲</a></div>";
	}else {
	if(strlen($last_name) < 3){
		$error[] = "<div class='lastname_error'><p>الاسم الثاني غير صالح</p><a>▲</a></div>";
	}else {
		if(strlen($last_name) > 30){
			$error[] = "<div class='lastname_error'><p>الاسم الثاني غير صالح</p><a>▲</a></div>";
		}
	}
	}
}
//email chck function	
	if(empty($email)){
		$error[] = "<div class='regemail_error'><p>فضلا ادخل البريد الالكتروني</p><a>▲</a></div>";
	}else{
	$selectnum = mysql_query("SELECT COUNT(id) FROM users WHERE c_email='$email'");
	$numbcount = mysql_result($selectnum,0);
	if($numbcount == 1){
		$error[] = "<div class='regemail_error'><p>البريد المدخل مستخدم مسبقا</p><a>▲</a></div>";	
	}else{

	if(strlen($email) < 8){
		$error[] = "<div class='regemail_error'><p>البريد او رقم الهاتف غير صالح</p><a>▲</a></div>";	
	}else{
	
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

if (ctype_digit($email)) {
	
	}else {
		$error[] = "<div class='regemail_error'><p>البريد او رقم الهاتف غير صالح</p><a>▲</a></div>";
	   }
	
    }
	
  }

 }
  
}
// password check function

if(empty($password)){
$error[] = "<div class='repassword_error'><p>من فضلك ادخل كلمة المرور</p><a>▲</a></div>";
}else {
	if(strlen($password) < 8){
		$error[] = "<div class='repassword_error'><p>كلمة المرور قصيرة جدا</p><a>▲</a></div>";
	}else {
		if(strlen($password) > 32){
			$error[] = "<div class='repassword_error'><p>كلمة المرور طويلة جدا</p><a>▲</a></div>";
		}else {}
	}
}
	if(empty($month)){
		$error[] = "<div class='datebirth_error'><p>من فضلك ادخل تاريخ ميلادك</p><a>▲</a></div>";
	}else if(empty($day)){
		$error[] = "<div class='datebirth_error'><p>من فضلك ادخل تاريخ ميلادك</p><a>▲</a></div>";
	}else if(empty($year)){
		$error[] = "<div class='datebirth_error'><p>من فضلك ادخل تاريخ ميلادك</p><a>▲</a></div>";
	}else {}
	if(empty($sex)){
		$error[] = "<div class='sexing_error'><p>من فضلك قم باختيار جنسك</p><a>▲</a></div>";
	}else {}
	
	if(empty($error)){

	if(file_exists("../upload/images/height/letters/".substr($first_name, 0, 1).".png")){
	    $pro_img = "letters/".substr($first_name, 0, 1).".png";
	}else {
		$pro_img = "default/default.png";
	}
	if($sex == "male"){
		$pro_cover = "default/default_ma";
	}
	else if($sex == "female"){
		$pro_cover = "default/default_fe";
	}else {}
	$password = md5($password);
	$insert = mysql_query("INSERT INTO users(id,name,last_name,first_name,c_email,c_password,c_day,c_month,c_year,c_sex,pro_img,pro_cover) VALUES('','$name','$last_name','$first_name','$email','$password','$day','$month','$year','$sex','$pro_img','$pro_cover')");
	if(isset($insert)){
	$select = mysql_query("SELECT id FROM users WHERE c_email='$email' ORDER BY id DESC LIMIT 1");
	$_SESSION['ceuser'] = $userid;
		echo '
		<script>
		window.location = "../";
		</script>
		';
	}else {}
	}else {
		echo '
		<script>
		if($(".lastname_error").length == 0){
		$(".regemail_error").css("margin-top","161px");
		}else {}
		</script>
		';
		foreach($error as $ers){
			
			echo $ers;
			
		}
	}
	echo '
	<script>
	$("#sub-sign").removeAttr("disabled");
    $(".signup-form input").removeAttr("readonly");
	</script>
	';
}


?>

