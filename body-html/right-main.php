<?php
if(isset($_POST['logout'])){
	session_destroy();
	Header("Location:../");
}
?>
<div class="right-main">
<div class="rights_ershadat">
<h5>لوحة الاعدادات</h5>
</div>
<div class="acc-info-topmin">
<?php


$selectinf = mysql_query("SELECT * FROM info WHERE user_id='$id'");
while($finfo = mysql_fetch_array($selectinf)){
    $filacctype = $finfo['account_type'];
	$about = $finfo['about'];
}

if($filacctype == "1"){
	$acctype = "حساب شخصي";
}else if($filacctype == "9"){
	$acctype = "شخصية عامة";
}else if($filacctype == "4"){
	$acctype = "رجل أعمال";
}else if($filacctype == "5"){
	$acctype = "رياضي";
}else if($filacctype == "6"){
	$acctype = "سياسي";
}else if($filacctype == "7"){
	$acctype = "شخصية إخبارية";
}else if($filacctype == "8"){
	$acctype = "شخصية خيالية";
}else if($filacctype == "11"){
	$acctype = "شخصية في فيلم";
}else if($filacctype == "2"){
	$acctype = "حيوان أليف";
}else if($filacctype == "3"){
	$acctype = "راقص";
}else if($filacctype == "12"){
	$acctype = "صحفي";
}else if($filacctype == "13"){
	$acctype = "طباخ";
}else if($filacctype == "14"){
	$acctype = "معلم";
}else if($filacctype == "15"){
	$acctype = "عالِم";
}else if($filacctype == "16"){
	$acctype = "فنان";
}else if($filacctype == "17"){
	$acctype = "فنان ترفيهي";
}else if($filacctype == "18"){
	$acctype = "فنان كوميدي";
}else if($filacctype == "19"){
	$acctype = "كاتب";
}else if($filacctype == "20"){
	$acctype = "مؤلف";
}else if($filacctype == "21"){
	$acctype = "مدرّب";
}else if($filacctype == "22"){
	$acctype = "مدون";
}else if($filacctype == "23"){
	$acctype = "مسؤول حكومي";
}else if($filacctype == "24"){
	$acctype = "مصمم";
}else if($filacctype == "25"){
	$acctype = "مصور فوتوغرافي";
}else if($filacctype == "26"){
	$acctype = "مقاول";
}else if($filacctype == "27"){
	$acctype = "ممثل / مخرج";
}else if($filacctype == "28"){
	$acctype = "مُنتِج";
}else if($filacctype == "29"){
	$acctype = "موسيقي / فرقة";
}else if($filacctype == "30"){
	$acctype = "أستوديو / تليفزيون";
}else if($filacctype == "31"){
	$acctype = "أغنية";
}else if($filacctype == "32"){
	$acctype = "اتحاد رياضي";
}else if($filacctype == "33"){
	$acctype = "الألبوم";
}else if($filacctype == "34"){
	$acctype = "سينما";
}else if($filacctype == "35"){
	$acctype = "برنامج تلفزيوني";
}else if($filacctype == "36"){
	$acctype = "جائزة موسيقية";
}else if($filacctype == "37"){
	$acctype = "جولة فنية";
}else if($filacctype == "38"){
	$acctype = "سلسلات الكتب";
}else if($filacctype == "39"){
	$acctype = "سينما";
}else if($filacctype == "40"){
	$acctype = "شبكة تلفزيونية";
}else if($filacctype == "41"){
	$acctype = "شخصية خيالية";
}else if($filacctype == "42"){
	$acctype = "شخصية في فيلم";
}else if($filacctype == "43"){
	$acctype = "شركة تسجيلات";
}else if($filacctype == "44"){
	$acctype = "فريق رياضي";
}else if($filacctype == "45"){
	$acctype = "فريق رياضي مدرسي";
}else if($filacctype == "46"){
	$acctype = "فريق رياضي هاوٍ";
}else if($filacctype == "47"){
	$acctype = "فن الأداء";
}else if($filacctype == "48"){
	$acctype = "فيديو موسيقي";
}else if($filacctype == "49"){
	$acctype = "فيلم";
}else if($filacctype == "50"){
	$acctype = "قائمة موسيقية";
}else if($filacctype == "51"){
	$acctype = "قناة تلفزيونية";
}else if($filacctype == "52"){
	$acctype = "كتاب";
}else if($filacctype == "53"){
	$acctype = "مجلة";
}else if($filacctype == "54"){
	$acctype = "محطة إذاعية";
}else if($filacctype == "55"){
	$acctype = "مسرحية";
}else if($filacctype == "56"){
	$acctype = "مكان الأداء";
}else if($filacctype == "57"){
	$acctype = "مكتبة";
}else if($filacctype == "58"){
	$acctype = "ملاعب رياضية وإستاد";
}else if($filacctype == "59"){
	$acctype = "نشرة";
}else if($filacctype == "60"){
	$acctype = "أغذية / مشروبات";
}else if($filacctype == "61"){
	$acctype = "أنشطة تجارية صغيرة";
}else if($filacctype == "62"){
	$acctype = "إتصالات";
}else if($filacctype == "63"){
	$acctype = "إنترنت / برامج";
}else if($filacctype == "64"){
	$acctype = "التعدين / المواد";
}else if($filacctype == "65"){
	$acctype = "السفر / الترفيه";
}else if($filacctype == "66"){
	$acctype = "الصحة / الجمال";
}else if($filacctype == "67"){
	$acctype = "الفضاء / الدفاع";
}else if($filacctype == "68"){
	$acctype = "المدرسة الإعدادية";
}else if($filacctype == "70"){
	$acctype = "بنك / مؤسسة مالية";
}else if($filacctype == "71"){
	$acctype = "تبغ";
}else if($filacctype == "72"){
	$acctype = "تعليم";
}else if($filacctype == "73"){
	$acctype = "تكنولوجيا حيوية";
}else if($filacctype == "74"){
	$acctype = "جامعة";
}else if($filacctype == "75"){
	$acctype = "حزب سياسي";
}else if($filacctype == "76"){
	$acctype = "حضانة";
}else if($filacctype == "77"){
	$acctype = "خدمة استشارة / اعمال";
}else if($filacctype == "78"){
	$acctype = "زراعة / مزارع";
}else if($filacctype == "79"){
	$acctype = "سيارات وقطع غيار";
}else if($filacctype == "80"){
	$acctype = "شركة";
}else if($filacctype == "81"){
	$acctype = "شركة تأمين";
}else if($filacctype == "82"){
	$acctype = "شركة نقل البضائع";
}else if($filacctype == "83"){
	$acctype = "صحة / طب / أدوية";
}else if($filacctype == "84"){
	$acctype = "صناعات";
}else if($filacctype == "85"){
	$acctype = "طاقة";
}else if($filacctype == "86"){
	$acctype = "قانون";
}else if($filacctype == "87"){
	$acctype = "قضية";
}else if($filacctype == "88"){
	$acctype = "كمبيوتر / تقنيات";
}else if($filacctype == "89"){
	$acctype = "مؤسسة دينية";
}else if($filacctype == "90"){
	$acctype = "مدرسة";
}else if($filacctype == "91"){
	$acctype = "مدرسة ابتدائية";
}else if($filacctype == "92"){
	$acctype = "منظمة";
}else if($filacctype == "93"){
	$acctype = "منظمة اجتماعية";
}else if($filacctype == "94"){
	$acctype = "منظمة حكومية";
}else if($filacctype == "95"){
	$acctype = "منظمة سياسية";
}else if($filacctype == "96"){
	$acctype = "منظمة غير حكومية";
}else if($filacctype == "97"){
	$acctype = "منظمة غير ربحية";
}else if($filacctype == "98"){
	$acctype = "مواد كيميائية";
}else if($filacctype == "99"){
	$acctype = "هندسة / إنشاء";
}else if($filacctype == "100"){
	$acctype = "وسائل الإعلام / الأخبار";
}


