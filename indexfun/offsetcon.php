<?php
if($headeroffset == "true"){
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome To CEMail</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="style/index-style.css" />
<link rel="stylesheet" type="text/css" href="style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/title.png" />
<script src="js/jquery.js"></script>
<script src="js/profile/account-menu.js"></script>
<script src="js/ajaxindex.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/jquery.filedrop.js"></script>
<link rel="stylesheet" type="text/css" href="style/home-style.css" />
<link rel="stylesheet" type="text/css" href="style/profile-style.css" />
<link rel="stylesheet" type="text/css" href="style/emoicons-style.css" />
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

<style>
.progress {
  list-style: none;
  margin: 0;
  padding: 0;
  display: table;
  table-layout: fixed;
  width: 100%;
  color: #849397;
  font-family: LatoWeb,href;
}
.progress li {
  position: relative;
  display: table-cell;
  text-align: center;
  font-size: 0.8em;
}
.progress li:before {
  content: attr(data-step);
  display: block;
  margin: 0 auto;
  background: #DFE3E4;
  width: 3em;
  height: 3em;
  text-align: center;
  margin-bottom: 0.25em;
  line-height: 3em;
  border-radius: 100%;
  position: relative;
  z-index: 1000;
}
.progress li:after {
  content: '';
  position: absolute;
  display: block;
  background: #DFE3E4;
  width: 100%;
  height: 0.5em;
  top: 1.25em;
  left: 50%;
  margin-left: 1.5em\9;
  z-index: -1;
}
.progress li:last-child:after {
  display: none;
}
.progress li.is-complete {
  color: #2ECC71;
}
.progress > li.is-complete:before, .progress > li.is-complete:after {
    color: #FFF;
    background: #2ECC71;
}
.progress li.is-active {
  color: #3498DB;
}
.progress li.is-active:before {
  color: #FFF;
  background: #3498DB;
}

/**
 * Needed for IE8
 */
.progress__last:after {
  display: none !important;
}

/**
 * Size Extensions
 */
.progress--medium {
  font-size: 1.5em;
}

.progress--large {
  font-size: 2em;
}
</style>

<script>
function updateon(){
	$.post("ajax-php/online-check.php",{online: "submit"});
	setTimeout(updateon,30000);
}
updateon();
console.log = function() {}

</script>
</head>
<body>
<div class="header"></div>
<?php

include "body-html/menu-top.php";


?>
<div class="container">


<div class="step-from">
<ol class="progress progress--large">
  <li class="is-complete" data-step="1">
    انشاء حساب
  </li>
  
  <li class="<?php if($info['email_comfig'] == "true"){echo "is-complete";}else{echo "is-active";} ?>" data-step="2">
    تأكيد البريد
  </li>
    <li class="<?php if($info['email_comfig'] == "true"){if($info['info_config'] == "true"){echo "is-complete";}else{echo "is-active";}} ?>" data-step="3">
    المعلومات 
  </li>
  <li class="<?php if($info['email_comfig'] == "true"){if($info['info_config'] == "true"){if($info['settings_config'] == "true"){echo "is-complete";}else{echo "is-active";}}} ?>" data-step="4">
    الاعدادات
  </li>
  <li data-step="5" class="<?php if($info['email_comfig'] == "true"){if($info['info_config'] == "true"){if($info['settings_config'] == "true"){echo "is-active";}}} ?>">
    انهاء
  </li>
</ol>
</div>
<style>
.footer-top {
	margin-top: 1000px;
}
</style>
<?php 


if($info['email_comfig'] == "true"){
	
}else{

?>

<div class="email-conferm">
<style>
.footer-conferm {
	margin-top: 1000px!important;
}
</style>
<div class="info-emailcon-top">
<div class="all-see5638">
<h2>لقد أرسلنا رسالة الي بريدك الالكتروني بها رمز التأكيد لتفعيل حسابك</h2>
<span class="email-minspancon"><?php echo $info['c_email']; ?></span>
<h3 class="h3error_conferm">
<img id="loading-conferm" src="img/loading.gif" />
</h3>
<div class="derrt_76">
<div class="conferm-input-main">
<span>من فضلك ادخل رمز التأكيد</span>
<input type="text" id="coningo_5768" placeholder="######" />
<div>
<button type="button" id="subconfig_5768">متابعة</button>
</div>
</div>
 <span class="error_send_8786">| ألم تستلم رمزا</span>
<p class="error_resen_45">اعادة ارسال الرمز</p>
</div>
</div>
</div>


</div>



<?php

}



if($info['email_comfig'] == "true"){
	
if($info['info_config'] == "true"){

}else{
?>




<div class="info-main_8786">
<style>
.footer-conferm {
	margin-top: 1500px!important;
}
</style>

<div class="rigt-column-conferm">

<div class="account-type-select">

<div class="select-account-type">
<svg viewBox="0 0 24 24" id="acctypesvg_54" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span>ما نوع الحساب</span>

<div class="main_4635">
<svg viewBox="0 0 24 24" id="select-icon-80" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"></path>
</svg>
<div class="selected-type">
<li id="s_7597">حدد الفئة</li>
</div>
  </div>
  
  
<ol id="selacctypeol" >
<li value="1">حساب شخصي</li>
<li value="9">شخصية عامة</li>
<li value="4">رجل أعمال</li>
<li value="5">رياضي</li>
<li value="6">سياسي</li>
<li value="7">شخصية إخبارية</li>
<li value="8">شخصية خيالية</li>
<li value="11">شخصية في فيلم</li>
<li value="2">حيوان أليف</li>
<li value="3">راقص</li>
<li value="12">صحفي</li>
<li value="13">طباخ</li>
<li value="14">معلم</li>
<li value="15">عالِم</li>
<li value="16">فنان</li>
<li value="17">فنان ترفيهي</li>
<li value="18">فنان كوميدي</li>
<li value="19">كاتب</li>
<li value="20">مؤلف</li>
<li value="21">مدرّب</li>
<li value="22">مدون</li>
<li value="23">مسؤول حكومي</li>
<li value="24">مصمم</li>
<li value="25">مصور فوتوغرافي</li>
<li value="26">مقاول</li>
<li value="27">ممثل/مخرج</li>
<li value="28">مُنتِج</li>
<li value="29">موسيقي/فرقة</li>
<li value="30">أستوديو/تليفزيون</li>
<li value="31">أغنية</li>
<li value="32">اتحاد رياضي</li>
<li value="33">الألبوم</li>
<li value="34">سينما</li>
<li value="35">برنامج تلفزيوني</li>
<li value="36">جائزة موسيقية</li>
<li value="37">جولة فنية</li>
<li value="38">سلسلات الكتب</li>
<li value="39">سينما</li>
<li value="40">شبكة تلفزيونية</li>
<li value="41">شخصية خيالية</li>
<li value="42">شخصية في فيلم</li>
<li value="43">شركة تسجيلات</li>
<li value="44">فريق رياضي</li>
<li value="45">فريق رياضي مدرسي</li>
<li value="46">فريق رياضي هاوٍ</li>
<li value="47">فن الأداء</li>
<li value="48">فيديو موسيقي</li>
<li value="49">فيلم</li>
<li value="50">قائمة موسيقية</li>
<li value="51">قناة تلفزيونية</li>
<li value="52">كتاب</li>
<li value="53">مجلة</li>
<li value="54">محطة إذاعية</li>
<li value="55">مسرحية</li>
<li value="56">مكان الأداء</li>
<li value="57">مكتبة</li>
<li value="58">ملاعب رياضية وإستاد</li>
<li value="59">نشرة</li>
<li value="60">أغذية/مشروبات</li>
<li value="61">أنشطة تجارية صغيرة</li>
<li value="62">إتصالات</li>
<li value="63">إنترنت/برامج</li>
<li value="64">التعدين/المواد</li>
<li value="65">السفر/الترفيه</li>
<li value="66">الصحة/الجمال</li>
<li value="67">الفضاء/الدفاع</li>
<li value="68">المدرسة الإعدادية</li>
<li value="70">بنك/مؤسسة مالية</li>
<li value="71">تبغ</li>
<li value="72">تعليم</li>
<li value="73">تكنولوجيا حيوية</li>
<li value="74">جامعة</li>
<li value="75">حزب سياسي</li>
<li value="76">حضانة</li>
<li value="77">خدمة استشارة/اعمال</li>
<li value="78">زراعة/مزارع</li>
<li value="79">سيارات وقطع غيار</li>
<li value="80">شركة</li>
<li value="81">شركة تأمين</li>
<li value="82">شركة نقل البضائع</li>
<li value="83">صحة/طب/أدوية</li>
<li value="84">صناعات</li>
<li value="85">طاقة</li>
<li value="86">قانون</li>
<li value="87">قضية</li>
<li value="88">كمبيوتر/تقنيات</li>
<li value="89">مؤسسة دينية</li>
<li value="90">مدرسة</li>
<li value="91">مدرسة ابتدائية</li>
<li value="92">منظمة</li>
<li value="93">منظمة اجتماعية</li>
<li value="94">منظمة حكومية</li>
<li value="95">منظمة سياسية</li>
<li value="96">منظمة غير حكومية</li>
<li value="97">منظمة غير ربحية</li>
<li value="98">مواد كيميائية</li>
<li value="99">هندسة/إنشاء</li>
<li value="100">وسائل الإعلام/الأخبار</li>

</ol>

</div>


</div>

<div class="husband-or-not">
<p class="e5teyary">(اختياري)</p>

<svg viewBox="0 0 24 24" id="social-state-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path>
</svg>
<span>ما هي حالتك الاجتماعية</span>

 <div class="sel_4644">
<div class="select_4532div">
<li id="s_7597">حالتك الاجتماعية</li>
</div>
<svg viewBox="0 0 24 24" id="select-icon-sd976" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"></path>
</svg>
  </div>
  
  
<ol id="select_rt98">

<li value="a1">أعزب</li>
<li value="a2">مرتبط</li>
<li value="a3">مخطوب</li>
<li value="a4">متزوج</li>
<li value="a5">زواج مدني</li>
<li value="a6">شراكة أسرية</li>
<li value="a7">في علاقة مفتوحة</li>
<li value="a8">علاقة معقّدة</li>
<li value="a9">منفصل</li>
<li value="a10">مطلّق</li>
<li value="a11">أرمل</li>

</ol>




</div>

<div class="right-hobe">
<p class="e5teyary">(اختياري)</p>

<svg viewBox="0 0 24 24" id="hope_icons_43" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M3.55 18.54l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8zM11 22.45h2V19.5h-2v2.95zM4 10.5H1v2h3v-2zm11-4.19V1.5H9v4.81C7.21 7.35 6 9.28 6 11.5c0 3.31 2.69 6 6 6s6-2.69 6-6c0-2.22-1.21-4.15-3-5.19zm5 4.19v2h3v-2h-3zm-2.76 7.66l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4z"/>
</svg>
<span>ما هي هوايتك المفضلة</span>
<input type="text" id="hope_574" placeholder="اكتب هوايتك" />

</div>

<div class="about-you">

<svg viewBox="0 0 24 24" id="about-you-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span>اكتب نبذة مختصر عن حالتك</span>
<input type="text" id="aboutui_764" placeholder="اكتب عن نفسك" />


</div>


</div>


<div class="left-column-conferm">

<div class="contry-select">
<svg viewBox="0 0 24 24" id="gps-location-conferm" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm8.94 3c-.46-4.17-3.77-7.48-7.94-7.94V1h-2v2.06C6.83 3.52 3.52 6.83 3.06 11H1v2h2.06c.46 4.17 3.77 7.48 7.94 7.94V23h2v-2.06c4.17-.46 7.48-3.77 7.94-7.94H23v-2h-2.06zM12 19c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"></path>
</svg>
<span class="header_topcount">في اي بلد تقيم</span>
<input type="text" id="country-type-text" placeholder="اكتب اسم بلدك الحالية" />
<div class="ajax_contryresult"></div>
</div>

<div class="city-select">
<svg viewBox="0 0 24 24" id="city-icon-location" xmlns="http://www.w3.org/2000/svg">
    <path d="M15 11V5l-3-3-3 3v2H3v14h18V11h-6zm-8 8H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm6 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm6 12h-2v-2h2v2zm0-4h-2v-2h2v2z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span class="header_topcount">في اي مدينة تقيم</span>
<input type="text" id="city-type-text" disabled="disabled" placeholder="اكتب اسم مدينتك الحالية" />
<div class="ajax_cityresult"></div>
</div>

<div class="select-work">
<p class="e5teyary">(اختياري)</p>

<svg viewBox="0 0 24 24" id="select-work-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path>
</svg>
<span>ما هي وظيفتك</span>
<input type="text" id="work-selinput" placeholder="ماذا وأين تعمل؟">
</div>

<div class="select-education">
<p class="e5teyary">(اختياري)</p>

<svg viewBox="0 0 24 24" id="education-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"></path>
</svg>

<span>ما هو مؤهلك الدراسي؟</span>
<input type="text" id="educationselinput" placeholder="ماذا وأين درست؟">

</div>

</div>

<span class="desc_infofill">قم بملئ البيانات مع العلم انه يمكن تغييرها فيما بعد</span>

<button id="suballinfo" type="button">متابعة</button>

<div id="error_config_info"></div>

</div>



<?php

}

?>


<?php

if($info['email_comfig'] == "true"){
	
if($info['info_config'] == "true"){

if($info['settings_config'] == "true"){

}
else{

?>


<div class="setting-config-main">

<div class="disable_354"></div>

<div class="sah5sy_or_3am">
<span>من فضلك قم باختيار خصوصية حسابك</span>
<div class="personal" value="per">
<svg viewBox="0 0 24 24" id="lock-accin" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
</svg>
<p>حساب خاص</p>
</div>

<div class="interna" value="pub">
<svg viewBox="0 0 24 24" id="publick-ightr" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
</svg>
<p>حساب عام</p>
</div>

</div>

<div class="all_43">

<div class="tawdi7-elma3lomat">

<span>ما الفرق بين الحساب الخاص والحساب العام؟</span>

<p>
الحساب الخاص لايمكن لاي مستخدم متابعته الا بموافقة مالك الحساب وكذلك لا يمكنه رؤية منشوراته الا بالموافقة علي المتابعة من طرف مالك الحساب اما الحساب العام فيمكن لاي مستخدم متابعته او مشاهدة منشوراته مع العلم انه يمكن تخصيص خصوصية كل منشور علي حدا في كلتا الحالتين
</p>

</div>

<button id="subaccset_43" type="button">متابعة</button>

</div>

<input type="hidden" id="hidetypefuc" />

<div class="script_87"></div>

</div>

<?php

}
}
}

?>



<?php

if($info['email_comfig'] == "true"){
	
if($info['info_config'] == "true"){

if($info['settings_config'] == "true"){

?>


<div class="finish-final">

<span>!تهانينا</span>
<p>لقد انتهيت من انشاء حسابك يمكنك الان التواصل مع من تريد</p>

<div class="user_name_creat">
<h5>قم بانشاء اسم المستخدم الخاص بك</h5>

<input type="text" id="text_input_userc" placeholder="اكتب اسم المستخدم" />

<div class="error_user_creat">
</div>

</div>

<button type="button" id="config_account">انهاء</button>


</div>


<?php

}
}
}
}

?>





</div>


<!--

<footer class="footer-conferm">
<div class="footer-top">
<div class="first-colum">
<h3></h3>
</div>

<div class="container">
<div class="copyright">
<span class="left-copy">© 2016 | CE Mail . All Rights Reserved</span>
<span class="right-copy">Powered By CE Technology ™</span>
<img draggable="false" class="cetech-logo" src="img/logo/cemain.png">
</div>
</div>
</div>
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
<li>فارسی</li>
<li>اردو</li>
<li>中文(简体)</li>
<li>日本語</li>
<li>Tiếng Việt</li>
<li>Ελληνικά</li>
<li>Íslenska</li>
<li>עברית</li>
<li>Română</li>
<li>Filipino</li>
<li>Bahasa Indonesia</li>
<li>বাংলা </li>
</div>
</div>
</div>
</div>
</footer>

-->



<script>

$(".select_586").click(function(){
    $("#select_ol").toggleClass("active");
});

$(".contry-select ol li").click(function(){
	$(".select_586 li").remove();
	$(this).clone().appendTo($(".select_586"));
    $("#select_ol").toggleClass("active");
});

$(".selected-type").click(function(){
    $("#selacctypeol").toggleClass("active");
});

$("#selacctypeol li").click(function(){
	$(".selected-type li").remove();
	$(this).clone().appendTo($(".selected-type"));
    $("#selacctypeol").toggleClass("active");
});


$(".select_4532div").click(function(){
    $("#select_rt98").toggleClass("active");
});

$("#select_rt98 li").click(function(){
	$(".select_4532div li").remove();
	$(this).clone().appendTo($(".select_4532div"));
    $("#select_rt98").toggleClass("active");
});


$(".selected-type").click(function(){
	$(".contry-select ol,.husband-or-not ol").removeClass("active");
});
$(".select_586").click(function(){
	$(".account-type-select ol,.husband-or-not ol").removeClass("active");
});
$(".select_4532div").click(function(){
	$(".contry-select ol,.account-type-select ol").removeClass("active");
});

$(".info-main_8786 input").focus(function(){
	$(".info-main_8786 ol").removeClass("active");
});

$(".left-column-conferm input").focus(function(){
	$(this).css({width: '400px','margin-left': '35px'});
	$(this).blur(function(){
		$(this).css({width: '230px','margin-left': '120px'});
	});
});

$(".rigt-column-conferm input").focus(function(){
	$(this).css({width: '400px','margin-left': '25px'});
	$(this).blur(function(){
		$(this).css({width: '230px','margin-left': '110px'});
	});
});






$("#config_account").click(function(){
$("#config_account").attr('disabled','true');
$(".error_user_creat").append('<img id="loading-coninfo" src="img/loading.gif" />');
$(".error5").hide(0,function(){
$("#loading-coninfo").fadeIn();
});
setTimeout(function(){
    $.post("ajax-php/account-config.php", {subchngid: "submit",changeu: $("#text_input_userc").val()} ,function(user){ $(".error_user_creat").html(user);});
},500);
});










$("#subaccset_43").click(function(){
$("#subaccset_43").attr('disabled','true');
$(".interna,.personal").attr("disabled","true");
$(".disable_354").css('display','block');

setTimeout(function(){
    $.post("ajax-php/settings_config.php", {subemper: "submit",type: $("#hidetypefuc").val()} ,function(dodo){ $(".script_87").html(dodo);});
},500);
});


$(".personal").click(function(){
	$(".interna").removeClass("activ_65");
	$(".personal").addClass("activ_65");
	var x = $(".personal").attr("value");
	$("#hidetypefuc").val(x);
});



$(".interna").click(function(){
	$(".personal").removeClass("activ_65");
	$(".interna").addClass("activ_65");
	var y = $(".interna").attr("value");
	$("#hidetypefuc").val(y);
});


$("#suballinfo").click(function(){
$("#error_config_info").empty();
$("#suballinfo").attr('disabled','disabled');
$("#error_config_info").append('<img id="loading-coninfo" src="img/loading.gif" />');
$("#loading-coninfo").fadeIn();
setTimeout(function(){
	var contry = $("#country-type-text").attr("data-id");
	var city = $("#city-type-text").attr("data-id");
    var work = 	$("#work-selinput").val();
	var learn = $("#educationselinput").val();
	var acctype = $(".selected-type li").attr("value");
	var social = $(".select_4532div li").attr("value");
	var hobby = $("#hope_574").val();
	var about = $("#aboutui_764").val();
	var loctype = $(".cities_fuction").attr("data-type");
    $.post("ajax-php/info-config.php", {
		subinfcon: "submit",
		contry: contry,
		city: city,
		work: work,
		learn: learn,
		acctype: acctype,
		social: social,
		hobby: hobby,
		about: about,
		loctype: loctype
		},function(coninfo){ $("#error_config_info").html(coninfo);});
},500);
});

$(document).ready(function(){
$("#subconfig_5768").click(function(){
$(".all-see5638").animate({"margin-top": "65px"});
$(".derrt_76").animate({"margin-top": "0px"});
$(".h3error_conferm").empty();
$(".h3error_conferm").append('<img id="loading-conferm" src="img/loading.gif" />');
$("#loading-conferm").fadeIn();
$("#subconfig_5768,#coningo_5768").attr('disabled','true');

setTimeout(function(){
    $.post("ajax-php/conferm-email.php", {subemcon: "submit",code: $("#coningo_5768").val()} ,function(conferm){ $(".h3error_conferm").html(conferm);});
},500);
});
});
</script>

<script>
$("#country-type-text").keyup(function(e){
	var spacere = $(this).val().replace(/ /g, "");
	if(spacere == ""){
	$(".ajax_contryresult").fadeOut(0);
	}else {
	$(".ajax_contryresult").fadeIn(0);
	var country = $(this).val();
	$.post("../ajax-php/location-check.php",{setcont: "submit",country: country},function(e){$(".ajax_contryresult").html(e)});
	}
	if(e.keyCode == 13){
	}else {
		$("#city-type-text").attr("disabled","disabled");
		$("#city-type-text").val("");
		$("#city-type-text").removeAttr("data-id");
		$(this).removeAttr("data-id");
		$(this).removeClass("done_country");
		$("#city-type-text").removeClass("done_country");
	}
});
$("#city-type-text").keyup(function(e){
	var spacere = $(this).val().replace(/ /g, "");
	if(spacere == ""){
	$(".ajax_cityresult").fadeOut(0);
	}else {
	$(".ajax_cityresult").fadeIn(0);
	var state = $(this).val();
	var country = $("#country-type-text").attr("data-id");
	if(country == ""){
	}else {
	$.post("../ajax-php/location-check.php",{setcity: "submit",state: state,country: country},function(e){$(".ajax_cityresult").html(e)});
	}
	}
	if(e.keyCode == 13){
	}else {
		$(this).removeAttr("data-id");
		$(this).removeClass("done_country");
	}
});
</script>
</body>
</html>


<?php
}else {
	Header("Location:../");
}
?>

