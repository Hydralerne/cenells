<?php

include("../connectdb/multiply.php");

if(isset($_GET['getinfo'])){

$user = mysql_query("SELECT * FROM users WHERE id='$use'",$dbh1);
while($usera = mysql_fetch_assoc($user)){
    $usern = $usera['name'];
	$first_name = $usera['first_name'];
	$last_name = $usera['last_name'];
    $userday = $usera['c_day'];
    $filusermonth = $usera['c_month'];
    $useryear = $usera['c_year'];
    $pimg = $usera['pro_img'];
    $cover = $usera['pro_cover'];
    $covertop = $usera['cover_set'];
	$check = $usera['c_check'];
	$city = $usera['c_city'];
	$sex = $usera['c_sex'];
	$user_name = $usera['user_name'];
}
if($filusermonth == "1"){
	$usermonth = "يناير";
}else if($filusermonth == "2"){
	$usermonth = "فيراير";
}else if($filusermonth == "3"){
	$usermonth = "مارس";
}else if($filusermonth == "4"){
	$usermonth = "ابريل";
}else if($filusermonth == "5"){
	$usermonth = "مايو";
}else if($filusermonth == "6"){
	$usermonth = "يونيو";
}else if($filusermonth == "7"){
	$usermonth = "يوليو";
}else if($filusermonth == "8"){
	$usermonth = "أغسطس";
}else if($filusermonth == "9"){
	$usermonth = "سبتمبر";
}else if($filusermonth == "10"){
	$usermonth = "اكتوبر";
}else if($filusermonth == "11"){
	$usermonth = "نوفمبر";
}else if($filusermonth == "12"){
	$usermonth = "ديسمبر";
}

$selectinf = mysql_query("SELECT * FROM info WHERE user_id='$use'",$dbh1);
while($finfo = mysql_fetch_array($selectinf)){
	$filacctype = $finfo['account_type'];
	$filcontry = $finfo['contry'];
	$city = $finfo['city'];
	$loctype = $finfo['loctype'];
	$work = $finfo['work'];
	$worktype = $finfo['jop_name'];
	$learn = $finfo['learn'];
	$fisocial = $finfo['social'];
	$phone = $finfo['phone'];
	$hobby = $finfo['hobby'];
	$about = $finfo['about'];
	$accsec = $finfo['account_secrit'];
}
if($fisocial == "a1"){
	$social = "أعزب";
}else if($fisocial == "a2"){
	$social = "مرتبط";
}else if($fisocial == "a3"){
	$social = "مخطوب";
}else if($fisocial == "a4"){
	$social = "متزوج";
}else if($fisocial == "a5"){
	$social = "زواج مدني";
}else if($fisocial == "a6"){
	$social = "شراكة أسرية";
}else if($fisocial == "a7"){
	$social = "في علاقة مفتوحة";
}else if($fisocial == "a8"){
	$social = "علاقة معقّدة";
}else if($fisocial == "a9"){
	$social = "منفصل";
}else if($fisocial == "a10"){
	$social = "مطلّق";
}else if($fisocial == "a11"){
	$social = "أرمل";
}
$contryquery = mysql_query("SELECT * FROM countries WHERE id='$filcontry'",$dbh2);
while($fetcountry = mysql_fetch_array($contryquery)){
	$finalcountry = $fetcountry['name'];
	$countrycodem = $fetcountry['sortname'];
	$phonecodecnt = $fetcountry['phonecode'];	
}
if($loctype == "city"){
$cityquery = mysql_query("SELECT * FROM cities WHERE id='$city'",$dbh2);
}else {
if($loctype == "state"){
$cityquery = mysql_query("SELECT * FROM states WHERE id='$city'",$dbh2);
}else {}
}
while($cityfetch = mysql_fetch_array($cityquery)){
     $cityuser = $cityfetch['name'];
}
?>
<div class="genral_informaion_view">
<div class="first_mainopert_40145">
<div class="first_stateecho_page">
<span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
</svg>
<p>الحالة :</p> <a><?php echo $about; ?></a>
</span>
<input type="text" class="inputedit_statepro" placeholder="اكتب نبذة مختصرة عن حالتك" />
<svg class="editinfo_main edit_state_main" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
<div class="work_viewinfo_main">
<div class="alegm_righwork_view">
<div class="right_weorkmainopert">
<svg class="iconmainmainwork" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path>
</svg>
<span><p>يعمل لدي :</p> <?php if(empty($work)){echo '<a class="feticolor_main" href="#">لايوجد مكان عمل لعرضة';}else {echo '<a href="#">'.$work;} ?></a></span>
<input type="text" class="inputedit_workinpro" placeholder="اكتب اين تعمل" />
<svg class="editinfo_main workfirst_edit_main" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="div_weorkmainopert">
<svg class="iconmainmainwork" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM4 12h4v2H4v-2zm10 6H4v-2h10v2zm6 0h-4v-2h4v2zm0-4H10v-2h10v2z"/>
</svg>
<span><p>نوع العمل :</p> <text><?php if(empty($worktype)){echo 'لا يوجد نوع عمل لعرضه';}else{echo $worktype;} ?></text></span>
<input type="text" class="inputedit_worktype" placeholder="اكتب ماذا تعمل" />
<svg class="editinfo_main worktype_edit_main" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
<div class="allemam_aweznyharohlo">
<div class="dayborn_viewinfo_main">
<div class="insetsocial_bornmain">
<svg viewBox="0 0 24 24" class="first_ofeditsvg_info" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
</svg>
<span><p>الحالة الاجتماعية :</p><a> <?php if(empty($social)){echo 'لايوجد حالة لعرضها';}else{echo $social;} ?></a></span>
<svg class="editinfo_main socialthei_edit_main" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="insteddar_bornmain">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span><p>تاريخ الميلاد :</p><a> <?php echo "$userday $usermonth ,($useryear)"; ?></a></span>
</div>
</div>
</div>
<div class="stayinfo_mainview">
<div class="insetstay_infoblog">
<div class="insetatg_infoview">
<svg viewBox="0 0 24 24" class="dowlaten_iconview" xmlns="http://www.w3.org/2000/svg">
    <path d="M15 11V5l-3-3-3 3v2H3v14h18V11h-6zm-8 8H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm6 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm6 12h-2v-2h2v2zm0-4h-2v-2h2v2z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span><p>يقيم في :</p> <a><?php echo $finalcountry ?> - <?php echo $cityuser; ?></a></span>
<svg class="editinfo_main staycontri_edit_main" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="asdwqeims_infoview">
<svg viewBox="0 0 24 24" class="asdwqwe_iconview" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M19.07 4.93l-1.41 1.41C19.1 7.79 20 9.79 20 12c0 4.42-3.58 8-8 8s-8-3.58-8-8c0-4.08 3.05-7.44 7-7.93v2.02C8.16 6.57 6 9.03 6 12c0 3.31 2.69 6 6 6s6-2.69 6-6c0-1.66-.67-3.16-1.76-4.24l-1.41 1.41C15.55 9.9 16 10.9 16 12c0 2.21-1.79 4-4 4s-4-1.79-4-4c0-1.86 1.28-3.41 3-3.86v2.14c-.6.35-1 .98-1 1.72 0 1.1.9 2 2 2s2-.9 2-2c0-.74-.4-1.38-1-1.72V2h-1C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-2.76-1.12-5.26-2.93-7.07z"/>
</svg>
<span><p>رمز الدولة :</p> <a>+<?php echo $phonecodecnt; ?> (<?php echo $countrycodem; ?>)</a></span>
<svg class="editinfo_main zipcode_edit_main" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
<div class="phonenumber_viewmain">
<div class="offsetphone_viewcall">
<div class="insetphone_numbercal">
<svg viewBox="0 0 24 24" class="phonenumber_viewinfo" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M22 3H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2zM8 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H2v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1zm3.85-4h1.64L21 16l-1.99 1.99c-1.31-.98-2.28-2.38-2.73-3.99-.18-.64-.28-1.31-.28-2s.1-1.36.28-2c.45-1.62 1.42-3.01 2.73-3.99L21 8l-1.51 2h-1.64c-.22.63-.35 1.3-.35 2s.13 1.37.35 2z"/>
</svg>
<span><p>رقم الهاتف :</p> <a><?php if(empty($phone)){echo 'لايوجد معلومات لعرضها';}else {echo $phone;} ?></a></span>
<input type="text" class="inputedit_phonenumb" placeholder="اكتب رقم الهاتف" />
<svg class="editinfo_main phonenumber_view" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
</div>
</div>
<script>
setTimeout(function(){
$(".main_infopage_body .loading_poats").fadeOut(function(){
	$(".genral_informaion_view").css('transform','scale(1)');
});
},100);
$(function() {
    $(".edit_state_main").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_statesvg");
	$(".first_stateecho_page").addClass("firstpadding");
	$(".first_stateecho_page span a").fadeOut(0);
	$(".inputedit_statepro").fadeIn(0);
	if($(".first_stateecho_page span a img").length == 0){
		var val = $(".first_stateecho_page span a").text();
		$(".inputedit_statepro").val(val);	
	}else {
    $(".first_stateecho_page span a img").each(function(){ 
        var img = $(this).attr("data-c");
		var txt = $(this).replaceWith(img);
		var val = $(".first_stateecho_page span a").text();
		$(".inputedit_statepro").val(val);
	});
	}
    } else {
		var text = $(".inputedit_statepro").val();
		var spacere = text.replace(/ /g, "");
		if(spacere == 0){}else {
		$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: text},function(e){
			var erto = e.replace("<p>","");
			var html = erto.replace("</p>","");
			$(".first_stateecho_page span a").html(html);
		});
		}
	    $(this).removeClass("closeedit_statesvg");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_statepro").fadeOut(0);
        $(".first_stateecho_page").removeClass("firstpadding");
	    $(".first_stateecho_page span a").fadeIn(0);
    count = 0;
    }
    });
    });
});
$(function() {
    $(".workfirst_edit_main").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_workinsvg");
	$(".right_weorkmainopert").addClass("firstpadding");
	$(".right_weorkmainopert span a").fadeOut(0);
	$(".inputedit_workinpro").fadeIn(0);
	var val = $(".right_weorkmainopert span a").text();
	$(".inputedit_workinpro").val(val);
    }
    else{
	    $(this).removeClass("closeedit_workinsvg");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_workinpro").fadeOut(0);
        $(".right_weorkmainopert").removeClass("firstpadding");
	    $(".right_weorkmainopert span a").fadeIn(0);
    count = 0;
    }
    });
    });
});
$(function() {
    $(".worktype_edit_main").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_worktype");
	$(".div_weorkmainopert").addClass("firstpadding");
	$(".div_weorkmainopert span a").fadeOut(0);
	$(".inputedit_worktype").css('display','inline-flex');
	var val = $(".div_weorkmainopert span a").text();
	$(".inputedit_worktype").val(val);
    }
    else{
	    $(this).removeClass("closeedit_worktype");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_worktype").fadeOut(0);
        $(".div_weorkmainopert").removeClass("firstpadding");
	    $(".div_weorkmainopert span a").fadeIn(0);
    count = 0;
    }
    });
    });
});
$(function() {
    $(".phonenumber_view").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_phonenum");
	$(".insetphone_numbercal").addClass("firstpadding");
	$(".insetphone_numbercal span a").fadeOut(0);
	$(".inputedit_phonenumb").fadeIn(0);
	var val = $(".insetphone_numbercal span a").text();
	if(val !== 'لايوجد معلومات لعرضها'){
	$(".inputedit_phonenumb").val(val);
	}else {}
    }
    else{
	    $(this).removeClass("closeedit_phonenum");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_phonenumb").fadeOut(0);
        $(".insetphone_numbercal").removeClass("firstpadding");
	    $(".insetphone_numbercal span a").fadeIn(0);
    count = 0;
    }
    });
    });
});


