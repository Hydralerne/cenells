<div class="offwhile_resultmin_lock">
<div class="insetlie_resultmin_lock">
<?php
while($fetch = mysql_fetch_array($queryalls)){
?>
<div class="queryloop_lockpo" data-id="<?php echo $fetch['id']; ?>">
<div class="right_selectpo_15">
<img src="../upload/images/low/<?php echo $fetch['pro_img']; ?>" class="vdlpex_lockava" />
<span><?php echo $fetch['name']; ?></span>
<p>@<?php echo $fetch['user_name']; ?></p>
</div>
<div class="leftmain_plock_15">
<?php
$fetuserid = $fetch['id'];
$fetchtype = mysql_query("SELECT account_type FROM info WHERE user_id='$fetuserid'");
while($dexs = mysql_fetch_array($fetchtype)){
	$filacctype = $dexs['account_type'];
}
?>
<?php
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
<h3><?php echo $acctype; ?></h3>
</div>
</div>
<script>
if($(".vortextimg_lockv[data-id='<?php echo $fetch['id']; ?>']").length == 1){
	$(".queryloop_lockpo[data-id='<?php echo $fetch['id']; ?>']").remove();
	$(".insetlie_resultmin_lock").fadeOut(0);
}
</script>
<?php
}
?>
<script>
$(".queryloop_lockpo").click(function(){
	$(".insetlie_resultmin_lock").fadeOut(0);
	$(".inputview_lockmbder").val("");
	if($(".insetvortex_podv").length == 0){
		$(".append_vortextlock").html('<div class="insetvortex_podv"></div>');
	}else {}
	var dat = $(this).attr("data-id");
	var img = $(this).find(".vdlpex_lockava").attr("src");
	var nam = $(this).find("span").text();
	var htm = '<div title="'+ nam +'">' +
	'<i class="fa fa-times-circle" aria-hidden="true"></i>' +
	'<img src="'+ img +'" class="vortextimg_lockv" data-id="'+ dat +'" />' +
	'</div>';
	$(".insetvortex_podv").append(htm);
	$(".insetvortex_podv").css('display','flex');;
$(".insetvortex_podv div i").click(function(){
	$(this).closest("div").remove();
	if($(".insetvortex_podv div").length == 0){
		$(".insetvortex_podv").fadeOut(0);
	}else {
		$(".insetvortex_podv").css('display','flex');
	}
});
});
</script>
</div>
</div>