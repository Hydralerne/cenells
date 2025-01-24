<?php
if(empty($use)){
Header("Location:../");
}else {
include ("../connectdb/index.php");
$user = mysql_query("SELECT * FROM users WHERE id='$use'");

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



$selectinf = mysql_query("SELECT * FROM info WHERE user_id='$use'");
while($finfo = mysql_fetch_array($selectinf)){
	$filacctype = $finfo['account_type'];
	$filcontry = $finfo['contry'];
	$city = $finfo['city'];
	$loctype = $finfo['loctype'];
	$work = $finfo['work'];
	$learn = $finfo['learn'];
	$fisocial = $finfo['social'];
	$hobby = $finfo['hobby'];
	$about = $finfo['about'];
	$accsec = $finfo['account_secrit'];
}


function get_browser_name($user_agent)
{

    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return '2';
    elseif (strpos($user_agent, 'Edge')) return '3';
    elseif (strpos($user_agent, 'Chrome')) return '1';
    elseif (strpos($user_agent, 'Safari')) return '4';
    elseif (strpos($user_agent, 'Firefox')) return '5';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return '6';  
    return '8';
}

$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);

$agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Netscape/i', $agent)) {
    $browser = "7";
}else {}


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

$system_user_agent = $_SERVER['HTTP_USER_AGENT'];

function getsystem() { 

    global $system_user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
    '/windows nt 10/i'     =>  'w10',
    '/windows nt 6.3/i'     =>  'w8.1',
    '/windows nt 6.2/i'     =>  'w8',
    '/windows nt 6.1/i'     =>  'w7',
    '/windows nt 6.0/i'     =>  'wv',
    '/windows nt 5.2/i'     =>  'ws',
    '/windows nt 5.1/i'     =>  'wx',
    '/windows xp/i'         =>  'wx',
    '/windows nt 5.0/i'     =>  'w2',
    '/windows me/i'         =>  'wm',
    '/win98/i'              =>  'w98',
    '/win95/i'              =>  'w95',
    '/win16/i'              =>  'w3',
    '/macintosh|mac os x/i' =>  'mcx',
    '/mac_powerpc/i'        =>  'mc9',
    '/linux/i'              =>  'li',
    '/ubuntu/i'             =>  'ub',
    '/iphone/i'             =>  'ipn',
    '/ipod/i'               =>  'ipo',
    '/ipad/i'               =>  'ipa',
    '/android/i'            =>  'adr',
    '/blackberry/i'         =>  'blc',
    '/webos/i'              =>  'mb'
    );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $system_user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

$user_os = getsystem();

if(!empty($id)){
$selectwher = mysql_query("SELECT id,date FROM visit WHERE user_id='$id' AND for_id='$use' AND type='profile' AND ip='$user_ip' AND system='$user_os' AND browser='$browser'");
while($fetviewcheck = mysql_fetch_array($selectwher)){
	$checkviewid = $fetviewcheck['id'];
	$lastviewdat = $fetviewcheck['date'];
}
if(empty($checkviewid) && $use !== $id){
$insertview = mysql_query("INSERT INTO visit(user_id,for_id,date,type,ip,system,browser) VALUES('$id','$use','$timedate','profile','$user_ip','$user_os','$browser')");
}else {
$substviewdate = substr($lastviewdat,11);
if(substr($substviewdate,0,2) !== date("H")){
$insertview = mysql_query("UPDATE visit SET date='$timedate' WHERE user_id='$id' AND for_id='$use' AND type='profile'");
}else {}
}
}else {}

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $usern." (@".$user_name.") - CENells"; ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="../style/home-style.css" />
<link rel="stylesheet" type="text/css" href="../style/profileun-style.css" />
<link rel="stylesheet" type="text/css" href="../style/posts-style.css" />
<link rel="stylesheet" type="text/css" href="../style/index-style.css" />
<link rel="stylesheet" type="text/css" href="../style/emoicons-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script> 
<script src="../js/dragg-mes.js"></script>
<script src="../js/cropimg.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/ajaxacc.js"></script>
</head>
<body data-id="<?php echo $use; ?>" data-get="false" data-first="false">