$(document).ready(function(){
	$(".inputedit_statepro").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
			var about = $(this).val();
		    var spacere = $(this).val().replace(/ /g, "");
			if(spacere.length < 3){
				$(this).css('border-color','#f7b7b7');
			}else {
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/updateinfo.php",{upstate: "submit",about: about},function(e){$(".scripts").html(e)});
			}
		}
	});
});
$(document).ready(function(){
	$(".inputedit_workinpro").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var work = $(this).val().replace(/ /g, " ");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/updateinfo.php",{upworkin: "submit",work: work},function(e){$(".scripts").html(e)});
		}
	});
});

$(document).ready(function(){
	$(".inputedit_worktype").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var worktype = $(this).val().replace(/ /g, " ");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/updateinfo.php",{upworkin: "submit",worktype: worktype},function(e){$(".scripts").html(e)});
		}
	});
});
$(document).ready(function(){
	$(".inputedit_phonenumb").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var phonenum = $(this).val().replace(/ /g, "");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/updateinfo.php",{subphone: "submit",phonenum: phonenum},function(e){$(".scripts").html(e)});
		}
	});
});
</script>
<?php
}
?>
<?php
if(isset($_GET['moreinfo'])){

$user = mysql_query("SELECT * FROM users WHERE id='$use'",$dbh1);
while($usera = mysql_fetch_assoc($user)){
    $usern = $usera['name'];
	$first_name = $usera['first_name'];
	$last_name = $usera['last_name'];
    $userday = $usera['c_day'];
    $filusermonth = $usera['c_month'];
    $useryear = $usera['c_year'];
    $pimg = $usera['pro_img'];
    $cover = $usera['pro_cover'];
    $covertop = $usera['cover_set'];
	$check = $usera['c_check'];
	$city = $usera['c_city'];
	$fillsex = $usera['c_sex'];
	$user_name = $usera['user_name'];
}
if($fillsex == "male"){
	$sex = "ذكر";
}else {
	$sex = "انثي";
}

$selectinf = mysql_query("SELECT * FROM info WHERE user_id='$use'",$dbh1);
while($finfo = mysql_fetch_array($selectinf)){
	$filacctype = $finfo['account_type'];
	$filcontry = $finfo['contry'];
	$city = $finfo['city'];
	$loctype = $finfo['loctype'];
	$work = $finfo['work'];
	$worktype = $finfo['jop_name'];
	$learn = $finfo['learn'];
	$bestsay = $finfo['best_sayes'];
	$fisocial = $finfo['social'];
	$phone = $finfo['phone'];
	$deiana_desc = $finfo['deianah_desc'];
	$deiana = $finfo['deiana'];
	$othenm = $finfo['other_name'];
	$hobby = $finfo['hobby'];
	$about = $finfo['about'];
	$seiasa = $finfo['seiasa'];
	$accsec = $finfo['account_secrit'];
}

?>
<div class="moreinfo_informati_view">
<div class="yoursayesbest_all">
<div class="insetmain_bestsay">
<span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M14 6l-3.75 5 2.85 3.8-1.6 1.2C9.81 13.75 7 10 7 10l-6 8h22L14 6z"/>
</svg><p>المقولات المفضلة :</p> <a><?php if(empty($bestsay)){echo 'لا يوجد معلومات لعرضها';}else {echo $bestsay;} ?></a></span>
<input type="text" class="inputedit_bestsays" placeholder="اكتب مقولاتك المفضلة" />
<svg class="editinfo_main editbest_saysvg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
</div>
<div class="othername_mianviewinfo">
<div class="insetothernames_info">
<div class="rightmain_othersname">
<svg viewBox="0 0 24 24" class="icon_43532465" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 4c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1.4c0-2 4-3.1 6-3.1s6 1.1 6 3.1V19z"/>
</svg>
<span><p>اسم اخر او كنية :</p> <a><?php if(empty($othenm)){echo 'لا يوجد معلومات لعرضها';}else {echo $othenm;} ?></a></span>
<input type="text" class="inputedit_othername" placeholder="اكتب اسم اخر لك" />
<svg class="editinfo_main othername_editsvg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<div class="leftmain_othersname">
<svg viewBox="0 0 24 24" class="icon_435234521" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/>
</svg>
<span><p>الجنس :</p> <a><?php echo $sex; ?></a></span>
<svg class="editinfo_main sexinfo_efitsvg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
</div>
</div>
<div class="disanah_allinfo">
<div class="insetdeianah_info">
<div class="right_dianahinfo">
<svg class="descripdianah_svgico" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M5 14.5h14v-6H5v6zM11 .55V3.5h2V.55h-2zm8.04 2.5l-1.79 1.79 1.41 1.41 1.8-1.79-1.42-1.41zM13 22.45V19.5h-2v2.95h2zm7.45-3.91l-1.8-1.79-1.41 1.41 1.79 1.8 1.42-1.42zM3.55 4.46l1.79 1.79 1.41-1.41-1.79-1.79-1.41 1.41zm1.41 15.49l1.79-1.8-1.41-1.41-1.79 1.79 1.41 1.42z"/>
</svg>
<span><p>وصف الديانة :</p> <a><?php if(empty($deiana_desc)){echo 'لا يوجد معلومات لعرضها';}else {echo $deiana_desc;} ?></a></span>
<input type="text" class="inputedit_deianah" placeholder="اكتب وصف لديانتك" />
<svg class="editinfo_main deianahdescedit_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<div class="left_dianahinfo">
<svg viewBox="0 0 24 24" class="disanahicon_svginfo" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
</svg>
<span><p>الديانة :</p> <a><?php if(empty($deiana)){echo 'لا يوجد معلومات لعرضها';}else {echo $deiana;} ?></a></span>
<input type="text" class="inputedit_deimna" placeholder="اكتب اسم ديانتك" />
<svg class="editinfo_main deianahedit_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
</div>
</div>
<div class="seiasa_allinfo">
<div class="insetmain_seiasa">
<span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/>
</svg>
<p>الاراء السياسية :</p> <a><?php if(empty($seiasa)){echo 'لا يوجد معلومات لعرضها';}else {echo $seiasa;} ?></a>
<input type="text" class="inputedit_seiasa" placeholder="اكتب ارائك السياسية" />
</span>
<svg class="editinfo_main editseaiasa_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
</div>
<div class="language_allinfo">
<div class="insetmain_language">
<span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.87 15.07l-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z"/>
</svg>
<p>اللغات :</p> <a>لا يوجد معلومات لعرضها</a>
</span>
<svg class="editinfo_main editlanguage_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
</div>
</div>

<script>
$(document).ready(function(){
$(".main_infopage_body .loading_poats").fadeOut(0);
$(".genral_informaion_view,.antily_information_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_infoselect_ciew,.export_insetantly_ciew").fadeOut(0);
	$(".export_moreinfogt_ciew").fadeIn(0);
	$(".moreinfo_informati_view").css('transform','scale(1)');
},300);
});
$(".more_proinfomain").click(function(){
$(".main_infopage_body .loading_poats").fadeOut(0);
$(".genral_informaion_view,.antily_information_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_infoselect_ciew,.export_insetantly_ciew").fadeOut(0);
	$(".export_moreinfogt_ciew").fadeIn(0);
	$(".moreinfo_informati_view").css('transform','scale(1)');
},300);
});
$(".timeline_profileinfo").click(function(){
$(".main_infopage_body .loading_poats").fadeOut(0);
$(".genral_informaion_view,.moreinfo_informati_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_infoselect_ciew,.export_moreinfogt_ciew").fadeOut(0);
	$(".export_insetantly_ciew").fadeIn(0);
	$(".antily_information_view").css('transform','scale(1)');
},300);
});
$(".first_selected_proinfo").click(function(){
$(".antily_information_view,.moreinfo_informati_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_insetantly_ciew,.export_moreinfogt_ciew").fadeOut(0);
	$(".export_infoselect_ciew").fadeIn(0);
	$(".genral_informaion_view").css('transform','scale(1)');
},300);
});