?>
<div class="following_main">
<div class="following_cover" style="background-image: url('../upload/covers/mini/<?php echo $info['pro_cover']; ?>');"></div>
<div class="your_info_none">
<img src="../upload/images/low/<?php echo $info['pro_img']; ?>" class="pro_folsrc_878" />
<a href="../<?php echo $info['id']; ?>" target="_blank">
<?php
if($info['c_check'] == "true"){
	echo "<img src='../img/icons/checkbg.png' class='c_check_878' />";
}
echo $info['name'];

?>
</a>
<p><?php echo $acctype; ?></p>
<h3>@<?php echo $info['user_name']; ?></h3>
</div>

<div class="follow_state">
<h5><?php echo $about; ?></h5>
</div>
</div>
</div>
<div class="hary_fash5">
<ul>
<li class="hary_selected news_selcetli"><span>اخر الاخبار</span>
<svg class="hary_menu_svgnews" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M2 6H0v5h.01L0 20c0 1.1.9 2 2 2h18v-2H2V6zm20-2h-8l-2-2H6c-1.1 0-1.99.9-1.99 2L4 16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7 15l4.5-6 3.5 4.51 2.5-3.01L21 15H7z"/>
</svg>
</li>
<li class="saved_selectli"><span>العناصر المحفوظة</span>
<svg class="hary_menu_svgsaved" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</li>
<li class="follow_slectedli"><span>قوائم المتابعين</span>
<svg class="hary_menu_folowmen" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"/>
</svg>
</li>
<a target="_blank" href="../hashtags/">
<li class="hashtags_selectli"><span>قائمة الهاشتاج</span>
<svg version="1.0" class="hashtags_menusvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200.000000 200.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M875 1903 c-357 -44 -655 -303 -755 -655 -31 -106 -37 -287 -15 -403
43 -231 181 -445 369 -575 70 -48 202 -108 291 -131 115 -31 327 -31 440 0
351 94 608 374 670 728 12 68 15 184 15 564 l0 479 -492 -1 c-271 -1 -506 -4
-523 -6z m175 -412 c0 -10 -9 -63 -20 -116 -11 -53 -20 -103 -20 -111 0 -10
15 -14 60 -14 33 0 60 2 60 4 0 2 11 58 25 126 14 68 25 124 25 126 0 2 41 4
90 4 105 0 99 13 70 -145 -11 -60 -20 -110 -20 -112 0 -2 32 -3 70 -3 l70 0 0
-85 0 -85 -84 0 c-47 0 -87 -3 -89 -7 -3 -5 -8 -29 -11 -55 l-7 -48 95 0 96 0
0 -85 0 -85 -114 0 -113 0 -13 -62 c-6 -35 -16 -84 -22 -110 l-10 -48 -95 0
c-85 0 -94 2 -89 18 6 21 36 181 36 193 0 5 -27 9 -60 9 l-59 0 -7 -37 c-3
-21 -12 -69 -20 -106 -8 -38 -14 -70 -14 -73 0 -2 -43 -4 -96 -4 -86 0 -95 2
-90 18 6 21 36 181 36 193 0 5 -29 9 -65 9 l-65 0 0 85 0 85 84 0 84 0 9 53 8
52 -92 3 -93 3 0 84 0 85 109 0 110 0 10 55 c6 30 16 81 22 113 18 99 9 92
110 92 81 0 89 -2 89 -19z"/>
<path d="M951 1033 c-6 -31 -11 -60 -11 -65 0 -4 34 -8 75 -8 83 0 73 -9 94
88 l9 42 -78 0 -77 0 -12 -57z"/>
</g>
</svg>
</li>
</a>
<li class="support_slectedli"><span>الدعم الفني</span>
<svg class="hary_menu_support" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-4 6V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1z"/>
</svg>
</li>
<li class="setings_selectli"><span>اعدادات الحساب</span>
<svg class="hary_menu_settings" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm7-7H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-1.75 9c0 .23-.02.46-.05.68l1.48 1.16c.13.11.17.3.08.45l-1.4 2.42c-.09.15-.27.21-.43.15l-1.74-.7c-.36.28-.76.51-1.18.69l-.26 1.85c-.03.17-.18.3-.35.3h-2.8c-.17 0-.32-.13-.35-.29l-.26-1.85c-.43-.18-.82-.41-1.18-.69l-1.74.7c-.16.06-.34 0-.43-.15l-1.4-2.42c-.09-.15-.05-.34.08-.45l1.48-1.16c-.03-.23-.05-.46-.05-.69 0-.23.02-.46.05-.68l-1.48-1.16c-.13-.11-.17-.3-.08-.45l1.4-2.42c.09-.15.27-.21.43-.15l1.74.7c.36-.28.76-.51 1.18-.69l.26-1.85c.03-.17.18-.3.35-.3h2.8c.17 0 .32.13.35.29l.26 1.85c.43.18.82.41 1.18.69l1.74-.7c.16-.06.34 0 .43.15l1.4 2.42c.09.15.05.34-.08.45l-1.48 1.16c.03.23.05.46.05.69z"/>
</svg>
</li>
<li class="help_selectedli"><span>مركز المساعدة</span>
<svg class="hary_menu_helpcne" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
</svg>
</li>
<li class="addsce_selectedli"><span>الاعلان في الموقع</span>
<svg class="hary_menu_svgadds" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M-74 29h48v48h-48V29zM0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/>
    <path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z"/>
