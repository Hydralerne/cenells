<?php
ob_start();
session_start();
if(isset($_SESSION['c_email'])){
	Header("Location:../");
}
?>
<?php
if(isset($_GET['gethtml']) || $include == "true"){
?>
<div class="container">
<div class="logindiv-back scale">
<h1 id="h1log">تسجيل الدخول لحسابك</h1>
<input type="text" autocomplete="off" id="login-email" placeholder="البريد الالكتروني او الهاتف">
<input type="password" id="login-pass" placeholder="كلمة المرور">
<button id="sub-logn" type="submit">تسجيل الدخول</button>
<div class="error_login">
<div class="question"><span>?</span></div>
</div>
<div class="login_error">

</div>
</div>
</div>
<script>
$(document).ready(function(){
	$("#sub-logn").click(function(){
		$(this).attr("disabled","disabled");
        $(".logindiv-back input").attr("readonly","readonly");
		var email = $("#login-email").val();
		var password = $("#login-pass").val();
		$.post("login-session.php",{login: "submit",email: email,password: password},function(e){$(".login_error").html(e);});
	});
});
setTimeout(function(){
$(".all_loading_back").fadeOut(250,function(){
$(".signup-form").addClass("scale");
setTimeout(function(){
$(".logindiv-back").removeClass("scale");
},300);
});
},250);
resvis();
$(window).resize(function(){
	resvis();
});
</script>
<?php
}
?>