$(function() {
    $(".editbest_saysvg").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_bestsays");
	$(".insetmain_bestsay").addClass("firstpadding");
	$(".insetmain_bestsay span a").fadeOut(0);
	$(".inputedit_bestsays").fadeIn(0);
	if($(".insetmain_bestsay span a img").length == 0){
    $(".insetmain_bestsay span a img").each(function(){
		var val = $(".insetmain_bestsay span a").text();
		$(".inputedit_bestsays").val(val);	
	});
	}else {
    	var img = $(this).attr("data-c");
		var txt = $(this).replaceWith(img);
		var val = $(".insetmain_bestsay span a").text();
		$(".inputedit_bestsays").val(val);
	}
    }
    else{
		var text = $(".inputedit_bestsays").val();
		var spacere = text.replace(/ /g, "");
		if(spacere == 0){}else {
		$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: text},function(e){
			var erto = e.replace("<p>","");
			var html = erto.replace("</p>","");
			$(".insetmain_bestsay span a").html(html);
		});
		}
	    $(this).removeClass("closeedit_bestsays");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_bestsays").fadeOut(0);
        $(".insetmain_bestsay").removeClass("firstpadding");
	    $(".insetmain_bestsay span a").fadeIn(0);
    count = 0;
    }
    });
    });
});

