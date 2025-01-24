<?php
include ("../connectdb/index.php");
if(!$_GET){
unset($_SESSION['setsecu']);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>سينيلز - اعدادات الحساب</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="../style/settings-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<script src="../js/jquery.js"></script>
<script src="../js/profile/account-menu.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/jquery.filedrop.js"></script>
<link rel="stylesheet" type="text/css" href="../style/home-style.css" />
<link rel="stylesheet" type="text/css" href="../style/emoicons-style.css" />
<!--
/////////////////////////////
//                         //
//  This Web by :          //
//  Abdelhamed Mohamed     //
//                         //
//  Powered By :           //
//  CE Technology          //
//                         //
/////////////////////////////
-->

<script>
function updateon(){
	$.post("../ajax-php/online-check.php",{online: "submit"});
	setTimeout(updateon,30000);
}
updateon();
console.log = function() {}

</script>
</head>
<body>

<?php

include "../body-html/menu-top.php";
include "../body-html/left-main.php";

?>
<?php
if(!$_GET){
?>
<div class="container">

<div class="welcomepage_secrite">
<div class="top_description_7070">
<img src="../upload/images/low/<?php echo $info['pro_img']; ?>" class="smlimg_settings" />
<span>مرحبا بك <?php echo $info['name']; ?></span>
<div class="bottom_poprtio_set">
<p>يمكنك الان التحكم الكامل في حسابك وحمايتة وتأمينه</p>
<p>من خلال غرفة متطورة من الاعدادات والادوات</p>
</div>
</div>

<div class="column_settings_main">
<div class="first_column_7070">
<div class="topfirst_column_7070">
<span>تسجيل الدخول والامان</span>
<svg class="minmax_ofsseting_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
</svg>
<svg class="right_more_settings" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="under_body_main">
<div class="loginformain_ofstr">

<h3>يمكنك التحكم في بيانات الدخول خاصتك :</h3>
<p class="first_p_7070">البريد الالكتروني او الهاتف</p>
<p class="second_p_7070">التحكم في كلمة مرورك او تغييرها</p>
<p class="third_p_7070">تغيير اسم المستخدم الخاص بك</p>
</div>
<div class="secrite_offsertm">
<h3>يمكنك التحكم في اجراءات الامان خاصتك :</h3>
<p class="firstbot_7070">بريد استرداد الحساب او الهاتف</p>
<p class="secondbot_7070">مراقبة عمليات تسجيل الدخول</p>
<p class="lastbot_7070">اعدادات التنبيهات الامنية</p>
</div>
</div>
<div class="morediscrip_7070_setings"><h5>والمزيد من الاعدادات الاخري</h5></div>
</div>
<div class="secound_column_7070">
<div class="topsec_column_svg">
<span>المعلومات الشخصية والخصوصية</span>
<svg class="minmax_ofsseting_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<svg class="right_more_settings" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="under_body_main">
<div class="loginformain_ofstr">

<h3>يمكنك التحكم في معلوماتك الشخصية :</h3>
<p class="first_p_7070">تغير الاسم الخاص بك وتعيين اللفب</p>
<p class="second_p_7070">تغير الحالة ونوع الحساب</p>
<p class="third_p_7070">تغيير كافة البيانات الاخري</p>
</div>
<div class="secrite_offsertm">
<h3>يمكنك التحكم في اعدادات الخصوصية :</h3>
<p class="firstbot_7070">تغيير نوع خصوصية الحساب خاصتك</p>
<p class="secondbot_7070">تقييد بعض المتابعين عن الحساب</p>
<p class="lastbot_7070">تغيير خصوصية المحتوي</p>
</div>
</div>
<div class="morediscrip_7070_setings"><h5>والمزيد من الاعدادات الاخري</h5></div>
</div>
<div class="third_column_7070">
<div class="topthird_column_7070">
<span>تفضيلات الحساب</span>
<svg class="minmax_ofsseting_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
</svg>
<svg class="right_more_settings" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="under_body_main">
<div class="loginformain_ofstr">
<h3>اعدادات اخري تساعدك علي الاستخدام :</h3>
<p class="first_p_7070">تغيير اللغة وادوات الادخال</p>
<p class="second_p_7070">قائمة الحظر والاشخاص المقيدون</p>
<p class="third_p_7070">حذف الحساب او تعطيله</p>
</div>
</div>
<div class="morediscrip_7070_setings topoiyuuyyr"><h5>والمزيد من الاعدادات الاخري</h5></div>
</div>
</div>
<div class="settings_footer_7070">
<div class="text_main_all_7070"><span>© 2017 | CE Mail . All Rights Reserved</span></div>
</div>
</div>
</div>
<?php
}else {}
if(!isset($_SESSION['setsecu'])){
?>
<div class="pagemain_security">
<div class="container">
<div class="longin_after_access">
<a class="close_secrit_5505"><i class="fa fa-times" aria-hidden="true"></i></a>
<div class="description_5501"><span>من فضلك ادخل كلمة السر للمتابعة</span></div>
<div class="insetform_5501">
<div class="topform_info_5501">
<img src="../upload/images/low/<?php echo $info['pro_img']; ?>" class="form_img_5501" />
<span><?php echo $info['name']; ?></span>
<p><?php echo $info['c_email']; ?></p>
</div>
<div class="bottom_inputs_5501">
<input type="password" class="settings_logpass_5501" placeholder="كلمة المرور" />
<button type="button" class="submit_setlog_5501">تسجيل الدخول</button>
</div>
</div>
<div class="loginerror_5501"></div>
</div>
</div>
<?php

?>
</div>
<?php
}
?>
<?php
if(isset($_SESSION['setsecu']) && $_SESSION['setsecu'] == md5($info['c_password']) && isset($_GET['security'])){
?>
<input type="hidden" class="tokenvalinput" value="<?php echo $_COOKIE['_TOKKIEN_SETCTY_45']; ?>" />
<div class="boiage_voiscript_5501">
<div class="container">
<div class="topdescrip_5501">
<img src="../upload/images/low/<?php echo $info['pro_img']; ?>" />
<p>اعدادات الدخول والامان</p>
</div>
<div class="insetoffset_main">
<div class="all_secritemessage_5501">
<div class="this_rightmenu_5501">
<div class="aqsam_menu_4545">
<span>الاقسام</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
</svg>
</div>
<div class="first_logcheck_54510 sessionoflos_4525">
<h3>معلومات تسجيل الدخول</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
</svg>
</div>
<div class="second_secur_54510 sessionoflos_4525">
<h3>اضافة طبقة من الامان</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="third_revis_54510 sessionoflos_4525">
<h3>مراجعة عمليات الدخول</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
</div>
<div class="fourd_alerts_54510 sessionoflos_4525">
<h3>اعداد التنبيهات الامنية</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
</svg>
</div>
</div>
<div class="baramater_main_5501">
<div class="userid_baramate_5501">
<span>معرف الحساب :</span>
<p><?php echo $info['id']; ?></p>
<button class="userfolt_edit_5501">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<svg class="editas_moresvg_5501" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="relativemian_88776">
<div class="username_baramate_5501">
<span>اسم المستخدم :</span>
<p><?php echo $info['user_name']; ?></p>
<button class="userfolt_edit_5501">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<svg class="editas_moresvg_5501" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="password_baramate_5501">
<span>كلمة المرور :</span>
<p><?php /*echo str_repeat("#",strlen($info['c_password']))*/ ?>#########</p>
<button class="userfolt_edit_5501">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<svg class="editas_moresvg_5501" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="email_baramate_5501">
<span>البريد الالكتروني :</span>
<p><?php echo $info['c_email']; ?></p>
<button class="userfolt_edit_5501">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<svg class="editas_moresvg_5501" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="phone_baramate_5501">
<span>هاتف الاسترداد :</span>
<p>01151041324</p>
<button class="userfolt_edit_5501">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<svg class="editas_moresvg_5501" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
</div>
<div class="main_baramater_volert">
<div class="username_change_5501">
<svg viewBox="0 0 24 24" class="back username_backtoset" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
</svg>
<span>قم بكتابة اسم المستخدم الجديد</span>
<p>@<?php echo $info['user_name']; ?></p>
<input type="text" class="username_textfol" placeholder="اسم الامستخدم" />
<button type="button" class="subusername_5501" disabled>تطبيق التعديل</button>
<div class="getajax_username"></div>
</div>
<div class="password_change_5501">
<svg viewBox="0 0 24 24" class="back password_backtoset" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
</svg>
<span>قم بكتابة كلمة المرور الجديدة</span>
<p>#########</p>
<input type="password" class="password_textfol" placeholder="كلمة المرور" />
<input type="password" class="subpassw_textfol" placeholder="تأكيد كلمة المرور" />
<button type="button" class="subupassbtn_5501" disabled>تطبيق التعديل</button>
<div class="erro_password"></div>
</div>
<div class="email_change_5501">
<svg viewBox="0 0 24 24" class="back email_backtoset" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
</svg>
<span>قم بكتابة البريد الالكتروني الجديد</span>
<p><?php echo $info['c_email']; ?></p>
<input type="text" class="emailop_textfol" placeholder="البريد الالكتروني" />
<button type="button" class="subuemail_5501">تطبيق التعديل</button>
</div>
</div>
<?php
if($_GET['security'] == "1" && $_GET['column'] == "1"){
?>
<script>
	$(".baramater_main_5501").css('margin-left','-100%');
	$(".username_change_5501").fadeIn(0);
	setTimeout(function(){
		$(".username_change_5501").css('margin-left','0px');
	},300);
</script>
<?php
}else {}
?>
<?php
if($_GET['security'] == "1" && $_GET['column'] == "2"){
?>
<script>
	$(".baramater_main_5501").css('margin-left','-100%');
	$(".password_change_5501").fadeIn(0);
	setTimeout(function(){
		$(".password_change_5501").css('margin-left','0px');
	},300);
</script>
<?php
}else {}
?>
<?php
if($_GET['security'] == "1" && $_GET['column'] == "3"){
?>
<script>
	$(".baramater_main_5501").css('margin-left','-100%');
	$(".email_change_5501").fadeIn(0);
	setTimeout(function(){
		$(".email_change_5501").css('margin-left','0px');
	},300);
</script>
<?php
}else {}
?>
<script>
// Send Password 
$(".password_textfol,.subpassw_textfol").keyup(function(){
	var strlen = $(".password_textfol").val();
    var fill = strlen.replace(/\s/g, '').length;
	if(fill < 8){
		$(".subupassbtn_5501").attr("disabled","disabled");
		$(".erro_password").html('<div class="error6"><h3>كلمة المرور المدخلة قصيرة جدا</h3></div>');
	}else if(fill > 32){
		$(".subupassbtn_5501").attr("disabled","disabled");
		$(".erro_password").html('<div class="error6"><h3>كلمة المرور المدخلة طويلة جدا</h3></div>');
	}else {
	$(".subupassbtn_5501").attr("disabled","disabled");
	$(".erro_password").empty();
	if($(".subpassw_textfol").val() == $(".password_textfol").val()){
		$(".subupassbtn_5501").removeAttr("disabled","disabled");
		$(".erro_password").html('<div class="true6"><h3>كلمتا المرور متطابقتان</h3></div>');
	}else {
	if($(".subpassw_textfol").val() !== ""){
		$(".subupassbtn_5501").attr("disabled","disabled");
		$(".erro_password").html('<div class="error6"><h3>كلمتا المرور غير متطابقتان</h3></div>');
	}
	}
	}
});
$(".subupassbtn_5501").click(function(){
	$(this).attr("disabled","disabled");
	var password = $(".password_textfol").val();
	var tooken = $(".tokenvalinput").val();
	$.post("password.php",{submit: "submit",password: password,tooken: tooken},function(e){$(".erro_password").html(e)});
});
// Send The Username
$(".username_textfol").keyup(function(){
	var username = $(this).val();
	$.post("username.php",{check: "true",username: username},function(o){$(".getajax_username").html(o)});
});
$(".subusername_5501").click(function(){
	var username = $(".username_textfol").val();
	var tooken = $(".tokenvalinput").val();
	$.post("username.php",{check: "true",submit: "submit",username: username,tooken: tooken},function(o){$(".getajax_username").html(o)});
});
$(".username_baramate_5501").click(function(){
	$(".baramater_main_5501").css('margin-left','-100%');
	$(".username_change_5501").fadeIn(0);
	setTimeout(function(){
		$(".username_change_5501").css('margin-left','0px');
	},300);
});
$(".username_backtoset").click(function(){
	$(".username_change_5501").css('margin-left','100%');
	setTimeout(function(){
		$(".username_change_5501").fadeOut(0);
		$(".baramater_main_5501").css('margin-left','0px');
	},300);	
});
$(".password_baramate_5501").click(function(){
	$(".baramater_main_5501").css('margin-left','-100%');
	$(".password_change_5501").fadeIn(0);
	setTimeout(function(){
		$(".password_change_5501").css('margin-left','0px');
	},300);
});
$(".password_backtoset").click(function(){
	$(".password_change_5501").css('margin-left','100%');
	setTimeout(function(){
		$(".password_change_5501").fadeOut(0);
		$(".baramater_main_5501").css('margin-left','0px');
	},300);	
});
$(".email_baramate_5501").click(function(){
	$(".baramater_main_5501").css('margin-left','-100%');
	$(".email_change_5501").fadeIn(0);
	setTimeout(function(){
		$(".email_change_5501").css('margin-left','0px');
	},300);
});
$(".email_backtoset").click(function(){
	$(".email_change_5501").css('margin-left','100%');
	setTimeout(function(){
		$(".email_change_5501").fadeOut(0);
		$(".baramater_main_5501").css('margin-left','0px');
	},300);	
});

</script>
</div>
<div class="settings_footer_7070">
<div class="text_main_all_7070 noborder_5501"><span>© 2017 | CENells . All Rights Reserved</span></div>
</div>
</div>
</div>
<?php
}else {}
if(!isset($_SESSION['setsecu']) && isset($_GET['security'])){
	echo '
	<script>
		$("#hidendoingtypeset").val("security");
		$(".pagemain_security").fadeIn(0,function(){
		$(".pagemain_security").css(\'margin-left\',\'0%\');
		});
		$(".close_secrit_5505").click(function(){
			window.location = "../settings/";
		});
		
	</script>
	';
}else {}
?>

<div class="hidden_inputform_5501">
<input type="hidden" id="hidendoingtypeset" />
</div>

<script>
// window.history.pushState("", "", "/");
$(document).ready(function(){
	$(".close_secrit_5505").click(function(){
		$(".pagemain_security").fadeOut(500,function(){
			$(".welcomepage_secrite").fadeIn(function(){
		    $(this).css('margin-left','25px');
			setTimeout(function(){
    			$(".pagemain_security").css('margin-left','100%');
			},500);
			});
		});
	});
	$(".topfirst_column_7070").click(function(){
		$(".welcomepage_secrite").css('margin-left','-100%');
		$("#hidendoingtypeset").val("security");
		setTimeout(function(){
			setTimeout(function(){
			$(".welcomepage_secrite").fadeOut(0);
			},300);
			$(".pagemain_security").fadeIn(0,function(){
			$(".pagemain_security").css('margin-left','0%');
			});
		},200);
	});
});
$(".submit_setlog_5501").click(function(){
	$(this).attr("disabled","disabled");
	$(".settings_logpass_5501").attr("readonly","readonly");
	var doing = $("#hidendoingtypeset").val();
	var access = $(".settings_logpass_5501").val();
	if(access.replace(/ /g,'') == ""){
	var html = '<div class="insetloginerror"><p>من فضلك ادخل كلمة المرور<p></div>';
	$(".loginerror_5501").html(html);
    $(".submit_setlog_5501").removeAttr("disabled");
    $(".settings_logpass_5501").removeAttr("readonly");
	}else if(access.length < 8){
	var html = '<div class="insetloginerror"><p>كلمة المرور المدخلة خاطئة<p></div>';
	$(".loginerror_5501").html(html);
    $(".submit_setlog_5501").removeAttr("disabled");
    $(".settings_logpass_5501").removeAttr("readonly");		
	}else {
	$(".loginerror_5501").empty();
	$.post("loginfun.php",{login: "submit",doing: doing,access: access},function(e){$(".scripts").html(e)});
	}
});
</script>
<div class="scripts"></div>
</body>
</html>