<?php
if(!isset($_SESSION['ceuser'])){
include "../body-html/nomenu.php";
} else {
include "../body-html/menu-top.php";
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

// sesstion sex

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

$id = $info['id'];

?>
<div class="allpagetopmain">
<div class="topagecovefiel">
<div class="cover" id="cover">
<div class="cover-img">
<div class="cover_image_main">
<div class="cover_overwhite_main"></div>
<div class="overflow_image_cover">
<div class="onload_div_append"></div>
<img src="../upload/covers/sml/<?php echo $cover; ?>" style="top: <?php echo $covertop; ?>px" data-large="../upload/covers/full/low/<?php echo $cover; ?>" class="lodblur_cover_main" />
<?php
if(isset($_SESSION['ceuser'])){
if($use == $id){
?>
<div class="change-cover-img">
<img src="../img/profile/account-icons/add-p-img.png" id="cover-img" />
<h6>تحديث صورة الغلاف</h6>
</div>
<?php
}
}
?>
<script>
// cover image loading blur
(function ($) {
    $.fn.coverbluray = function () {
        var parentContainer = $(".onload_div_append"),
            imageContainer = $(this);
        // 2: load large image
        var imgLarge = new Image();
        imgLarge.src = $(this).attr('data-large');
        imgLarge.classList.add('image_cover_main');
        imgLarge.onload = function () {
        imageContainer.addClass('coverloaded');
        parentContainer.append(imgLarge);
		$(".image_cover_main").css('top','<?php echo $covertop; ?>px');
		imgLarge.classList.add('coverlshow_loaded');
		};
    };

}(jQuery));
$(".lodblur_cover_main").coverbluray();

$(document).ready(function(){
$(".p-m-img").mouseleave(function(){
	$(".change-p-img").fadeOut(100);
	$(".edit-p-img").fadeOut(100);
});
$(".p-m-img").mouseenter(function(){
	$(".change-p-img").fadeIn(100);
	$(".edit-p-img").fadeIn(100);
});	
$(".overflow_image_cover").mouseenter(function(){
	$(".change-cover-img").fadeIn(100);
});
$(".overflow_image_cover").mouseleave(function(){
	$(".change-cover-img").fadeOut(100);
});
});
</script>
</div>
<?php
if(isset($_SESSION['ceuser']) && $use == $id){
?>
<div class="cover_change_show">
<div class="buttons_docovershng">
<button class="submitcover_chngset" type="button">تعيين كصورة غلاف</button>
<button class="canslecover_chngset" type="button">الغاء الاجراء</button>
</div>
<div class="image_dragable_inamin">
<img src="" class="fileapi_cover_show" />
</div>
</div>
<div class="upload-comfilediv">
<div class="coverup_buttons">
<button type="button" class="select_cover_image">اختر صورة</button>
<button type="button" class="cansle_image_uplod">الغاء</button>
</div>
<form id="uploadFormco" action="../ajax-php/ajax-coverup.php" method="POST" style="display: block;">
<input style="display: none!important;" name="userImage" id="userImageco" type="file" class="demoInputBox">
<input style="display: none!important;" type="submit" id="btnSubmitco" value="Submit" class="btnSubmit">
<div class="container">
<div class="progressco">
<div class="progressco-div"><div class="progressco-bar" style="width: 0%;"></div></div>
<div class="progressco-value"></div>
</div>
</div>
<div class="upload_shytohco">
</div>
</form>
</div>
<script>
// cover doing update 

$(".change-cover-img").click(function(){
	$(".shadow-cover,.p-m-img,.pro-name").fadeOut(100,function(){
		$(".upload-comfilediv").fadeIn(0,function(){
			$(".cover_overwhite_main").fadeIn(100,function(){
			$(".coverup_buttons").css('transform','scale(1)');
			$(".shadow-cover").attr("style","display: none!important;");
			});
		});
	});
});

$(".select_cover_image").click(function(){
	$("#userImageco").click();
});
function readcover(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.fileapi_cover_show').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#userImageco").change(function(){
	$("#uploadFormco").submit();
	$(".coverup_buttons").css('transform','scale(0)')
	setTimeout(function(){
		$("#uploadFormco,.progressco").fadeIn(100);
	},300);
	readcover(this);
});
$(".cansle_image_uplod").click(function(){
	$(".coverup_buttons").css('transform','scale(0)');
	$(".shadow-cover").removeAttr("style");
	setTimeout(function(){
		$(".cover_overwhite_main,.progressco,#uploadFormco,.upload-comfilediv").fadeOut(100,function(){
		$(".shadow-cover,.p-m-img,.pro-name").fadeIn(100);
		});
	},300);
	readcover(this);
});
$(".submitcover_chngset").click(function(){
	$(".cover_overwhite_main").fadeIn(100,function(){
		$(".buttons_docovershng button").attr("disabled","disabled");
		var funcrop = $(".fileapi_cover_show").position().top;
		var value = $("#hidencoverval").val();
		var src = $(".fileapi_cover_show").attr("src");
		var top = $(".fileapi_cover_show").css("top");
		$(".image_cover_main").attr("src",src);
		$(".image_cover_main").css("top",top);
		$.post("../ajax-php/accimages.php",{subchangecov: "submit",funcrop: funcrop,value: value},function(e){$(".scripts").html(e)});
		$(".shadow-cover").removeAttr("style");
	});
});
$(".canslecover_chngset").click(function(){
	$(".cover_overwhite_main").fadeOut(100,function(){
		$(".cover_change_show").css("visibility","hidden");
		$(".cover_overwhite_main,.progressco,#uploadFormco,.upload-comfilediv").fadeOut(100,function(){
		$(".shadow-cover,.p-m-img,.pro-name,.overflow_image_cover").fadeIn(100);
		});
	});
});
$(document).ready(function() {
	 $('#uploadFormco').submit(function(e) {
		if($('#userImageco').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.upload_shytohco', 
				beforeSubmit: function() {
				  $(".progressco-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progressco-bar").width(percentComplete + '%');
				},
				success:function (){
	            $(".progressco").fadeOut(100,function(){
					$(".progressco-bar").width('0%');
					$(".cover_overwhite_main,.upload-comfilediv").fadeOut(100,function(){
						$(".cover_change_show").css('visibility','visible');
						$(".overflow_image_cover").fadeOut();
					});
				});
				chngposition();
				$(window).resize(function(){
					chngposition();
				});
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});



function chngposition(){
var cv = $('.image_dragable_inamin').height();
var im = $('.fileapi_cover_show').height();
$(".fileapi_cover_show").draggable({
scroll: false,
axis: "y",
drag: function(event, ui) {
if(ui.position.top >= 0){
	ui.position.top = 0;
}else if(ui.position.top <= cv - im){
ui.position.top = cv - im;
}
},
stop: function(event, ui) {

}
});                 
}




</script>
<?php
}
?>
</div>
</div>
<div class="shadow-cover"></div>
</div>
<div class="rightprofile">
<div class="container">
<div class="body-pro">
<div class="p-m-img">
<div class="image_profile_loded"></div>
<img src="../upload/images/low/<?php echo $pimg ?>" data-large="../upload/images/height/<?php echo $pimg ?>" draggable='false' class="blurloadid_proimg" />
<script>
(function ($) {
    $.fn.proimgblur = function () {
        var parentContainer = $(".image_profile_loded"),
            imageContainer = $(this);
        // 2: load large image
        var imgLarge = new Image();
        imgLarge.src = $(this).attr('data-large');
        imgLarge.classList.add('pro_img_main');
        imgLarge.onload = function () {
        imageContainer.addClass('proimgloaded');
        parentContainer.append(imgLarge);
		imgLarge.classList.add('proimgshow_loaded');
		};
    };

}(jQuery));

$(".blurloadid_proimg").proimgblur();
</script>

<?php
if($use == $id){
if($fqoqfr !== "true"){
?>
<div class="edit_columns_proimg">
<div class="change-p-img">
<svg id="acc-img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <circle cx="12" cy="12" r="3.2"></circle>
    <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<div class="edit-p-img">
<svg id="acc-img-edit" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"></path>
</svg>
</div>
</div>

<style>
.p-m-img:hover .pro_img_main{
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -ms-filter: blur(5px);
    -o-filter: blur(5px);
    filter: blur(5px);
}
</style>
<?php
}
}
?>

</div>
<div class="pro-name">
<h3>
<?php
echo $usern;
if($check == 'true'){
echo "<img src='../img/icons/checkbg.png' draggable='false' id='check-img'/>";
}else {}
?>
</h3>
<p>
<?php
echo $acctype;
?>
</p>
</div>
</div>
</div>
</div>
<div class="profilerefs">
<div class="container">
<?php
if(isset($_SESSION['ceuser']) && $id !== $use){
?>
<div class="button-soc">
<?php
$selfol = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$use'");
while($fetfol = mysql_fetch_array($selfol)){
	$folid = $fetfol['id'];
	$erto = $fetfol['follow_active'];
}
?>
<div class="folun_45">
<div class="follow">
<?php
if(empty($folid)){
?>
<button type="button" class="followbtn" id="follow" doing="follow">
Follow
<svg id="fol-img" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
</svg>
</button>
<?php
}else {
if($erto == "false"){
?>
<button type="button" class="unfollow requested" style="padding-left: 25px!important;" id="follow" doing="unfollow"> 
Requested
<svg viewBox="0 0 24 24"  class="unfolsvg requestedsvg" style="margin-left: -115px!important;" id="fol-img" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
<svg style="visibility:hidden;margin-left: -115px!important;" viewBox="0 0 24 24" id="fol-img" class="hide-folsvg" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<script>
$(".follow button").mouseenter(function(){
	$(".unfolsvg").css("visibility","hidden");
	$(".hide-folsvg").css("visibility","visible");
});
$(".follow button").mouseleave(function(){
	$(".unfolsvg").css("visibility","visible");
	$(".hide-folsvg").css("visibility","hidden");
});
</script>
<?php
}else {
if($erto == "true"){
?>
<button type="button" class="unfollow unfollowstyle" id="follow" doing="unfollow">
Following
<svg class="unfolsvg averto" id="fol-img" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
</svg>
<svg style="visibility:hidden;" viewBox="0 0 24 24" id="fol-img" class="hide-folsvg averto" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<script>
$(".follow button").mouseenter(function(){
	$(".unfolsvg").css("visibility","hidden");
	$(".hide-folsvg").css("visibility","visible");
});

$(".follow button").mouseleave(function(){
	$(".unfolsvg").css("visibility","visible");
	$(".hide-folsvg").css("visibility","hidden");
});
</script>
<?php
}else {}
}
}
?>
</div>
</div>
<div class="messagediv" id="messagediv">
<a href="../range/<?php echo $user_name; ?>">
<button type="button" id="messagediv">
Message
<svg version="1.0" id="message-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
<path d="M998 4296 c-61 -24 -106 -60 -185 -148 -341 -380 -549 -843 -603
-1340 -20 -187 -11 -460 21 -648 75 -443 310 -912 612 -1222 90 -93 139 -119
229 -126 152 -11 280 88 308 239 21 110 -14 190 -154 346 -198 222 -346 524
-406 828 -31 154 -38 409 -16 567 52 369 192 671 446 958 90 102 105 126 125
194 38 132 -25 270 -154 337 -54 28 -169 35 -223 15z"/>
<path d="M3921 4292 c-131 -55 -208 -195 -181 -328 14 -66 55 -131 154 -241
198 -222 346 -524 406 -828 31 -154 38 -409 16 -567 -52 -369 -192 -671 -446
-958 -90 -102 -105 -126 -125 -194 -74 -254 221 -464 445 -316 83 55 278 293
387 473 230 380 343 784 343 1229 0 442 -113 844 -343 1228 -118 196 -331 446
-418 491 -61 31 -177 36 -238 11z"/>
<path d="M1760 3646 c-69 -18 -110 -48 -203 -146 -177 -186 -293 -410 -348
-673 -31 -144 -31 -390 0 -534 56 -267 171 -488 353 -679 112 -117 169 -147
273 -147 81 0 145 27 206 86 89 87 109 248 43 353 -10 16 -46 59 -80 95 -34
37 -76 88 -94 114 -101 147 -152 354 -130 530 23 184 91 327 225 474 94 102
117 151 118 246 1 137 -84 245 -220 280 -67 18 -83 18 -143 1z"/>
<path d="M3230 3651 c-81 -17 -171 -86 -204 -156 -27 -57 -37 -146 -22 -203
17 -62 36 -92 112 -173 34 -37 76 -88 94 -114 101 -147 152 -354 130 -530 -23
-184 -91 -327 -225 -474 -94 -102 -117 -151 -118 -246 0 -72 17 -121 66 -187
53 -72 181 -118 275 -99 79 16 127 48 224 150 178 187 294 410 349 674 31 144
31 390 0 534 -56 267 -171 488 -353 679 -62 64 -106 101 -141 118 -58 27 -135
38 -187 27z"/>
<path d="M2497 2910 c-228 -39 -359 -298 -255 -507 129 -260 509 -260 636 -1
128 262 -93 556 -381 508z"/>
</g>
</svg>
</button>
</a>
</div>
<div class="moreacc_divnice">
<button class="moreaccdiv">
<svg id="moreimgacc_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
</svg>
</button>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
<div class="proimageditfull">
<?php

if(isset($_SESSION['ceuser']) && $id == $use){
?>
<div class="profileimagedit">
<div class='container'>
<div class='form-input-sub'>
<div class='container'>
<div class='mini-formimsub' id='mini-formimsub'>
<a class="close-this-font">
<i class="fa fa-times" aria-hidden="true"></i>
</a>
<div class="loading_crop808"></div>
<div class="edit-img-main">
<div class="image-editor">
<div class="cropit-preview"></div>
<div class="image-size-label">
</div>
<form id="uploadForm6" action="../ajax-php/ajax-postupload.php" method="POST">
<input type="file" style="display: none!important;" name="userImage" id="file-1" accept="image/*" class="cropit-image-input demoInputBox" />
<input style="display: none!important;" type="submit" id="btnSubmit9" value="Submit" class="btnSubmit">
<div class="progress6">
<div class="progress6-div"><div class="progress6-bar"></div></div>
<div class="progress6-value"></div>
</div>
</form>
<div class="crop-butin-mzxo" id="crop-butin-mzxo">
<div class="crop-img-tools">
<input type="range" class="cropit-image-zoom-input">
<button class="rotate-ccw">
<a id="rotate_left" title="Rotate left">
<i class="fa fa-rotate-left"></i>
</a>
</button>
<button class="rotate-cw">
<a id="rotate_right" title="Rotate right">
<i class="fa fa-rotate-right"></i>
</a>
</button>
<button id="export" type="button" class="export">
<a id="crop-icona">
<i class="fa fa-crop" aria-hidden="true"></i>
</a>
<span class="crop-word-span">اقتصاص</span>
</button>
</div>
<button type="button" class="set-profile-img">تعيين كصورة شخصية</button>
<input type="hidden" id="send-crop-img" />
<input type="hidden" id="send_full_image" />
</div>
</div>
</div>
</div>
</div>
</div>
<div class="hidden_imgupload_div"></div>
<script>
// uploadfulimage 

$(document).ready(function() {
	 $('#uploadForm6').submit(function(e) {
		if($('#file-1').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.hidden_imgupload_div', 
				beforeSubmit: function() {
				  $(".progress6-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress6-bar").width(percentComplete + '%');
				},
				success:function (){
	            $(".progress6").fadeOut(function(){
					$(".progress6-bar").width('0%');
					var image = $("#hideinimgsrc").val();
					var pro_img = $("#hideproimgval").val();
					$.post("../ajax-php/accimages.php",{subpostimage: "submit",image: image,pro_img: pro_img},function(e){$(".scripts").html(e)});
				});
				$("#uploadForm6").fadeOut();
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});

function doupfullimg(){
	$(".loading_crop808").css('background-image','none');
	$(".progress6").fadeIn(100,function(){
		$('#uploadForm6').submit();
	});
}


$(document).ready(function(){
$(".change-p-img").click(function(){
	$("#file-1").click();
});
});
$("#file-1").change(function(){
	$(".form-input-sub").fadeIn(100,function(){
		$(".main_posts,.cover,.body-pro,.menu-state,.left-main,.all-top_55").addClass("blurfullscreen");
	});
});
/*
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $("#send_full_image").val(e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#file-1").change(function(){
        readURL(this);
    });

*/
/*
$('#file-1').bind('change', function() {
	  if(this.files[0].size > 5000000){
		  
	  }
});
*/
var _URL = window.URL || window.webkitURL;
$("#file-1").change(function (e) {
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
           
		   if(this.height < 330){
            $("#img-cropfkio-logo").fadeOut();
			$(".error-sizeimg").fadeIn();
		   }else if(this.width < 360){
            $("#img-cropfkio-logo").fadeOut();
			$(".error-sizeimg").fadeIn();
		   }else { 
	         $("#img-cropfkio-logo").fadeOut(function(){
			 $(this).remove();
			 });
	         $(".error-sizeimg").fadeOut(0,function(){
			 $(this).remove();
			 });			 
			 $(".cropit-preview").fadeIn();
		     $(".crop-butin-mzxo").fadeIn();
		     }
		   
		   
        };
        img.src = _URL.createObjectURL(file);
    }
});

$(document).ready(function(){
	$(".close-this-font").click(function(){
		$(".form-input-sub").fadeOut(function(){
			location.reload();
		});
	});
});

$(document).ready(function(){
	$(".export").click(function(){
		$(".cropit-preview-image").attr("draggable","false");
		$(".cropit-preview-image").mousedown(function(){
			return false;
		});
		$(".crop-img-tools").fadeOut(function(){
			$(".image-editor").animate({'margin-top': '65px'},function(){
			$(".set-profile-img").css('display','block');
			});
		});
	});
});

$(document).ready(function(){
	$(".export").click(function(){
		$(".image-editor img").css('cursor' ,'default');
	});
});

      $(function() {
        $('.image-editor').cropit();

        $('.rotate-cw').click(function() {
          $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
          $('.image-editor').cropit('rotateCCW');
        });

        $('.export').click(function() {
          var image = $('.image-editor').cropit('export');
		  $("#send-crop-img").val(image); 
        });

});

$(document).ready(function(){
	$(".set-profile-img").click(function(){
		$(this).attr("disabled","disabled");
		$(".loading_crop808").fadeIn(100,function(){
			var imageval = $("#send-crop-img").val();
			$.post("../ajax-php/proimg-upload.php",{subimage: "submit",imageval: imageval},function(o){$(".scripts").html(o);});
		});
	});
});
	
</script>

</div>
</div>
<?php
}
?>
</div>
<div class="menu-state">
<div class="scroll_show_pinfo">
<div class="info_naim_50">
<img id="pro_logo_a458" src="../upload/images/low/<?php echo $pimg; ?>" />
<h4>
<?php
if($check == 'true'){
	echo "<img id='c_check_56' src='../img/icons/checkbg.png' />";
}
?>
<?php echo $usern ?>
</h4>
<span>@<?php echo $user_name; ?></span>
</div>
</div>
<div class="container">
<div class="menu-href">
<a href="/" class="a_posts_view" id="first-hrefm">
<h3>المنشورات</h3>
</a>
<a href="/about" class="a_info_view">
<h3>المعلومات</h3>
</a>
<a href="/followers" class="a_get_fol">
<h3>المتابِعون</h3>
</a>
<a href="/following" class="a_fet_fotio">
<h3>المتابَعون</h3>
</a>
<a href="#">
<h3>النشاطات</h3>
</a>
<a href="#">
<h3>الصفحات</h3>
</a>
</div>
<div class="cerrent_url"></div>
</div>
<?php
if($id !== $use){
?>
<div class="scrolit_follow_45">
<div class="followit_45">
<?php
$selfol = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$use'");
while($fetfol = mysql_fetch_array($selfol)){
	$folid = $fetfol['id'];
	$erto = $fetfol['follow_active'];
}
?>
<div class="followit_inset_45">
<?php
if(empty($folid)){
?>
<button type="button" class="followbtnmain" doing="follow">
متابعة
<svg id="folimg_45" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
</svg>
</button>
<?php
}else {
if($erto == "false"){
?>
<button type="button" class="followbtnmain" doing="unfollow"> 
مطلوب
<svg viewBox="0 0 24 24"  class="unfolsvgit_45 requestedsvgit_45" id="folimg_45" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
<svg style="visibility:hidden;" viewBox="0 0 24 24" id="folimg_45" class="lolsvgit_45fol" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<script>
$(".followit_inset_45 button").mouseenter(function(){
	$(".unfolsvgit_45").css("visibility","hidden");
	$(".lolsvgit_45fol").css("visibility","visible");
});
$(".followit_inset_45 button").mouseleave(function(){
	$(".unfolsvgit_45").css("visibility","visible");
	$(".lolsvgit_45fol").css("visibility","hidden");
});
</script>
<?php
}else {
if($erto == "true"){
?>
<button type="button" class="followbtnmain" doing="unfollow">
تتابعه
<svg class="unfolsvgit_45 avertoit_45" id="folimg_45" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
</svg>
<svg style="visibility:hidden;" viewBox="0 0 24 24" id="folimg_45" class="lolsvgit_45fol avertoit_45" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</button>
<script>
$(".followit_inset_45 button").mouseenter(function(){
	$(".unfolsvgit_45").css("visibility","hidden");
	$(".lolsvgit_45fol").css("visibility","visible");
});
$(".followit_inset_45 button").mouseleave(function(){
	$(".unfolsvgit_45").css("visibility","visible");
	$(".lolsvgit_45fol").css("visibility","hidden");
});
</script>
<?php
}else {}
}
}
?>
</div>
<div class="messagedivit_45">
<a href="../range/<?php echo $user_name; ?>">
<button type="button" id="messagedivbtn_45">
مراسلة
<svg version="1.0" id="messageimg_45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
<path d="M998 4296 c-61 -24 -106 -60 -185 -148 -341 -380 -549 -843 -603
-1340 -20 -187 -11 -460 21 -648 75 -443 310 -912 612 -1222 90 -93 139 -119
229 -126 152 -11 280 88 308 239 21 110 -14 190 -154 346 -198 222 -346 524
-406 828 -31 154 -38 409 -16 567 52 369 192 671 446 958 90 102 105 126 125
194 38 132 -25 270 -154 337 -54 28 -169 35 -223 15z"/>
<path d="M3921 4292 c-131 -55 -208 -195 -181 -328 14 -66 55 -131 154 -241
198 -222 346 -524 406 -828 31 -154 38 -409 16 -567 -52 -369 -192 -671 -446
-958 -90 -102 -105 -126 -125 -194 -74 -254 221 -464 445 -316 83 55 278 293
387 473 230 380 343 784 343 1229 0 442 -113 844 -343 1228 -118 196 -331 446
-418 491 -61 31 -177 36 -238 11z"/>
<path d="M1760 3646 c-69 -18 -110 -48 -203 -146 -177 -186 -293 -410 -348
-673 -31 -144 -31 -390 0 -534 56 -267 171 -488 353 -679 112 -117 169 -147
273 -147 81 0 145 27 206 86 89 87 109 248 43 353 -10 16 -46 59 -80 95 -34
37 -76 88 -94 114 -101 147 -152 354 -130 530 23 184 91 327 225 474 94 102
117 151 118 246 1 137 -84 245 -220 280 -67 18 -83 18 -143 1z"/>
<path d="M3230 3651 c-81 -17 -171 -86 -204 -156 -27 -57 -37 -146 -22 -203
17 -62 36 -92 112 -173 34 -37 76 -88 94 -114 101 -147 152 -354 130 -530 -23
-184 -91 -327 -225 -474 -94 -102 -117 -151 -118 -246 0 -72 17 -121 66 -187
53 -72 181 -118 275 -99 79 16 127 48 224 150 178 187 294 410 349 674 31 144
31 390 0 534 -56 267 -171 488 -353 679 -62 64 -106 101 -141 118 -58 27 -135
38 -187 27z"/>
<path d="M2497 2910 c-228 -39 -359 -298 -255 -507 129 -260 509 -260 636 -1
128 262 -93 556 -381 508z"/>
</g>
</svg>
</button>
</a>
</div>
<div class="moreaccit_divnice_45">
<button class="moreaccdivit_45">
<svg id="moreimgaccit_svg_45" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
</svg>
</button>
</div>
</div>
<div class="messageit_45"></div>
<div class="moreit_45"></div>
</div>
<div class="hidden_info_45">
<span>اضافة للمفضلة</span>
<?php

$ufareasd = mysql_query("SELECT COUNT(id) FROM favourite WHERE fav_user_id='$id' AND fav_for_id='$use' AND fav_type='user'");
$coisoapk = mysql_result($ufareasd,0);
if($coisoapk == 0){
$subreqc = 'none';
$susexbo = 'block';
}else {
$subreqc = 'block';
$susexbo = 'none';
}

?>
<svg viewBox="0 0 24 24" class="cfav_546" id="favor_546" style="display: <?php echo $subreqc; ?>;fill: #ec082c;" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
</svg>
<svg viewBox="0 0 24 24" class="rfav_546" id="favor_546" style="display: <?php echo $susexbo; ?>;" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/>
</svg>
</div>
<?php
}
?>
<script>
$(".followit_inset_45 button").click(function(){
$(this).attr("disabled","true");
var doing = $(this).attr("doing");
var user_id = $("body").attr("data-id");
if(doing == "follow"){
    $.post("../ajax-php/follow.php", {follow: "submit",user_id: user_id} ,function(e){ $(".scripts").html(e)});
}else {
if(doing == "unfollow"){
	$.post("../ajax-php/follow.php", {unfollow: "submit",user_id: user_id} ,function(e){ $(".scripts").html(e)});
}else {}
}
});
$(".menu-href a").click(function(event){
	event.preventDefault();
});
</script>
</div>
</div>
<div class="miapagesvortex">
<div class="container">
<div class="pages_profile">
<?php
	$morsiyes = mysql_query("SELECT COUNT(id) FROM follow WHERE following='$use' AND follow_active='true'");
	$killsisi = mysql_result($morsiyes,0);

	$ahoooo = mysql_query("SELECT COUNT(id) FROM follow WHERE follow='$use' AND follow_active='true'");
	$ahaaaa = mysql_result($ahoooo,0);
?>
<div class="following_return_all" style="display: none;">
<div class="following_toption">
<div class="this-menu-404">
<div class="main_404_ertop">
<span>(<?php echo $ahaaaa; ?>) <?php echo $first_name; ?> الاشخاص الذين يتابعهم</span>
<div class="set404_div">
<svg id="set404_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
</div>
</div>
</div>
</div>
<div class="main_404">
<input type="hidden" id="followingoftval" value="0" />
<div class="loading_follow">
<div class="ce-loaging-follow">
<div class="circle-follow"></div>
<div class="circle-small-follow"></div>
<div class="circle-big-follow"></div>
<div class="circle-inner-inner-follow"></div>
<div class="circle-inner-follow"></div>
</div>
</div>
<div class="body_afterl_404">
</div>
<div class="loadmore_follow loadfollowers">
<button type="button" class="loadfollowingbtn">تحميل المزيد</button>
</div>
</div>
</div>
<div class="follow_return_all" style="display: none;">
<div class="follow_toption">
<div class="this-menu-878">
<div class="main_878_ertop">
<span>(<?php echo $killsisi; ?>) <?php echo $first_name; ?> الاشخاص الذين يتابعون</span>
<div class="set888_div">
<svg id="set888_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
</div>
</div>
</div>
</div>
<div class="main_878">
<input type="hidden" id="followoffsetval" value="0" />
<div class="loading_follow">
<div class="ce-loaging-follow">
<div class="circle-follow"></div>
<div class="circle-small-follow"></div>
<div class="circle-big-follow"></div>
<div class="circle-inner-inner-follow"></div>
<div class="circle-inner-follow"></div>
</div>
</div>
<div class="body_afterl_878">
</div>
<div class="loadmore_follow loadfollowers">
<button type="button" class="loadfollowersbtn">تحميل المزيد</button>
</div>
</div>
</div>
<div class="proinfo_pagemain_all">
<div class="inset_infomain_view">
<div class="inform_menu_top">
<span>صفحة المعلومات - <?php echo $first_name; ?></span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
</svg>
</div>
<div class="main_infopage_body">
<div class="right_column_select">
<div class="inset_menuall_proinfo">
<div class="first_selected_proinfo">
<span>المعلومات العامة</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
<div class="more_proinfomain">
<span>تفاصيل حول الحساب</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"/>
</svg>
</div>
<div class="timeline_profileinfo">
<span>احصائيات الحساب</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <path d="M0 0h24v24H0V0z" id="a"/>
    </defs>
    <clipPath id="b">
        <use overflow="visible" xlink:href="#a"/>
    </clipPath>
    <path clip-path="url(#b)" d="M23 8c0 1.1-.9 2-2 2-.18 0-.35-.02-.51-.07l-3.56 3.55c.05.16.07.34.07.52 0 1.1-.9 2-2 2s-2-.9-2-2c0-.18.02-.36.07-.52l-2.55-2.55c-.16.05-.34.07-.52.07s-.36-.02-.52-.07l-4.55 4.56c.05.16.07.33.07.51 0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2c.18 0 .35.02.51.07l4.56-4.55C8.02 9.36 8 9.18 8 9c0-1.1.9-2 2-2s2 .9 2 2c0 .18-.02.36-.07.52l2.55 2.55c.16-.05.34-.07.52-.07s.36.02.52.07l3.55-3.56C19.02 8.35 19 8.18 19 8c0-1.1.9-2 2-2s2 .9 2 2z"/>
</svg>
</div>
<div class="urlfor_anotherpage">
<span>روابط لمواقع اخري</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/>
</svg>
</div>
</div>
</div>
<div class="export_infoselect_ciew">
<div class="loading_poats">
<div class="ce-loaging-posts">
<div class="circle-posts"></div>
<div class="circle-small-posts"></div>
<div class="circle-big-posts"></div>
<div class="circle-inner-inner-posts"></div>
<div class="circle-inner-posts"></div>
</div>
</div>
</div>
<div class="export_moreinfogt_ciew">

</div>
<div class="export_insetantly_ciew">

</div>
</div>
<script>
$(".first_selected_proinfo").click(function(){
if($(".genral_informaion_view").length == 0){
$.get("about.php",{getinfo: "submit"},function(e){$(".export_infoselect_ciew").append(e)});
}else {}
});
$(".timeline_profileinfo").click(function(){
if($(".antily_information_view").length == 0){
var html = '<div class="showbox_info" style="display: block;">' +
'<div class="loader_info">' +
'<svg class="circular_info" viewBox="25 25 50 50">'+
'<circle class="path_circle_info" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>' +
'</svg>' +
'</div>' +
'</div>';
$(this).append(html);
$.get("about.php",{antily: "submit"},function(e){$(".export_insetantly_ciew").append(e)});
}else {}
});
$(".more_proinfomain").click(function(){
if($(".moreinfo_informati_view").length == 0){
var html = '<div class="showbox_info" style="display: block;">' +
'<div class="loader_info">' +
'<svg class="circular_info" viewBox="25 25 50 50">'+
'<circle class="path_circle_info" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>' +
'</svg>' +
'</div>' +
'</div>';
$(this).append(html);
$.get("about.php",{moreinfo: "submit"},function(e){$(".export_moreinfogt_ciew").append(e)});
}else {}
});
</script>
</div>
</div>
</div>
<?php
include "../body-html/left-main.php";
?>
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
<div class="displaypage_mainall">
<?php
$queruychecfol = mysql_query("SELECT COUNT(id) FROM follow WHERE follow='$id' AND following='$use' AND follow_active='true'");
$countfollowid = mysql_result($queruychecfol,0);
if($accsec == "per" && $countfollowid == 0 && $use !== $id){
?>
<div class="offsetper_account">
<div class="personal_account">
<div class="insetper_account">
<svg viewBox="0 0 24 24" id="loced-accsvg_12" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
</svg>
<span>
عفواً هذا الحساب خاص ولا يمكن رؤية محتواه الا بمتابعته
</span>
<p>
اذا كنت تريد رؤية احدث نشاطاته <?php echo $first_name; ?> تابع
</p>
</div>
</div>
</div>
<?php
}else {
?>
<div class="towcolumnidval">
<div class="rght-info_453">
<div class="menu_r87">
<div class="r87divs_svg">
<div class="ass_yourf">
<div class="holdertyu">
<svg viewBox="0 0 24 24" id="ass_658_svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>
</div>
<div class="favor_andfr">
<svg viewBox="0 0 24 24" id="star_545" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
</div>
<div class="timeline_ico">
<svg viewBox="0 0 24 24" id="timeline_svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</div>

<div class="set_878">
<svg id="set878_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
</svg>
</div>
</div>
<div class="account_as83 scale_info">

<?php
$fa = mysql_query("SELECT * FROM secde WHERE user_id='$use' AND type='veiw_asac' AND session='on'");
while($ra = mysql_fetch_array($fa)){
	$asrafat = $ra['id'];
}
if(empty($asrafat)){
?>
<div class="ofsettings">
<span>لا يوجد حسابات مماثلة لعرضها</span>

<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 15h-2v-2h2v2zm0-4h-2V8h2v6zm-1-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
</svg>
</div>
<?
}else{
$sqlreas = mysql_query("SELECT * FROM info WHERE account_type='$filacctype' AND user_id!='$use' ORDER BY id DESC LIMIT 10");
while($aswh = mysql_fetch_array($sqlreas)){
$asid = $aswh['user_id'];
$seleasmuq = mysql_query("SELECT * FROM users WHERE id='$asid' AND id!='$use' ORDER BY id DESC LIMIT 10");
while($aswr = mysql_fetch_array($seleasmuq)){
?>
<div class="filut_32">
<img src="../upload/images/low/<?php echo $aswr['pro_img']; ?>" id="img_filut_32" />
<a href="../<?php echo $aswr['id']; ?>" target="_blank" <?php if($aswr['c_check'] == "true"){echo 'class="haider_abadol"';}else {}?>>
<?php
if($aswr['c_check'] == "true"){
	echo '<img id="checktrue_32" src="../img/icons/checkbg.png" />';
	$eroti = 'class="aslerop_32"';
}
?>
<h3 <?php echo $eroti; ?>>
<?php echo $aswr['name']; ?>
</h3>
</a>
<p>
<?php 
if(!empty($aswr['user_name'])){
echo "@".$aswr['user_name'].""; 
}
?>
</p>
<div class="foll_filut_32">
<?php
$userid_aswr = $aswr['id'];
$queryfollow_aswr = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$userid_aswr'");
while($fetfol_as = mysql_fetch_array($queryfollow_aswr)){
	$emptyfol_aswr = $fetfol_as['following'];
}
if($emptyfol_aswr !== $userid_aswr){
	$follow_aswr = "false";
}else {
if($emptyfol_aswr == $userid_aswr){
	$follow_aswr = "true";
}
}

if($id == $userid_aswr){
	$disabled_aswr = "disabled";
}else {
	$disabled_aswr = "";
}

?>
<?php 
if($follow_aswr == "false"){
    $butpo_aswr = "butpo_32";
	$datatype_aswr = "off";
}else {
	$butpo_aswr = "butpo_33";
	$datatype_aswr = "on";
}
?>

<button type="button" id="asd<?php echo $aswr['id']; ?>" <?php echo $disabled_aswr; ?> data-type="<?php echo $datatype_aswr; ?>" data-id="<?php echo $userid_aswr; ?>" class="<?php echo $butpo_aswr; ?> butfol23">
<?php 

if($follow_aswr == "false"){
?>
<svg viewBox="0 0 24 24" id="foll_svg32" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
</svg>
<?php
}else{
if($follow_aswr == "true"){

$sertw_as = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$userid_aswr' AND follow_type='req' AND follow_active='false'");
while($retio_as = mysql_fetch_array($sertw_as)){
	$ewqop_as = $retio_as['id'];
}
if(!empty($ewqop_as)){
?>
<svg viewBox="0 0 24 24" class="requestedsvg_table" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
<?php
}else {
?>
<svg class="truefol_like" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
</svg>
<svg viewBox="0 0 24 24" class="folfol_like" class="hide-folsvg" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<?php
}
}
}
?>
</button>
<script>
$(document).ready(function(){
$("#asd<?php echo $aswr['id']; ?>").click(function(){
	$(this).sendFollow();
});
$("#asd<?php echo $aswr['id']; ?>").mouseFollow();
});
</script>
</div>
</div>
<?php
$checkrrr = "true";
}
}
if($checkrrr !== "true"){
?>
<div class="ofsettings">
<span>لا يوجد حسابات مماثلة لعرضها</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 15h-2v-2h2v2zm0-4h-2V8h2v6zm-1-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
</svg>
</div>
<?php
}
}
?>


</div>

<div class="favorite_as83 scale_info">
<div class="main_favolist">
<?php
$fae = mysql_query("SELECT * FROM secde WHERE user_id='$use' AND type='fav_opp' AND session='on'");
while($rae = mysql_fetch_array($fae)){
	$asrafate = $rae['id'];
}
if(empty($asrafate)){
?>
<div class="ofsettings">
<span>لا يوجد حسابات مفضلة لعرضها</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 15h-2v-2h2v2zm0-4h-2V8h2v6zm-1-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
</svg>
</div>
<?php
}else{
$sertiuh = mysql_query("SELECT * FROM favourite WHERE fav_user_id='$use' AND fav_type='user'");
while($erft = mysql_fetch_array($sertiuh)){
$favouserid = $erft['fav_for_id'];
$qrtt = mysql_query("SELECT * FROM users WHERE id='$favouserid'");
while($bnom = mysql_fetch_array($qrtt)){
?>
<div class="filut_32">
<img src="../upload/images/low/<?php echo $bnom['pro_img']; ?>" id="img_filut_32" />
<a href="../<?php echo $bnom['id']; ?>" target="_blank" <?php if($bnom['c_check'] == "true"){echo 'class="haider_abadol"';}else {}?>>
<?php
if($bnom['c_check'] == "true"){
	echo '<img id="checktrue_32" src="../img/icons/checkbg.png" />';
	$vireoti = 'class="aslerop_32"';
}
?>
<h3 <?php echo $vireoti; ?>>
<?php echo $bnom['name']; ?>
</h3>
</a>
<p>
<?php 
if(!empty($bnom['user_name'])){
echo "@".$bnom['user_name'].""; 
}
?>
</p>
<div class="foll_filut_32">
<?php

$userid_favo = $bnom['id'];
$queryfollow_favo = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$userid_favo'");
while($fetfol = mysql_fetch_array($queryfollow_favo)){
	$emptyfol_favo = $fetfol['following'];
}
if($emptyfol_favo !== $userid_favo){
	$follow_favo = "false";
}else {
if($emptyfol_favo == $userid_favo){
	$follow_favo = "true";
}
}

if($id == $userid_favo){
	$disabled_favo = "disabled";
}else {
	$disabled_favo = "";
}

?>
<?php 
if($follow_favo == "false"){
    $butpo_favo = "butpo_32";
	$datatype_favo = "off";
}else {
	$butpo_favo = "butpo_33";
	$datatype_favo = "on";
}
?>

<button type="button" id="qwe<?php echo $bnom['id']; ?>" <?php echo $disabled_favo; ?> data-type="<?php echo $datatype_favo; ?>" data-id="<?php echo $userid_favo; ?>" class="<?php echo $butpo_favo; ?> butfol23">
<?php 

if($follow_favo == "false"){
?>
<svg viewBox="0 0 24 24" id="foll_svg32" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
</svg>
<?php
}else{
if($follow_favo == "true"){

$sertw = mysql_query("SELECT * FROM follow WHERE follow='$id' AND following='$userid_favo' AND follow_type='req' AND follow_active='false'");
while($retio = mysql_fetch_array($sertw)){
	$ewqop = $retio['id'];
}
if(!empty($ewqop)){
?>
<svg viewBox="0 0 24 24" class="requestedsvg_table" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
<?php
}else {
?>
<svg class="truefol_like" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
</svg>
<svg viewBox="0 0 24 24" class="folfol_like" class="hide-folsvg" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<?php
}
}
}
?>
</button>
<script>
$(document).ready(function(){
$("#qwe<?php echo $bnom['id']; ?>").click(function(){
	$(this).sendFollow();
});
$("#qwe<?php echo $bnom['id']; ?>").mouseFollow();
});
</script>
</div>
</div>
<?php
$vireoti = '';
$eetyuio = "true";
}
}

if($eetyuio !== "true"){
?>
<div class="ofsettings">
<span>لا يوجد حسابات مفضلة لعرضها</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 15h-2v-2h2v2zm0-4h-2V8h2v6zm-1-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
</svg>
</div>
<?php
}
}
?>

</div>
</div>

<div class="antalic_as83 scale_info" style="transform: scale(1)">
<div class="stars_get_all">
<div class="question"><h3>ما هو تقييمك لهذا الحساب</h3></div>
<div class="stars_all_erto">

<span id="stars1">سيئ</span>
<svg viewBox="0 0 24 24" id="star1" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span id="stars2">مقبول</span>
<svg viewBox="0 0 24 24" id="star2" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span id="stars3">جيد</span>
<svg viewBox="0 0 24 24" id="star3" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span id="stars4">جيد جدا</span>
<svg viewBox="0 0 24 24" id="star4" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<span id="stars5">ممتاز</span>
<svg viewBox="0 0 24 24" id="star5" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<script>
$(document).ready(function(){
<?php

	$querydre = mysql_query("SELECT * FROM antily WHERE to_id='$use' AND from_id='$id' AND type='stars'");
	while($feto = mysql_fetch_array($querydre)){
		$fetzid = $feto['id'];
		$fetypeoin = $feto['type_main'];
	}
		if($fetypeoin == "five"){
			echo '
			$(".stars_all_erto svg").addClass("staract");
			';
		}else if($fetypeoin == "four"){
			echo '
			$("#star1").removeClass("staract");
	        $("#star2,#star3,#star4,#star5").addClass("staract");
			';
		}else if($fetypeoin == "three"){
			echo '
			$("#star2,#star1").removeClass("staract");
	        $("#star3,#star4,#star5").addClass("staract");
			';
		}else if($fetypeoin == "two"){
			echo '
			$("#star3,#star2,#star1").removeClass("staract");
	         $("#star4,#star5").addClass("staract");
			';
		}else if($fetypeoin == "one"){
			echo '
			$("#star4,#star3,#star2,#star1").removeClass("staract");
	        $("#star5").addClass("staract");
			';
		}
?>
});
</script>

<script>

$(document).ready(function(){
	$("#star1").mouseenter(function(){
		$("#stars5").fadeIn(100);
	});
	$("#star1").mouseleave(function(){
		$("#stars5").fadeOut(100);
	});
	// star 2
	$("#star2").mouseenter(function(){
		$("#stars4").fadeIn(100);
	});
	$("#star2").mouseleave(function(){
		$("#stars4").fadeOut(100);
	});
	// star 3
	$("#star3").mouseenter(function(){
		$("#stars3").fadeIn(100);
	});
	$("#star3").mouseleave(function(){
		$("#stars3").fadeOut(100);
	});
	// star 4
	$("#star4").mouseenter(function(){
		$("#stars2").fadeIn(100);
	});
	$("#star4").mouseleave(function(){
		$("#stars2").fadeOut(100);
	});
	//star 1
	$("#star5").mouseenter(function(){
		$("#stars1").fadeIn(100);
	});
	$("#star5").mouseleave(function(){
		$("#stars1").fadeOut(100);
	});
});



$(document).ready(function(){
$("#star1").click(function(){
	$(".stars_all_erto svg").addClass("staract");
});
$("#star2").click(function(){
	$("#star1").removeClass("staract");
	$("#star2,#star3,#star4,#star5").addClass("staract");
});
$("#star3").click(function(){
	$("#star2,#star1").removeClass("staract");
	$("#star3,#star4,#star5").addClass("staract");
});
$("#star4").click(function(){
	$("#star3,#star2,#star1").removeClass("staract");
	$("#star4,#star5").addClass("staract");
});
$("#star5").click(function(){
	$("#star4,#star3,#star2,#star1").removeClass("staract");
	$("#star5").addClass("staract");
});
});




</script>

<?php  

	$selalls = mysql_query("SELECT COUNT(id) FROM antily WHERE to_id='$use' AND type='stars'");
	$allstrs = mysql_result($selalls,0);

?>

<div class="all_taquemat">
<?php
	$selfive = mysql_query("SELECT COUNT(id) FROM antily WHERE to_id='$use' AND type='stars' AND type_main='five'");
	$fivestr = mysql_result($selfive,0);

if(isset($selfive)){
$num1 = $fivestr;
$num2 = $allstrs;
$percentage = (($num1 / $num2) * 100);
if($percentage > 100){
	$meawea = 100;
}else {
	$meawea = "".substr($percentage,0,4)."%";
}
}
?>
<div class="this-firest">
<div class="first-progers"><div class="first_bar" style="width: <?php echo $meawea; ?>"><p><?php echo $fivestr; ?></p></div></div>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<?php
	$selfour = mysql_query("SELECT COUNT(id) FROM antily WHERE to_id='$use' AND type='stars' AND type_main='four'");
	$fourstr = mysql_result($selfour,0);

if(isset($fourstr)){
$num4 = $fourstr;
$num5 = $allstrs;
$percentage2 = (($num4 / $num5) * 100);
if($percentage2 > 100){
	$meawea2 = 100;
}else {
	$meawea2 = "".substr($percentage2,0,4)."%";
}
}
?>
<div class="this-second">
<div class="second-progers"><div class="second_bar" style="width: <?php echo $meawea2; ?>"><p><?php echo $fourstr; ?></p></div></div>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<?php
	$selthre = mysql_query("SELECT COUNT(id) FROM antily WHERE to_id='$use' AND type='stars' AND type_main='three'");
	$threstr = mysql_result($selthre,0);

if(isset($threstr)){
$num6 = $threstr;
$num7 = $allstrs;
$percentage3 = (($num6 / $num7) * 100);
if($percentage3 > 100){
	$meawea3 = 100;
}else {
	$meawea3 = "".substr($percentage3,0,4)."%";
}
}
?>
<div class="this-thired">
<div class="thired-progers"><div class="thired_bar" style="width: <?php echo $meawea3; ?>"><p><?php echo $threstr; ?></p></div></div>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<?php
	$seltwo = mysql_query("SELECT COUNT(id) FROM antily WHERE to_id='$use' AND type='stars' AND type_main='two'");
	$twostr = mysql_result($seltwo,0);
	
if(isset($twostr)){
$num8 = $twostr;
$num9 = $allstrs;
$percentage4 = (($num8 / $num9) * 100);
if($percentage4 > 100){
	$meawea4 = 100;
}else {
	$meawea4 = "".substr($percentage4,0,4)."%";
}
}
?>
<div class="this-foued">
<div class="foued-progers"><div class="foued_bar" style="width: <?php echo $meawea4; ?>"><p><?php echo $twostr; ?></p></div></div>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<?php
	$selone = mysql_query("SELECT COUNT(id) FROM antily WHERE to_id='$use' AND type='stars' AND type_main='one'");
	$onestr = mysql_result($selone,0);

if(isset($onestr)){
$num10 = $onestr;
$num11 = $allstrs;
$percentage5 = (($num10 / $num11) * 100);
if($percentage5 > 100){
	$meawea5 = 100;
}else {
	$meawea5 = "".substr($percentage5,0,4)."%";
}
}
?>
<div class="this-fived">
<div class="fived-progers"><div class="fived_bar" style="width: <?php echo $meawea5; ?>"><p><?php echo $onestr; ?></p></div></div>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>



</div>

<div class="final_rrtaquerm">
<div class="border_class55">
<p>10</p>
<div class="center_this55">
<div class="text_border55">مليون</div>
</div>
</div>
<div class="taquemat_count55">
<div class="insset_this55">4.6</div>
<div class="holagoyn1"></div>
<div class="holagoyn2"></div>
<div class="holagoyn3"></div>


</div>
</div>

<script>
$(document).ready(function(){
$("#star5").click(function(){
	$.post("more.php",{substarone: "submit"});
});
$("#star4").click(function(){
	$.post("more.php",{substartwo: "submit"});
});
$("#star3").click(function(){
	$.post("more.php",{substarthr: "submit"});
});
$("#star2").click(function(){
	$.post("more.php",{substarfor: "submit"});
});
$("#star1").click(function(){
	$.post("more.php",{substarfiv: "submit"});
});
});

$(".all_taquemat div div div").click(function(){
	$(this).find("p").fadeToggle(100);
});
</script>
</div>
</div>
<div class="settings_as83 scale_info">
<?php

if($info['id'] == $use){

?>


<div class="setaccas83">
<span>عرض الحسابات ذات الصلة</span>
<?php

$hh = mysql_query("SELECT * FROM secde WHERE user_id='$use' AND type='veiw_asac' AND session='on'");
while($qn = mysql_fetch_array($hh)){
	$asdwqegt = $qn['id'];
}
if(!empty($asdwqegt)){
	$chewwu = "checked";
}
?>
<input type="checkbox" class="check_83" <?php echo $chewwu; ?> id="check_as83" />
</div>

<div class="setfa83">
<span>عرض الحسابات المميزة</span>
<?php

$fa = mysql_query("SELECT * FROM secde WHERE user_id='$use' AND type='fav_opp' AND session='on'");
while($qf = mysql_fetch_array($fa)){
	$qqqqq = $qf['id'];
}
if(!empty($qqqqq)){
	$aaas = "checked";
}
?>
<input type="checkbox" class="check_83" <?php echo $aaas; ?> id="check_fa83" />
</div>


<div class="foling83">
<span>عرض الاشخاص المتابِعون</span>
<?php

$fae = mysql_query("SELECT * FROM secde WHERE user_id='$use' AND type='veiw_foli' AND session='on'");
while($qfe = mysql_fetch_array($fae)){
	$qqqqqe = $qfe['id'];
}
if(!empty($qqqqqe)){
	$eees = "checked";
}
?>
<input type="checkbox" <?php echo $eees; ?> class="check_83" id="check_folin83" />
</div>


<div class="fol83">
<span>عرض الاشخاص المتابَعون</span>
<?php

$faa = mysql_query("SELECT * FROM secde WHERE user_id='$use' AND type='veiw_folo' AND session='on'");
while($qfa = mysql_fetch_array($faa)){
	$qqqqqa = $qfa['id'];
}
if(!empty($qqqqqa)){
	$fffs = "checked";
}
?>
<input type="checkbox" <?php echo $fffs; ?> class="check_83" id="check_fol83" />
</div>

<div class="info83">
<span>قائمة معلوماتك المختصرة</span>
<button class="edit_infocolumn">تعديل</button>
</div>

<div class="info_45">
<span>تغيير طبقات عرض الصفحة</span>
<button class="edit_infocolumn">تعديل</button>
</div>

<?php

}

?>

<script>

$(document).ready(function(){
	$("#ass_658_svg").click(function(){
		$(".favorite_as83,.antalic_as83,.settings_as83").css('transform','scale(0)');
	    setTimeout(function(){
		$(".account_as83").css('transform','scale(1)');
	    },300);
	});
	$("#set878_svg").click(function(){
		$(".favorite_as83,.antalic_as83,.account_as83").css('transform','scale(0)');
	    setTimeout(function(){
		$(".settings_as83").css('transform','scale(1)');
	    },300);
	});
	$("#star_545").click(function(){
		$(".settings_as83,.antalic_as83,.account_as83").css('transform','scale(0)');
	    setTimeout(function(){
		$(".favorite_as83").css('transform','scale(1)');
	    },300);
	});
	$("#timeline_svg").click(function(){
		$(".settings_as83,.favorite_as83,.account_as83").css('transform','scale(0)');
	    setTimeout(function(){
		$(".antalic_as83").css('transform','scale(1)');
	    },300);
	});
});





		
</script>

</div>


</div>

</div>
<div class="left_8756_pro">
<div class="inset_leftmain">
<div class="top_profiledes_about">
<span><?php echo $about; ?></span>
</div>
<div class="location_main_7878">
</div>
<script>
$.get("../ajax-php/href-location.php",{country_user: "submit",getid: "<?php echo $use; ?>"},function(e){$(".location_main_7878").html(e)});
</script>
<?php
if(!empty($work)){
?>
<div class="work_viewmain">
<span>يعمل لدي : <a href="#"><?php echo $work ?></a></span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path>
</svg>
</div>
<?php
}else {}
?>
<div class="account_makinge_date">
<span>تاريخ الانضمام : <a>23 يوليو , (2016)</a></span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
</svg>
</div>
<?php
if(!empty($social)){
?>
<div class="social_viewmain">
<div class="social_before_offset">
<div class="social_before_inset">
<span><?php echo $social; ?></span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path>
</svg>
</div>
</div>
</div>
<?php
}else {}
?>
<div class="images_main_view">
<div class="scroll_image_4712">
<div class="inset_foreachimage_main">
<?php
$queryforeach = mysql_query("SELECT * FROM posts WHERE user_id='$use' AND post_img!=''");
while($loopimg = mysql_fetch_array($queryforeach)){
if($loopimg['type_all'] == "procover"){
echo '<div class="hiden_4712"><img src="../upload/covers/sml/'.$loopimg['post_img'].'" /></div>';
}else {
echo '<div class="hiden_4712"><img src="../upload/posts/images/sml/'.$loopimg['post_img'].'" /></div>';
}
}
?>
</div>
</div>
</div>
</div>
<div class="lefteditseesion_main">
<div class="fullscreen" id="fulleft_editools"></div>
<div class="whitedivsessionn_left"></div>
</div>
<div class="footer_main_inset">
<div class="top_footer_main">
<div class="first_backage_5055">
<a href="#">مركز المساعدة</a>
<a href="#">سياسة الخصوصية</a>
</div>
<div class="secondbackage_5055">
<a href="#">اتفاقية الاستخدام</a>
<a href="#">المطورون</a>
<a href="#">عن الموقع</a>
</div>
</div>
<!--
<div class="language_select_footer">
<ul>
<li><a href="#"></a>العربية</li>
<li><a href="#"></a>English (US)</li>
<li><a href="#"></a>Français (France)</li>
<li><a href="#"></a>Español</li>
<li><a href="#"></a>Türkçe</li>
<li><a href="#"></a>فارسی‏</li>
<li class="mor_languageslsct"></li>
</ul>
</div>
-->
<div class="bottom_footer_5055">
<div class="text_main_all"><span>© 2017 | CENells . All Rights Reserved</span></div>
</div>
</div>
</div>
</div>
<div class="centercolumain">
<?php
include "../body-html/posts-field.php";
?>
<div class="main_posts">
<div class="inset_poats"></div>
<div class="loading_poats">
<div class="ce-loaging-posts">
<div class="circle-posts"></div>
<div class="circle-small-posts"></div>
<div class="circle-big-posts"></div>
<div class="circle-inner-inner-posts"></div>
<div class="circle-inner-posts"></div>
</div>
</div>
</div>
<input type="hidden" id="postoffsetval" value="0"/>
<script>
$(document).ready(function(){
if($("body").attr("data-first") == "false"){
$.ajax({
	cache: false,
	type: "GET",
	url: "posts.php",
    data: {
		'offset': 0,
		'limit': 4
	},
	success: function(data){
		$(".inset_poats").html(data);
		var thsval = $("#postoffsetval").val();
		var loop = 4;
		var val = +loop + +thsval;
		$("#postoffsetval").val(val);
		$("body").attr("data-get","true");
		scrolldo();
		$("body").attr("data-first","true");
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}else {}
function scrolldo(){
$(window).scroll(function(){
if($("body").attr("data-get") == "true"){
if($(window).scrollTop() + $(window).height() == $(document).height()) {
var offset = $("#postoffsetval").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "posts.php",
    data: {
		'offset': offset,
		'limit': 4
	},
	success: function(data){
		$(".inset_poats").append(data);
		var scrol = $("#postoffsetval").val();
		var voop = 4;
		var gal = +voop + +scrol;
		$("#postoffsetval").val(gal);
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}else {}
}else {}
});
}
});
</script>
</div>
<div class="posteditoolsmain">
<?php

include "../body-html/edit-tools.php";

?>
</div>
<?php
}
?>
</div>
</div>
</div>
<div class="alertvesion_451">
<div class="fullscreen" id="mainalertnouse"></div>
<div class="inajax_moretaim_454">
<div class="container">
<div class="alert_df">
<span>اذا قمت بالغاء تفعيل ظهور قائمة الحسابات الموصي بها فان هذا يؤدي من حرمان حسابك من الحصول علي توصيات علي مستوي الحسابات الاخري</span>
<button id="yes_df" type="button">موافق</button>
<button id="no_df" type="button">الغاء</button>
</div>
</div>
</div>
</div>
<script>
$(".follow button").click(function(){
$(this).attr("disabled","true");
var doing = $(this).attr("doing");
var user_id = $("body").attr("data-id");
if(doing == "follow"){
    $.post("../ajax-php/follow.php", {follow: "submit",user_id: user_id} ,function(e){ $(".scripts").html(e)});
}else {
if(doing == "unfollow"){
	$.post("../ajax-php/follow.php", {unfollow: "submit",user_id: user_id} ,function(e){ $(".scripts").html(e)});
}else {}
}
});
$(document).ready(function(){
$("#show-infocolsvg").click(function(){
	$(".all-info-columns").fadeIn(0,function(){
		$(".info-main1,.info-main2,.info-main3").slideToggle();
	});
});
});
$(document).ready(function(){
function fixed(){
if($(window).scrollTop() >= 460){
if($("body").attr("data-fixed") !== "true"){
	$(".allpagetopmain").addClass("fixedpagetop");
	$(".left-main").addClass("fixedleftmain");
	$(".towcolumnidval").addClass("fixedtopcolumn");
	$(".shadow-cover").addClass("fixedtopshadow");
	$(".body-pro,.button-soc").addClass("fixedrefstop");
	$(".menu-href").addClass("fixedmenuhref");
	$(".hidden_info_45,.scroll_show_pinfo").fadeIn();
	setTimeout(function(){
		$(".scrolit_follow_45").fadeIn();
	},250);
    $("body").attr("data-fixed","true");
}else {}
}else{
if($("body").attr("data-fixed") !== "false"){
	$(".allpagetopmain").removeClass("fixedpagetop");
	$(".left-main").removeClass("fixedleftmain");
	$(".towcolumnidval").removeClass("fixedtopcolumn");
	$(".body-pro,.button-soc").removeClass("fixedrefstop");
	$(".shadow-cover").removeClass("fixedtopshadow");
	$(".menu-href").removeClass("fixedmenuhref");
	$(".hidden_info_45,.scroll_show_pinfo").fadeOut();
	$(".scrolit_follow_45").fadeOut(100);
    $("body").attr("data-fixed","false");
}else {}	
}
}
fixed();
$(window).scroll(function(){
	fixed();
});
});


$(".cfav_546").click(function(){
$(this).fadeOut(50,function(){
$(".rfav_546").fadeIn(250);
$.post("more.php",{removfav: "submit"});
});
});
$(".rfav_546").click(function(){
$(this).fadeOut(50,function(){
$(".cfav_546").fadeIn(250);
$.post("more.php",{favorite: "submit"});
});
});

$("#check_fa83").click(function(){
var ertw = document.getElementById('check_fa83');
if(ertw.checked) {
        $.post("../ajax-php/accview-control.php", {subonfaview: "submit"});
}else{
        $.post("../ajax-php/accview-control.php", {suboffaview: "submit"});
}
});
$("#check_folin83").click(function(){
var ertw = document.getElementById('check_folin83');
if(ertw.checked) {
    $.post("../ajax-php/accview-control.php", {setfolingview: "submit"});
}else{
    $.post("../ajax-php/accview-control.php", {subdelfoli: "submit"});
}
});
$("#check_fol83").click(function(){
var ertw = document.getElementById('check_fol83');
if(ertw.checked) {
    $.post("../ajax-php/accview-control.php", {setfolview: "submit"});
}else{
    $.post("../ajax-php/accview-control.php", {subdelfoler: "submit"});
}
});

$("#check_as83").click(function(){
if(document.getElementById("check_as83").checked){
$.post("../ajax-php/accview-control.php", {subaserli: "submit"});
}else {
$("#mainalertnouse").fadeIn(100,function(){
$(".inajax_moretaim_454").fadeIn(100);
});
}
});
$("#yes_df").click(function(){
$.post("../ajax-php/accview-control.php", {suboferli: "submit"});
$(".inajax_moretaim_454").fadeOut(100,function(){
$("#mainalertnouse").fadeOut(100);
document.getElementById("check_as83").checked = false;
});
});

$("#no_df").click(function(){
$.post("../ajax-php/accview-control.php", {subaserli: "submit"});
$(".inajax_moretaim_454").fadeOut(100,function(){
$("#mainalertnouse").fadeOut(100);
document.getElementById("check_as83").checked = true;
});
});
</script>
<script>
$(".a_posts_view").click(function(){
	if($("body").attr("data-info") == "true"){
	$(".proinfo_pagemain_all,.following_return_all,.follow_return_all,.loadmore_follow").fadeOut(0);
		$("html,body").removeAttr("style");
		$(".displaypage_mainall,.scrolling_main,.loading_follow").fadeIn(250);
		setTimeout(function(){
		$(".body_afterl_878,.body_afterl_404").empty();
		$("body").attr("data-info","false");
		$("body").attr("data-getinfo","true");
		$("body").attr("data-getfolloers","true");
		$("body").attr("data-getfollowing","true");
		$("body").attr("data-folter","false");
		$("body").attr("data-floing","false");
        $.ajax({
	    cache: false,
	    type: "GET",
	    url: "posts.php",
        data: {
		    'offset': 0,
		    'limit': 4
	    },
	    success: function(data){
			$("#postoffsetval").val("4");
		    $(".inset_poats").html(data);
			$("body").attr("data-get","true");
	    },
        error: function(){
		    alert("خطأ - يرجي المحاولة مرة اخري");
	    }
        });
		},250);
	}else {}
});
$(".a_info_view").click(function(){
	$("body").attr("data-get","false");
	if($("body").attr("data-getinfo") !== "false"){
	$(".displaypage_mainall,.scrolling_main,.following_return_all,.follow_return_all,.loadmore_follow").fadeOut(0);
		$("html,body").css('overflow','hidden');
		$(window).scrollTop(460);
		$(".proinfo_pagemain_all,.loading_follow").fadeIn(250);
		setTimeout(function(){
		$(".inset_poats,.body_afterl_878,.body_afterl_404").empty();
		$("body").attr("data-getfolloers","true");
		$("body").attr("data-getfollowing","true");
		$("body").attr("data-info","true");
		$("body").attr("data-folter","false");
		$("body").attr("data-floing","false");
		$(".loading_poats").removeClass("endqueryjax");
		$("body").attr("data-getinfo","false");
        if($(".genral_informaion_view").length == 0){
        $.get("about.php",{getinfo: "submit"},function(e){$(".export_infoselect_ciew").append(e)});
        }else {}
		},250);
	}else {}
});
$.fn.addFollowers = function(){
if($("body").attr("data-folter") == "true"){
var offset = $("#followoffsetval").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "followers.php",
    data: {
		'followers': 'submit',
		'offset': offset,
		'limit': 6
	},
	success: function(data){
		$(".ofset_followers_4521").append(data);
		var scrol = $("#followoffsetval").val();
		var voop = 6;
		var gal = +voop + +scrol;
		$("#followoffsetval").val(gal);
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}else {}
}
$(".a_get_fol").click(function(){
	$("body").attr("data-get","false");
	if($("body").attr("data-getfolloers") !== "false"){
	$(".displaypage_mainall,.scrolling_main,.following_return_all,.proinfo_pagemain_all,.loadmore_follow").fadeOut(0)
		$("html,body").css('overflow','hidden');
		$(window).scrollTop(460);
		$(".follow_return_all,.loading_follow").fadeIn(250);
		setTimeout(function(){
		$(".inset_poats,.body_afterl_404").empty();
		$("body").attr("data-getinfo","true");
		$("body").attr("data-getfollowing","true");
		$("body").attr("data-info","true");
		$("body").attr("data-floing","false");
		$(".loading_poats").removeClass("endqueryjax");
		$("body").attr("data-getfolloers","false");
        $.ajax({
	    cache: false,
	    type: "GET",
	    url: "followers.php",
        data: {
		    'followers': 'submit',
		    'offset': 0,
		    'limit': 6
	    },
	    success: function(data){
			$("#followoffsetval").val("6");
		    $(".body_afterl_878").html(data);
			$(".loading_follow").fadeOut(0,function(){
				$(".body_afterl_878").fadeIn(250);
				$("body").attr("data-folter","true");
				$("html,body").removeAttr("style");
			});
	    },
        error: function(){
		    alert("خطأ - يرجي المحاولة مرة اخري");
	    }
        });
		},250);
	}else {}
});

$.fn.addFollowing = function(){
if($("body").attr("data-floing") == "true"){
var offset = $("#followingoftval").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "following.php",
    data: {
		'following': 'submit',
		'offset': offset,
		'limit': 6
	},
	success: function(data){
		$(".ofset_followeing_4521").append(data);
		var scrol = $("#followingoftval").val();
		var voop = 6;
		var gal = +voop + +scrol;
		$("#followingoftval").val(gal);
		},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}else {}
}
$(".a_fet_fotio").click(function(){
	$("body").attr("data-get","false");
	if($("body").attr("data-getfollowing") !== "false"){
	$(".displaypage_mainall,.scrolling_main,.follow_return_all,.proinfo_pagemain_all,.loadmore_follow").fadeOut(0);
		$("html,body").css('overflow','hidden');
		$(window).scrollTop(460);
		$("body").attr("data-info","true");
		$(".following_return_all,.loading_follow").fadeIn(250);
		setTimeout(function(){
		$(".inset_poats,.body_afterl_878").empty();
		$("body").attr("data-getinfo","true");
		$("body").attr("data-getfolloers","true");
		$("body").attr("data-info","true");
		$("body").attr("data-folter","false");
		$(".loading_poats").removeClass("endqueryjax");
		$("body").attr("data-getfollowing","false");
        $.ajax({
	    cache: false,
	    type: "GET",
	    url: "following.php",
        data: {
		    'following': 'submit',
		    'offset': 0,
		    'limit': 6
	    },
	    success: function(data){
			$("#followingoftval").val("6");
		    $(".body_afterl_404").html(data);
			$(".loading_follow").fadeOut(0,function(){
				$(".body_afterl_404").fadeIn(250);
				$("body").attr("data-floing","true");
				$("html,body").removeAttr("style");
			});
	    },
        error: function(){
		    alert("خطأ - يرجي المحاولة مرة اخري");
	    }
        });
		},250);
	}else {}
});
$(".loadfollowersbtn").click(function(){
	$(this).addFollowers();
});
$(".loadfollowingbtn").click(function(){
	$(this).addFollowing();
});
</script>
<script>
$("title").text("<?php echo $usern." (@".$user_name.")"; ?>");
</script>
<?php
include "../body-html/ajax-php.php";
?>
<div class="scripts"></div>
</body>
</html>
<?php
}
?>