$(function() {
    $(".othername_editsvg").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_othename");
	$(".rightmain_othersname").addClass("firstpadding");
	$(".rightmain_othersname span a").fadeOut(0);
	$(".inputedit_othername").fadeIn(0);
	var val = $(".rightmain_othersname span a").text();
	if(val !== 'لا يوجد معلومات لعرضها'){
	$(".inputedit_othername").val(val);
    }else {}
	}
    else{
	    $(this).removeClass("closeedit_othename");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_othername").fadeOut(0);
        $(".rightmain_othersname").removeClass("firstpadding");
	    $(".rightmain_othersname span a").fadeIn(0);
    count = 0;
    }
    });
    });
});
$(function() {
    $(".deianahdescedit_svg").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_othename");
	$(".right_dianahinfo").addClass("firstpadding");
	$(".right_dianahinfo span a").fadeOut(0);
	$(".inputedit_deianah").fadeIn(0);
	var val = $(".right_dianahinfo span a").text();
	if(val !== 'لا يوجد معلومات لعرضها'){
	$(".inputedit_deianah").val(val);
    }else {}
	}
    else{
	    $(this).removeClass("closeedit_othename");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_deianah").fadeOut(0);
        $(".right_dianahinfo").removeClass("firstpadding");
	    $(".right_dianahinfo span a").fadeIn(0);
    count = 0;
    }
    });
    });
});

