<?php

include("../connectdb/index.php");

?>

<?php
if(isset($_GET['normal'])){

$sexcenolsd = mysql_query("SELECT id FROM posts WHERE user_id='$id' ORDER BY id DESC LIMIT 1");
while($vqop = mysql_fetch_array($sexcenolsd)){
$paramater = $vqop['id'];
}
$selectlockq = mysql_query("SELECT * FROM posts_query WHERE user_id='$id' AND session='lockview' AND post_id='$paramater'");
while($zexl = mysql_fetch_array($selectlockq)){
	$locktypeall = $zexl['type'];
}

?>

<div class="append_vortextlock">
<?php
if($locktypeall == "v4" || $locktypeall == "v5"){
echo '<div class="insetvortex_podv" style="display: flex">';
$selectlockq = mysql_query("SELECT * FROM posts_query WHERE user_id='$id' AND to_id!='' AND session='lockview' AND post_id='$paramater' AND type_all='custom'");
while($zexl = mysql_fetch_array($selectlockq)){
$zexluserid = $zexl['to_id'];
$fetchbnioi = mysql_query("SELECT id,name,pro_img FROM users WHERE id='$zexluserid' LIMIT 1");
while($coszel = mysql_fetch_array($fetchbnioi)){
echo '<div title="'.$coszel['name'].'">
<i class="fa fa-times-circle" aria-hidden="true"></i>
<img src="../upload/images/low/'.$coszel['pro_img'].'" class="vortextimg_lockv" data-id="'.$coszel['id'].'" />
</div>';
}
}
echo '</div>';
	
}else {}
?>
</div>
<div class="menudescrip_lockset">
<span>تعديل خصوصية التدوينات</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
</svg>
</div>
<div class="insetlock_vorptore">
<div class="whosee_tahatdes">
<span>من يستطيع رؤية التدوينة</span>
</div>
<div class="selectmenu_vortex">
<li data-view="<?php if(empty($locktypeall)){echo 'v1';}else {echo $locktypeall;} ?>">
<svg viewBox="0 0 24 24" class="thatvega_morelock" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<?php
if($locktypeall == "v1"){
echo '
<p>العامة</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
</svg>
';
}else if($locktypeall == "v2"){
echo '
<p>المتابِعون</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"></path>
</svg>
';
}else if($locktypeall == "v3"){
echo '
<p>المفضلة</p>
<svg viewBox="0 0 24 24" class="scgicon_01510" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
';
}else if($locktypeall == "v4"){
echo '
<p>اشخاص محددون</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<script>
$(".selectmenu_vortex").css(\'width\',\'200px\');
</script>
';
}else if($locktypeall == "v5"){
echo '
<p>تخصيص استثناء</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
<script>
$(".selectmenu_vortex").css(\'width\',\'200px\');
</script>
';
}else {
echo '
<p>العامة</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
</svg>
';
}
?>
</li>
</div>
<div class="offsetm_postslock_view">
<div class="menuvok_postslock_view">
<li class="publick_viewmain" data-view="v1" data-text="اي شخص يمكنه رؤية هذه التدوينة">
<svg class="iconmenu_lockview" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path>
</svg>
<span>العامة</span>
</li>
<li class="following_postlockli" data-view="v2" data-text="المتابِعين فقط من يمكنهم رؤية هذه التدوينة">
<svg class="lockview_postfollow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"></path>
</svg>
<span>المتابِعون</span>
</li>
<li class="favorlock_postilis" data-view="v3" data-text="تحديد الاحسابات المفضلة فقط لرؤية هذه التدوينة">
<svg viewBox="0 0 24 24" class="favolock_postview" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
<span>المفضلة</span>
</li>
<li class="personspost_whereslock" data-view="v4" data-text="تحديد بعض الاشخاص فقط لرؤية هذه التدوينة">
<svg class="mohadada_personmav" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span>اشخاص محددون</span>
</li>
<li class="onlywithout_lockpost" data-view="v5" data-text="استثناء اشخاص من رؤية هذه التدوينة">
<svg class="mokhassalock_postview" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
<span>تخصيص استثناء</span>
</li>
</div>
</div>
<div class="apeend_lockpost_viewnasd"></div>
<div class="porhguh_veoplqwe">
<p>اي شخص يمكنه رؤية هذه التدوينة</p>
</div>
</div>
<div class="or_485412_ar" style="display: none!important"></div>
<script>
var text = $(".menuvok_postslock_view li[data-view='<?php echo $locktypeall; ?>']").attr("data-text");
$(".porhguh_veoplqwe p").text(text);
<?php
if($locktypeall == "v4"){
?>
var vio = '<div class="seleclockv_40125">' +
'<input type="text" class="inputview_lockmbder" data-put="m7" placeholder="حدد الذي تريد اظهار له هذه التدوينة" />' +
'<div class="ajax_lockset_viewpost" id="ajax_lockset_pers"></div>' +
'</div>';
<?php
}else {
if($locktypeall == "v5"){
?>	
var vio = '<div class="seleclockv_40125">' +
'<input type="text" class="inputview_lockmbder" data-put="m5" placeholder="حدد الذي تريد منعه من رؤية هذه التدوينة" />' +
'<div class="ajax_lockset_viewpost" id="ajax_lockset_mohd"></div>' +
'</div>';
<?php
}else {}
}
if($locktypeall == "v4" || $locktypeall == "v5"){
?>
$(".selectmenu_vortex").css('width','200px');
$(".whitelock_postset").css('height','235px');
$(".apeend_lockpost_viewnasd").html(vio);
$(".apeend_lockpost_viewnasd").fadeIn(100);
$(".inputview_lockmbder").keyup(function(){
var data = $(this).attr("data-put");
var text = $(this).val();
if($(this).val() == ""){
$(".ajax_lockset_viewpost").fadeOut(0);
}else {
$(".ajax_lockset_viewpost").fadeIn(0);
$.get("../ajax-php/selctlock.php",{getuser: "submit",text: text,data: data},function(e){$(".ajax_lockset_viewpost").html(e)});
}
});
$(".insetvortex_podv div i").click(function(){
	$(this).closest("div").remove();
	if($(".insetvortex_podv div").length == 0){
		$(".insetvortex_podv").fadeOut(0);
	}else {
		$(".insetvortex_podv").css('display','flex');
	}
});
<?php
}else {}
?>
</script>
<script>
$(document).ready(function(){
	$(".menuvok_postslock_view li").click(function(){
		if($(this).attr("class") == "personspost_whereslock"){
			var cio = '<div class="seleclockv_40125">' +
			'<input type="text" class="inputview_lockmbder" data-put="m7" placeholder="حدد الذي تريد اظهار له هذه التدوينة" />' +
			'<div class="ajax_lockset_viewpost" id="ajax_lockset_pers"></div>' +
			'</div>';
		}else if($(this).attr("class") == "onlywithout_lockpost"){
			var cio = '<div class="seleclockv_40125">' +
			'<input type="text" class="inputview_lockmbder" data-put="m5" placeholder="حدد الذي تريد منعه من رؤية هذه التدوينة" />' +
			'<div class="ajax_lockset_viewpost" id="ajax_lockset_mohd"></div>' +
			'</div>';
		}else {}
		if($(this).attr("class") == "personspost_whereslock" || $(this).attr("class") == "onlywithout_lockpost"){
			$(".insetvortex_podv").empty();
			$(".insetvortex_podv").fadeOut(0);
			$(".selectmenu_vortex").css('width','200px');
			$(".whitelock_postset").css('height','235px');
			$(".apeend_lockpost_viewnasd").html(cio);
			$(".apeend_lockpost_viewnasd").fadeIn(100);
			$(".inputview_lockmbder").keyup(function(){
			    var data = $(this).attr("data-put");
				var text = $(this).val();
				if($(this).val() == ""){
				$(".ajax_lockset_viewpost").fadeOut(0);
				}else {
				$(".ajax_lockset_viewpost").fadeIn(0);
				$.get("../ajax-php/selctlock.php",{getuser: "submit",text: text,data: data},function(e){$(".ajax_lockset_viewpost").html(e)});
				}
			});
		}else {
			$(".selectmenu_vortex").css('width','175px');
			$(".apeend_lockpost_viewnasd,.insetvortex_podv").fadeOut(100);
			$(".whitelock_postset").css('height','180px');
		}
		$(".menuvok_postslock_view").fadeOut(0);
		var txt = $(this).attr("data-text");
		var pht = '<p>'+ txt +'</p>';
		$(".porhguh_veoplqwe p").html(pht);
		$(".scgicon_01510,.selectmenu_vortex p").remove();
		var spn = $(this).find("span").text();
		var sht = '<p>'+ spn +'</p>';
		$(".selectmenu_vortex li").append(sht);
		var svg = $(this).find("svg");
		svg.clone().appendTo(".selectmenu_vortex li");
		$(".selectmenu_vortex li svg").each(function(){
			if($(this).attr("class") == "thatvega_morelock"){
			}else {
				$(this).attr("class","scgicon_01510");
			}
		});
		var atr = $(this).attr("data-view");
		$(".selectmenu_vortex li").attr("data-view",atr);
		$(".thatvega_morelock").css('transform','rotate(0deg)');
	});
});
$(function() {
    $(".selectmenu_vortex").each(function() {
        var count = 0;
        $(this).click(function(){
        count++;
        if (count === 1) {
		$(".thatvega_morelock").css('transform','rotate(180deg)');
        }
        else{
		$(".thatvega_morelock").css('transform','rotate(0deg)');
		count = 0;
        }
        });
    });
});
$(document).ready(function(){
$("a.closelockvern").click(function(){
$(".or_485412_ar").empty();
if($(".selectmenu_vortex li").attr("data-view") == "v4" || $(".selectmenu_vortex li").attr("data-view") == "v5"){
$(".insetvortex_podv div").each(function(){
	var img = $(this).find(".vortextimg_lockv").attr("data-id");
	var val = $(".or_485412_ar").text();
	var htm = ""+ img +"-"+ val +"";
	$(".or_485412_ar").text(htm);
});
}else {}
if($(".selectmenu_vortex li").attr("data-view") == "v4" && $(".insetvortex_podv div").length == 0 || $(".selectmenu_vortex li").attr("data-view") == "v5" && $(".insetvortex_podv div").length == 0 ){
$(".apeend_lockpost_viewnasd").empty();
$(".whitelock_postset").css('height','180px');
$(".selectmenu_vortex").css('width','175px');
$(".selectmenu_vortex li").attr("data-view","v1");
var txt = $(".publick_viewmain").attr("data-text");
var pht = '<p>'+ txt +'</p>';
$(".porhguh_veoplqwe p").html(pht);
$(".scgicon_01510,.selectmenu_vortex p").remove();
var spn = $(".publick_viewmain").find("span").text();
var sht = '<p>'+ spn +'</p>';
$(".selectmenu_vortex li").append(sht);
var svg = $(".publick_viewmain").find("svg");
svg.clone().appendTo(".selectmenu_vortex li");
$(".selectmenu_vortex li svg").each(function(){
if($(this).attr("class") == "thatvega_morelock"){
}else {
$(this).attr("class","scgicon_01510");
}
});
}
$(".whitelock_postset").fadeOut(100,function(){
	$("#fullscreenlockset").fadeOut(100);
});
});
$(".selectmenu_vortex").click(function(){
	$(".menuvok_postslock_view").slideToggle(250);
});
});
</script>
<?php
}
?>
<?php
/*
<div class="all_postlock_set">
<div class="fullscreen" id="fullscreenlockset"></div>
<div class="whitelock_postset">
<a class="closelockvern">
<i class="fa fa-times" aria-hidden="true"></i>
</a>
<div class="injaxpostset"></div>
<div class="loadingmin_45754">
<div class="showbox_postlock">
<div class="loader_postlock">
<svg class="circular_postlock" viewBox="25 25 50 50">
<circle class="path_circle_postlock" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
</div>
</div>
<script>
$("#lock-set").click(function(){
	$("#fullscreenlockset").fadeIn(100,function(){
		$(".whitelock_postset").fadeIn(100);
		$(".whitelock_postset").attr("data-get","normal");
		$(".whitelock_postset").getLockit("normal");
	});
});
$.fn.getLockit = function(type){
	if(type == "normal"){
		$.get("../ajax-php/postlock-body.php",{normal: "submit"},function(e){
			$(".injaxpostset").html(e);
			$(".injaxpostset").fadeIn(0);
			$(".injaxpostset").css('transform','scale(1)');
			$(".loadingmin_45754").fadeOut(0);
			$("a.closelockvern").attr("data-click","false");
		});
	}
}
$("a.closelockvern").click(function(){
	if($(this).attr("data-click","true")){
	$(".whitelock_postset").fadeOut(100,function(){
	$("#fullscreenlockset").fadeOut(100);
    });
	}else {}
});
</script>
</div>

*/
?>