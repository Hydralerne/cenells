<!DOCTYPE html>
<html>
<head>
<title>Welcome To CEMail</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../style/range-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../3.png" />
<script src="../js/jquery.js"></script>
</head>
<body>
<div class="welcome_range">
<div class="signup_fongir">
<div class="container">
<center>
<div class="signup_form">
<div class="loginsignup">
<div class="loginclicko"><h3>تسجيل الدخول</h3></div>
<div class="signupclick"><h3>انشاء حساب</h3></div>
</div>
<div class="buttlog_info">
<input type="text" class="usernamer" id="loginuser" placeholder="اسم المستخدم" />
<input type="password" class="password" id="loginpass" placeholder="كلمة المرور" />
<div class="register_fottertool">
<button type="button" class="subemailrang" id="loginbtclick"><p>تسجيل الدخول</p></button>
<p class="left_borderform"></p><span class="or">OR</span><p class="right_borderform"></p>
<button type="button" class="cemailogin"><img src="../img/logo/logo.png" /> متابعة باستخدام حساب سيميل</button>
</div>
</div>
<div class="login_error"></div>
<div class="button_info">
<input type="text" class="firstname" placeholder="الاسم الاول" />
<input type="text" class="lastnamer" placeholder="الاسم الثاني" />
<input type="text" class="phonenumb" placeholder="رقم الهاتف" />
<input type="text" class="usernamer" id="signupuser" placeholder="اسم المستخدم" />
<input type="password" class="password" id="signupass" placeholder="كلمة المرور" />
<div class="register_fottertool">
<button type="button" class="subemailrang" id="signbtclick"><p>انشاء حساب</p></button>
<p class="left_borderform"></p><span class="or">OR</span><p class="right_borderform"></p>
<button type="button" class="cemailogin"><img src="../img/logo/logo.png" /> متابعة باستخدام حساب سيميل</button>
</div>
</div>
<div class="signup_error"></div>

</div>
</center>
</div>
</div>
</div>

<div class="bottom_dives">

<div class="menu-bottom">
<div class="menu-bottom-back"></div>
<div class="container">
  <div class="right_description">
  <span class="right-copy">Powered By CE Technology ™</span>
<img draggable="false" class="cetech-logo" src="../img/logo/cemain.png">
  </div>
<center>
<div class="logo">
<img src="../img/1.png" id="logo-img">
</div>
</center><div class="left_discreption">
<span class="left-copy">© 2017 | CE Range . All Rights Reserved</span>
</div>
</div>

</div>

<footer class="footer">
<div class="footer-bottom">
<div class="container">
<div class="language">

<div class="first-package">
<li>English (UK)</li>
<li>العربية</li>
<li>Français (France)</li>
<li>Italiano</li>
<li>Deutsch</li>
<li>Русский</li>
<li>Español</li>
<li>Bahasa Indonesia</li>
<li>Türkçe</li>
<li>Português (Brasil)</li>
<li>हिन्दी</li>
</div>
<div class="second-package">
<li>‏فارسی‏</li>
<li>‏اردو‏</li>
<li>中文(简体)</li>
<li>日本語</li>
<li>Tiếng Việt</li>
<li>Ελληνικά</li>
<li>Íslenska</li>
<li>‏עברית‏</li>
<li>Română</li>
<li>Filipino</li>
<li>Bahasa Indonesia</li>
<li>বাংলা </li>
</div>
</div>
</div>
</div>
</footer>

</div>

<div class="scripts"></div>
<script>
$(document).ready(function(){
	$(".loginclicko").click(function(){
		$(this).fadeOut(100,function(){
			$(".signupclick").fadeIn();
		});
		$(".button_info").fadeOut(100,function(){
			$(".signup_form").css({'height':'455px','margin-top':'215px'});
			$(".buttlog_info").fadeIn();
		});
	});
	$(".signupclick").click(function(){
		$(".signupclick").fadeOut(100);
		$(".buttlog_info").fadeOut(100,function(){
			$(".signup_form").css({'height':'600px','margin-top':'150px'});
			setTimeout(function(){
			$(".button_info").fadeIn(100);
			$(".loginclicko").fadeIn(0);
			},100);
		});
	});
});
$(document).ready(function(){
	$("#signbtclick").click(function(){
		$(this).attr("disabled","disabled");
		$(".button_info input").attr("readonly","readonly");
		var firstname = $(".firstname").val();
		var lastname = $(".lastnamer").val();
		var number = $(".phonenumb").val();
		var username = $("#signupuser").val();
		var password = $("#signupass").val();
		$.post("signup.php",
		{
		signofouper: "submit",
		firstname: firstname,
		lastname: lastname,
		number: number,
		username: username,
		password: password
		},function(e){$(".signup_error").html(e);});
	});
});
$(document).ready(function(){
	$("#loginbtclick").click(function(){
		$(this).attr("disabled","disabled");
		$(".buttlog_info input").attr("readonly","readonly");
		var username = $("#loginuser").val();
		var password = $("#loginpass").val();
		$.post("login.php",{loginofouper: "submit",username: username,password: password},function(o){$(".login_error").html(o);});
	});
});

</script>

</body>
</html>