$(function() {
    $(".deianahedit_svg").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_othename");
	$(".left_dianahinfo").addClass("firstpadding");
	$(".left_dianahinfo span a").fadeOut(0);
	$(".inputedit_deimna").fadeIn(0);
	var val = $(".left_dianahinfo span a").text();
	if(val !== 'لا يوجد معلومات لعرضها'){
	$(".inputedit_deimna").val(val);
	}else {}
	}
    else{
	    $(this).removeClass("closeedit_othename");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_deimna").fadeOut(0);
        $(".left_dianahinfo").removeClass("firstpadding");
	    $(".left_dianahinfo span a").fadeIn(0);
    count = 0;
    }
    });
    });
});
$(function() {
    $(".editseaiasa_svg").each(function() {
    var count = 0;
    $(this).click(function(){
    count++;
    if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).addClass("closeedit_othename");
	$(".insetmain_seiasa").addClass("firstpadding");
	$(".insetmain_seiasa span a").fadeOut(0);
	$(".inputedit_seiasa").fadeIn(0);
	var val = $(".insetmain_seiasa span a").text();
	if(val !== 'لا يوجد معلومات لعرضها'){
	$(".inputedit_seiasa").val(val);
	}else {}
    }
    else{
	    $(this).removeClass("closeedit_othename");
		var svg = '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>' +
        '<path d="M0 0h24v24H0z" fill="none"></path>';
		$(this).html(svg);
	    $(".inputedit_seiasa").fadeOut(0);
        $(".insetmain_seiasa").removeClass("firstpadding");
	    $(".insetmain_seiasa span a").fadeIn(0);
    count = 0;
    }
    });
    });
});
$(document).ready(function(){
	$(".inputedit_seiasa").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var textsi = $(this).val().replace(/ /g, " ");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/tafasilepro.php",{seiasasu: "submit",textsi: textsi},function(e){$(".scripts").html(e)});
		}
	});
});
$(document).ready(function(){
	$(".inputedit_deimna").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var textde = $(this).val().replace(/ /g, " ");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/tafasilepro.php",{deobert: "submit",textde: textde},function(e){$(".scripts").html(e)});
		}
	});
});
$(document).ready(function(){
	$(".inputedit_othername").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var textnm = $(this).val().replace(/ /g, " ");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/tafasilepro.php",{othename: "submit",textnm: textnm},function(e){$(".scripts").html(e)});
		}
	});
});
$(document).ready(function(){
	$(".inputedit_deianah").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
		    var textds = $(this).val().replace(/ /g, " ");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/tafasilepro.php",{deianades: "submit",textds: textds},function(e){$(".scripts").html(e)});
		}
	});
});
$(document).ready(function(){
	$(".inputedit_bestsays").keydown(function(event){
		$(this).css('border-color','#ddd');
		if(event.keyCode == 13){
			var text = $(this).val();
		    var spacere = $(this).val().replace(/ /g, "");
			$(this).attr("disabled","disabled");
			$.post("../ajax-php/tafasilepro.php",{upbest: "submit",text: text},function(e){$(".scripts").html(e)});
		}
	});
});
</script>
<?php
}
?>
<?php
if(isset($_GET['antily'])){

$selectview = mysql_query("SELECT COUNT(id) FROM visit WHERE for_id='$use' AND type='profile'",$dbh1);
$accviewcount = mysql_result($selectview,0);

$selectpost = mysql_query("SELECT COUNT(view_id) FROM view WHERE view_to_id='$use' AND view_type='post'",$dbh1);
$countviewp = mysql_result($selectpost,0);

$selectcoment = mysql_query("SELECT COUNT(id) FROM alert WHERE to_id='$use' AND type='comment_post' AND forse='post'",$dbh1);
$countcomment = mysql_result($selectcoment,0);

$selectemojicou = mysql_query("SELECT COUNT(id) FROM emoji WHERE to_id='$use' AND session='emopost'",$dbh1);
$countemoji = mysql_result($selectemojicou,0);

$selectlikes = mysql_query("SELECT COUNT(id) FROM likes WHERE to_id='$use' AND do='like'",$dbh1);
$countlikes = mysql_result($selectlikes,0);

$selectdislikes = mysql_query("SELECT COUNT(id) FROM likes WHERE to_id='$use' AND do='dislike'",$dbh1);
$countdislikes = mysql_result($selectdislikes,0);

$selectimages = mysql_query("SELECT COUNT(id) FROM posts WHERE user_id='$use' AND post_img!=''",$dbh1);
$countimages = mysql_result($selectimages,0);

$selectposts = mysql_query("SELECT COUNT(id) FROM posts WHERE user_id='$use'",$dbh1);
$countposts = mysql_result($selectposts,0);

?>
<div class="antily_information_view">
<div class="top_mianvergan_viewanti">
<div class="insetmain_antilyview">
<div class="right_accountviewall">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7v2H8v2h8v-2h-2v-2h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H3V4h18v12z"/>
</svg>
<span><p>اجمالي عدد الزيارات :</p> <a><?php if($accviewcount == 0){echo 'لايوجد معلومات لعرضها';}else{echo $accviewcount;} ?></a></span>
</div>
<div class="left_postsviewallant">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
</svg>
<span><p>عدد مشاهدات التدوينات : </p> <a><?php if(empty($countviewp)){echo 'لايوجد معلومات لعرضها';}else{echo $countviewp;} ?></a></span>
</div>
</div>
</div>
<div class="commentandshare_antily">
<div class="insetcommentshre_4585">
<div class="right_commentantily">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 225.000000 225.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,225.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M356 2219 c-160 -26 -294 -162 -326 -329 -13 -70 -13 -1039 0 -1111 31 -167 161 -297 330 -329 30 -6 232 -10 470 -10 l417 0 118 -187 c129 -206 156 -239 184 -223 10 5 75 99 145 209 l126 199 62 11 c175 30 305 158 338 331 13 70 13 1040 0 1110 -33 172 -165 302 -335 330 -73 12 -1458 11 -1529 -1z m1428 -425 c37 -37 35 -86 -3 -125 l-29 -29 -637 0 c-696 0 -680 -1 -704 58 -16 37 -5 77 26 102 25 19 43 20 673 20 l647 0 27 -26z m2 -277 c32 -38 32 -90 -1 -122 l-24 -25 -655 0 -654 0 -26 31 c-29 34 -32 55 -14 95 25 54 20 54 711 51 l639 -2 24 -28z m-2 -273 c37 -37 35 -86 -3 -125 l-29 -29 -637 0 c-696 0 -680 -1 -704 58 -16 37 -5 77 26 102 25 19 43 20 673 20 l647 0 27 -26z m-684 -262 c57 -28 66 -97 18 -142 -21 -19 -34 -20 -344 -20 l-322 0 -26 31 c-29 34 -32 55 -14 95 23 49 48 53 363 54 257 0 294 -2 325 -18z"/>
</g>
</svg>
<span><p>اجمالي عدد التعليقات :</p> <a><?php if(empty($countcomment)){echo 'لايوجد معلومات لعرضها';}else{echo $countcomment;} ?></a></span>
</div>
<div class="left_shareantilyviw">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span><p>اجمالي عدد التفاعلات :</p> <a><?php if(empty($countemoji)){echo 'لايوجد معلومات لعرضها';}else{echo $countemoji;} ?></a></span>
</div>
</div>
</div>
<div class="likedislike_countinfo">
<div class="insetlikedislike_view">
<div class="rightcount_likemain">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
<span><p>عدد النقر علي اعجبني :</p> <a><?php if(empty($countlikes)){echo 'لايوجد معلومات لعرضها';}else {echo $countlikes;} ?></a></span>
</div>
<div class="leftcount_dslikemain">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
<span><p>عدد النقر علي لم يعجبني  :</p> <a><?php if(empty($countdislikes)){echo 'لايوجد معلومات';}else {echo $countdislikes;} ?></a></span>
</div>
</div>
</div>
<div class="imagesaudio_antilymin">
<div class="insetimagesound_anti">
<div class="rightantily_image">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 4h7V2H4c-1.1 0-2 .9-2 2v7h2V4zm6 9l-4 5h12l-3-4-2.03 2.71L10 13zm7-4.5c0-.83-.67-1.5-1.5-1.5S14 7.67 14 8.5s.67 1.5 1.5 1.5S17 9.33 17 8.5zM20 2h-7v2h7v7h2V4c0-1.1-.9-2-2-2zm0 18h-7v2h7c1.1 0 2-.9 2-2v-7h-2v7zM4 13H2v7c0 1.1.9 2 2 2h7v-2H4v-7z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span><p>اجمالي عدد الصور :</p> <a><?php if(empty($countimages)){echo 'لايوجد معلومات لعرضها';}else {echo $countimages;} ?></a></span>
</div>
<div class="leftantily_audiomn">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 12.5v-9l6 4.5-6 4.5z"/>
</svg>
<span><p>عدد الفيديوهات :</p> <a>لايوجد معلومات لعرضها</a></span>
</div>
</div>
</div>
<div class="postscount_viewinfo">
<div class="insetpostscount_main">
<div class="postscountindiv_view">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M2 6H0v5h.01L0 20c0 1.1.9 2 2 2h18v-2H2V6zm20-2h-8l-2-2H6c-1.1 0-1.99.9-1.99 2L4 16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7 15l4.5-6 3.5 4.51 2.5-3.01L21 15H7z"></path>
</svg>
<span><p>اجمالي عدد التدوينات :</p> <a><?php if(empty($countposts)){echo 'لايوجد معلومات لعرضها';}else {echo $countposts;} ?></a></span>
</div>
</div>
</div>
<!--
<div class="bottomdescript_antilyinfio"><span>هذه الاحصائية عبارة عن اجمالي التفاعلات مع هذا الحساب</span></div>-->
</div>

<script>
$(document).ready(function(){
$(".main_infopage_body .loading_poats").fadeOut(0);
$(".genral_informaion_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_infoselect_ciew").fadeOut(0);
	$(".export_insetantly_ciew").fadeIn(0);
	$(".antily_information_view").css('transform','scale(1)');
},300);
});
$(".more_proinfomain").click(function(){
$(".main_infopage_body .loading_poats").fadeOut(0);
$(".genral_informaion_view,.antily_information_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_infoselect_ciew,.export_insetantly_ciew").fadeOut(0);
	$(".export_moreinfogt_ciew").fadeIn(0);
	$(".moreinfo_informati_view").css('transform','scale(1)');
},300);
});
$(".timeline_profileinfo").click(function(){
$(".main_infopage_body .loading_poats").fadeOut(0);
$(".genral_informaion_view,.moreinfo_informati_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_infoselect_ciew,.export_moreinfogt_ciew").fadeOut(0);
	$(".export_insetantly_ciew").fadeIn(0);
	$(".antily_information_view").css('transform','scale(1)');
},300);
});
$(".first_selected_proinfo").click(function(){
$(".antily_information_view,.moreinfo_informati_view").css('transform','scale(0)');
setTimeout(function(){
	$(".showbox_info").remove();
	$(".export_insetantly_ciew,.export_moreinfogt_ciew").fadeOut(0);
	$(".export_infoselect_ciew").fadeIn(0);
	$(".genral_informaion_view").css('transform','scale(1)');
},300);
});
</script>
<?php
}
?>