</svg>
</li>
<li class="logout_selectli"><span>تسجيل الخروج</span>
<svg class="hary_svg_loggof" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"></path>
</svg>
</li>
</ul>
</div>

<form class="logout_form" style="display: none!important;" method="POST" action="">
<input type="submit" class="logout_click_input" name="logout" />
</form>
<script>
$(".logout_selectli").click(function(){
	$(".logout_click_input").click();
});
</script>
<div class="scrolling_main">
<input type="hidden" id="hidenscrollval" value="false" />
<div class="scroll_up">
<svg class="scrollup_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"></path>
</svg>
</div>
<div class="scroll_down">
<svg class="scrolldown_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"></path>
</svg>
</div>
<script>
$(document).ready(function(){
	$(".scrolldown_svg").mousedown(function(){
		$("#hidenscrollval").val("down");
	});
	$(".scrolldown_svg").mouseup(function(){
		$("#hidenscrollval").val("false");
	});
	$(".scrolldown_svg").mouseleave(function(){
		$("#hidenscrollval").val("false");
	});
	
	$(".scrollup_svg").mousedown(function(){
		$("#hidenscrollval").val("up");
	});
	$(".scrollup_svg").mouseup(function(){
		$("#hidenscrollval").val("false");
	});
	$(".scrollup_svg").mouseleave(function(){
		$("#hidenscrollval").val("false");
	});
    $(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() == $(document).height()) {
        $("#hidenscrollval").val("false");
    }else {}
    if($(window).scrollTop() == 0) {
        $("#hidenscrollval").val("false");
    }
    });
	function scrolldown(){
		if($("#hidenscrollval").val() == "down"){
		var ceri = $(window).scrollTop();
		var scro = ceri + 10;
		$(window).scrollTop(scro);
		}else {}
		if($("#hidenscrollval").val() == "up"){
		var ceri = $(window).scrollTop();
		var scro = ceri - 10;
		$(window).scrollTop(scro);
		}else {}
		setTimeout(scrolldown,10);
	}
	scrolldown();
});
$(".hary_fash5 ul li").click(function(){
	$(".hary_fash5 ul li").removeClass("hary_selected");
	$(this).addClass("hary_selected");
});
</script>
</div>
<div class="version_info">
<div class="inset_version_info">
<span>Update Version 1.0 Beta</span>
</div>
</div>
</div>

