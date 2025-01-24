<?php

if($offpostype == "share" && $sahrepostd == $post['id'] && !empty($usershared)){
$postid = $oripostids;
$dataeditpost = "share";
}else {
if(!empty($post['group_share']) && !empty($post['group_admin']) && $offpostype !== "share"){
$dataeditpost = "taged";
}else {
$dataeditpost = "orignal";
}
$postid = $post['id'];
}

$selectemoji = mysql_query("SELECT * FROM emoji WHERE post_id='$postid' AND user_id='$id' AND session='emopost'");
while($emoji = mysql_fetch_array($selectemoji)){
	$emojitype = $emoji['type'];
	$emojiuser = $emoji['post_id'];
}
if(!empty($emojitype) && $emojiuser == $postid){
	$emojimage = '<img src="../img/imogi/'.$emojitype.'.png" class="smlemoji_selected" />';
}else {
	$emojimage = '';
}
$pviewquery = mysql_query("SELECT COUNT(view_id) FROM view WHERE view_post_id='$postid' AND view_type='post'");
$pviewcount = mysql_result($pviewquery,0);
$viewqueryu = mysql_query("SELECT * FROM view WHERE view_post_id='$postid' AND view_user_id='$id' AND view_type='post'");
while($view = mysql_fetch_assoc($viewqueryu)){
	$checkviewm = $view['view_id'];
}


?>

<center>
<div class="post-main-tvi post" data-edit="<?php echo $dataeditpost; ?>" id="<?php echo $postid; ?>" <?php if(empty($checkviewm)){echo 'data-view="false"';}else {echo 'data-view="true"';} ?> username="<?php echo $usern; ?>">
<div class="post-user-infpty">
<img src="../upload/images/low/<?php echo $user_img; ?>" id="user-pot-imico" draggable="false" />
<h4>
<?php
if($check == 'true'){
echo '
<img src="../img/icons/check.png" id="check-postu" draggable="false" />
';
}else {}
?>
<a href="../<?php echo $user_id; ?>" target="_blank">
<?php
echo $user_name;
?>
</a>
</h4>
<span id="date-show-spti"><?php /*echo $postdate;*/ ?>الثلاثاء,الساعة 12:05 مساءً</span>
</div>

<?php
if(!empty($post['group_share']) && !empty($post['group_admin']) && $offpostype !== "share"){
?>
<div class="groupshare_values">
<div class="imagegroup_users">
<?php
$groupall = $post['group_share'];
$explodes = explode('-',$groupall);
foreach($explodes as $exlo){
$sertleng = mysql_query("SELECT COUNT(id) FROM posts WHERE user_id='$exlo' AND type='taged' AND type_all='taged_to' AND tag_id='$postid'");
$countold = mysql_result($sertleng,0);
if($countold > 0){
$foreachuser = mysql_query("SELECT * FROM users WHERE id='$exlo' LIMIT 1");
while($dexs = mysql_fetch_array($foreachuser)){
echo '<a href="../'.$exlo.'" target="_blank"><img src="../upload/images/low/'.$dexs['pro_img'].'" data-id="'.$exlo.'" data-name="'.$dexs['name'].'" class="smlimages_tagedicon" /></a>';
}
}
}
echo '
<script>
$(".post#'.$postid.' .moreh3").css(\'margin-top\',\'80px\');
</script>
';
?>
</div>
</div>
<?php
}else {}

$selsvae = mysql_query("SELECT * FROM saved WHERE post_id='$postid' AND user_id='$id'");
while($fetsav = mysql_fetch_assoc($selsvae)){
	$saveiditm = $fetsav['id'];
}
?>
<div class="post_viewtimes_main">
<span>
<?php 
echo $pviewcount;
?>
<svg class="clicksvg_viewimoji" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<div class="post_stil_loading">
<div class="showbox_postop" style="display: block;">
<div class="loader_postop">
<svg class="circular_postop" viewBox="25 25 50 50">
<circle class="path_circle_postop" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
</div>
<?php
$queryfavo = mysql_query("SELECT id FROM favourite WHERE fav_user_id='$id' AND fav_for_id='$user_id'");
while($fave = mysql_fetch_assoc($queryfavo)){
	$emptyfavor = $fave['id'];
}
if(!empty($emptyfavor)){
?>
<!--<svg viewBox="0 0 24 24" class="favorpost_svgicon" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>-->
<?php
}else {}
if(!empty($saveiditm)){
?>
<!--<svg viewBox="0 0 24 24" class="postsavedit_svgico" xmlns="http://www.w3.org/2000/svg">
<path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
<path d="M0 0h24v24H0z" fill="none"/>
</svg>-->
<?php
}else {}
?>
<?php
if(!empty($post['group_share']) && !empty($post['group_admin']) && $offpostype !== "share"){
?>
<svg class="sharegroup_iconsvg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
</svg>
<?php
}else {}
if($offpostype == "share" && $sahrepostd == $post['id'] && !empty($usershared)){
$queryshve = mysql_query("SELECT name,pro_img FROM users WHERE id='$usershared'");
while($xedr = mysql_fetch_array($queryshve)){
	$shareuseimg = $xedr['pro_img'];
	$shareusenam = $xedr['name'];
	$donesqshare = "true";
}
?>
<svg xmlns="http://www.w3.org/2000/svg" class="reposted_svgval" version="1.0" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M1752 4042 c1 -5 75 -99 163 -210 l160 -201 800 -3 c710 -3 804 -5 835 -19 46 -21 89 -65 111 -114 17 -37 19 -78 19 -592 l0 -553 -315 0 c-173 0 -315 -3 -315 -7 0 -11 836 -1055 844 -1054 8 0 846 1045 846 1055 0 3 -142 6 -315 6 l-315 0 0 534 c0 577 -5 647 -50 763 -67 175 -201 301 -397 376 l-58 22 -1008 3 c-571 1 -1007 -1 -1005 -6z"></path>
<path d="M642 3311 c-232 -291 -422 -531 -422 -535 0 -3 142 -6 315 -6 l315 0 0 -534 c0 -577 5 -647 50 -763 67 -175 201 -301 397 -376 l58 -22 1008 -3 c571 -1 1007 1 1005 6 -1 5 -75 99 -163 210 l-160 201 -800 3 c-710 3 -804 5 -835 19 -46 21 -89 65 -111 114 -17 37 -19 78 -19 593 l0 552 315 0 c173 0 315 3 315 8 0 5 -812 1026 -838 1054 -4 4 -197 -231 -430 -521z"></path>
</g>
</svg>
<img class="imagexdr_vevesmart" src="../upload/images/low/<?php echo $shareuseimg; ?>" />
<?php
}
?>
</span>
<?php
if($offpostype == "share" && $sahrepostd == $post['id'] && !empty($usershared)){
?>
<a href="../posts/?header_type=localPost&local_view=7&userID=<?php echo $usershared; ?>&fromID=<?php echo $user_id; ?>&headerID=<?php echo $postid; ?>">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
</svg>
</a>
<?php
}else {
?>
<a href="../posts/?header_type=localPost&local_view=1&userID=<?php echo $user_id; ?>&headerID=<?php echo $postid; ?>">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
</svg>
</a>
<?php
}
?>
</div>
<?php
if($offpostype == "share" && $sahrepostd == $post['id'] && $donesqshare == "true"){
?>
<div class="absoluteshare_echodived">
<span><?php echo $shareusenam; ?></span>
</div>
<div class="share_echodived">
<?php
if(!empty($postextshr)){
	echo '
	<h5>'.$postextshr.'</h5>
	<script>
	$(".post#'.$postid.' .h3post_alleripo").addClass("withrowvortext");
	</script>
	';
}else {}
?>
</div>
<?php
}
?>
<div class="emothois_postviewr">
<div class="insetviewr_emoji">
<div class="flexviewr_emojiv">
<div><img src="../img/imogi/1.png" /></div>
<div><img src="../img/imogi/3.png" /></div>
<div><img src="../img/imogi/4.png" /></div>
</div>
</div>
</div>
<div class="all_post_alleripo">
<div class="h3post_alleripo">

<?php

if(!empty($breplac)){
		
$strh3 = $ifposte;
echo'<h3 class="moreh3">'.$ifposte.'</h3>';		

}

if(empty($imgv) && empty($vidn) && empty($arrayno) && !empty($breplac)){
$class = "comment-likeh3";
?>
</div>

<div class="edit_textpost_on477">
<div class="edit_menu_477">
<div class="edit_477"><span>تعديل التدوينة</span><img src="../img/picon/edit.png" class="img_477" /></div>
<div class="dele_477"><span>حذف التدوينة</span><img src="../img/picon/delete.png" class="img_477" /></div>
<div class="pers_477"><span>اشارة لاشخاص</span><img src="../img/picon/pin.png" class="img_477" /></div>
<div class="view_477"><span>لقطة شاشة</span><img src="../img/picon/media" class="img_477" /></div>
<div class="save_477" data-type="<?php if(empty($saveiditm)){echo '1';} else {echo '2';} ?>"><?php if(empty($saveiditm)){ ?><img src="../img/picon/save.png" class="img_477" /><span>حفظ التدوينة</span><?php } else { ?><img src="../img/picon/csave.png" class="img_477" /><span>الغاء حفظ التدوينة</span><?php } ?></div>
<div class="lock_477"><span>الاعدادات</span><img src="../img/picon/set.png" class="img_477" /></div>
</div>
</div>


<script>
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .more_post").click(function(){
		$(".post#<?php echo $postid; ?> .edit_menu_477").fadeIn(100);
	});
	$(".post#<?php echo $postid; ?> .save_477").click(function(){
		$(this).bookMarkit("<?php echo $postid; ?>");
	});
});
$(document).mouseup(function (e){
	var container = $(".post#<?php echo $postid; ?> .more_post");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
	$(".post#<?php echo $postid; ?> .edit_menu_477").fadeOut(100);
    }
});
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .edit_477").click(function(){
    $("#posteditidopo").val("<?php echo $postid; ?>");
	hideclickon();
    });
});
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .dele_477").click(function(){
		$(this).deletePost();
	});
});
$(".post#<?php echo $postid; ?> .view_477").click(function(){
$("#screenshotpostid").val("<?php echo $postid; ?>");
screenshot();
});
$(".post#<?php echo $postid; ?> .pers_477").click(function(){
	$(this).vevoTagslol("<?php echo $postid; ?>");
});
$(".post#<?php echo $postid; ?> .lock_477").click(function(){
	$(this).settingsView();
});
</script>





<?php
}else {
$class = "comment-like";
}

?>
</div>


<?php

if(!empty($imgv) && empty($vidn) && empty($arrayno) && empty($audio)){

?>
<div class="img_allpostsoirnm">

<?php

if($type == "procover"){

echo '<div class="image_description_main"><span><a>'.$first_name.'</a> تم تحديث صورة الغلاف من قبل</span></div>';

} else {

if($type == "proimg"){

echo '<div class="image_description_main"><span><a>'.$first_name.'</a> تم تحديث الصورة الشخصية من قبل</span></div>';

}else{}
}
?>
<div class="imgp-mus-div">
<?php
if($imgwidth > 600){
	$fullwidth = 600;
	$fullheight = $imgheight * 600 / $imgwidth;
}else if($imgwidth < 600){
	$fullwidth = 600;
	$fullheight = $imgheight * 600 / $imgwidth;
}else {
	$fullwidth = $imgwidth;
	$fullheight = $imgheight;

}
$smlwidth = $fullwidth + 50;
$smlheighth = $fullheight + 50;
?>

<div class="overflow-loaded" <?php echo 'style="width: '.$fullwidth.'px;height: '.$fullheight.'px;" ' ?>>
<div class="postimg_overflow" <?php echo 'larg-width="'.$imgwidth.'" larg-height="'.$imgheight.'"'; echo 'style="width: '.$fullwidth.'px;height: '.$fullheight.'px;" ' ?>>
<?php
if($type == "procover"){
echo '
<img src="../upload/covers/sml/'.$imgv.'" width="'.$smlwidth.'" height="'.$smlheighth.'" draggable="false" class="sml_'.$postid.' image-blur" data-mini="../upload/covers/mini/'.$imgv.'" data-large="../upload/covers/full/low/'.$imgv.'" id="imgp-mus-img">
';
}else {
echo '
<img src="../upload/posts/images/sml/'.$imgv.'" width="'.$smlwidth.'" height="'.$smlheighth.'" draggable="false" class="sml_'.$postid.' image-blur" data-mini="../upload/posts/images/mini/'.$imgv.'" data-large="../upload/posts/images/full/low/'.$imgv.'" id="imgp-mus-img">
';
}
?>
</div>
</div>

<script>
$(document).ready(function(){
var parentContainer = $('.sml_<?php echo $postid; ?>').closest(".overflow-loaded");
var imageContainer = $('.sml_<?php echo $postid; ?>');
// 2: load large image
if(parentContainer.find(".mirro").length == 0){
var imgLarge = new Image();
imgLarge.src = $('.sml_<?php echo $postid; ?>').attr('data-mini');
imgLarge.style.display = "none";
imgLarge.classList.add('mirro');
imgLarge.onload = function () {
imageContainer.addClass('loaded');
parentContainer.append(imgLarge);
imgLarge.classList.add('mirro_show');
}
}else {}
});
</script>
</div>




<div class="negpost_imgedit">
<div class="edit_7569" id="editmainimg_svg"><img src="../img/picon/edit.png" class="img_7569" /></div>
<div class="dele_7569"><img src="../img/picon/delete.png" class="img_7569" /></div>
<div class="pers_7569"><img src="../img/picon/pin.png" class="img_7569" /></div>
<div class="view_7569"><img src="../img/picon/media" class="img_7569" /></div>
<div class="save_7569" data-type="<?php if(empty($saveiditm)){echo '1';} else {echo '2';} ?>"><?php if(empty($saveiditm)){ ?><img src="../img/picon/save.png" class="img_477" /><?php }else { ?><img src="../img/picon/csave.png" class="img_477" /><?php } ?></div>
<div class="lock_7569"><img src="../img/picon/set.png" class="img_7569" /></div>
</div>

<script>
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .more_post").click(function(){
		$(".post#<?php echo $postid; ?> .mirro").addClass("imgbluropti");
		$(".post#<?php echo $postid; ?> .negpost_imgedit").fadeIn();
	});
    $(".post#<?php echo $postid; ?> .save_7569").click(function(){
		$(this).bookMarkit("<?php echo $postid; ?>");
	});
});
$(document).mouseup(function (e){
	var container = $(".post#<?php echo $postid; ?> .more_post");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
	$(".post#<?php echo $postid; ?> .mirro").removeClass("imgbluropti");
	$(".post#<?php echo $postid; ?> .negpost_imgedit").fadeOut();
    }
});
$(document).ready(function(){
	var ith = <?php echo $fullheight; ?>;
	var ert = ith / 2 + 202 - 32.5;
    $(".post#<?php echo $postid; ?> .negpost_imgedit").css('margin-top','-'+ ert +'px');
	var itw = <?php echo $fullwidth; ?>;
    var wwt = (itw - 465) / 2 - 50;
    $(".post#<?php echo $postid; ?> .negpost_imgedit").css('margin-left',''+ wwt +'px');
});
$(document).ready(function(){
	$("#<?php echo $postid; ?> #editmainimg_svg").click(function(){
	$("#postimgeditid").val("<?php echo $postid; ?>");
	$("#postimgeimgid").val("<?php echo $imgv; ?>");
	posteditimg();
    });
});
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .dele_7569").click(function(){
		$(this).deletePost();
	});
});
$(".post#<?php echo $postid; ?> .view_7569").click(function(){
$("#screenshotpostid").val("<?php echo $postid; ?>");
screenshot();
});
$(".post#<?php echo $postid; ?> .pers_7569").click(function(){
	$(this).vevoTagslol("<?php echo $postid; ?>");
});
$(".post#<?php echo $postid; ?> .lock_7569").click(function(){
	$(this).settingsView();
});
</script>
</div>

<?php

}

?>





<?php

if(!empty($arrayno) && empty($imgv) && empty($vidn) && empty($audio)){

?>

<div class="arrattype_allpostslk">

<div class="imgp-mus-div">

<div class="slideshow">
<div id="slider" class="slider<?php echo $postid; ?>">
<div class="inlinear_slider">
<div class="onveiw_blur_main"></div>
<div class="off_view_mainop">
<?php

	
$explodfi = explode("'",$arrayno);
$exploded = str_replace(",","",$explodfi);
$counter = 1;
$nunrows = 0;
foreach($exploded as $explode){
if(!empty($explode)){
$nunrows++;
if($counter == 1){
?>
<script>
$(".onveiw_blur_main").html("<div class='bluray_load_div' style='z-index: 1;'><img data-num='<?php echo $nunrows; ?>' id='blur_array_<?php echo $nunrows; ?>' class='blur_array_load' src='../upload/posts/images/sml/<?php echo $explode; ?>' data-large='../upload/posts/images/full/low/<?php echo $explode; ?>' /><div></div></div>");
$(document).ready(function(){
var parentContainer = $(#blur_array_<?php echo $nunrows; ?>).closest(".bluray_load_div").find("div"),
imageContainer = $(#blur_array_<?php echo $nunrows; ?>);        
// 2: load large image
var imgLarge = new Image();
imgLarge.src = $(#blur_array_<?php echo $nunrows; ?>).attr('data-large');
imgLarge.classList.add('loadedimage_array');
imgLarge.onload = function () {
imageContainer.addClass('array_cernt_loaded');
parentContainer.append(imgLarge);
imgLarge.classList.add('loadiedimage_show');
}
});
</script>
<?php
$counter = 2;
}else {
	
?>

<div class="bluray_load_div">
<img id='blur_array_<?php echo $nunrows; ?>' class='blur_array_load' src='../upload/posts/images/sml/<?php echo $explode; ?>' data-large='../upload/posts/images/full/low/<?php echo $explode; ?>' />
<div></div>
</div>

<?php
} 
}
} 

?>
</div>
</div>

</div>
<div class="controls_3242">
<a class="control_next">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
    <path d="M0-.5h24v24H0z" fill="none"/>
</svg>
</a>
<a class="control_prev">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
    <path d="M0-.5h24v24H0z" fill="none"/>
</svg>
</a>
</div>

</div>

</div>



<script>
$(document).ready(function ($) {

$(".control_prev").click(function(){
	if($(".off_view_mainop .bluray_load_div").length > 0){

	setTimeout(function(){
	$(".off_view_mainop .bluray_load_div:first").css('margin-left','-600px');
	$(".off_view_mainop .bluray_load_div:first").appendTo(".onveiw_blur_main");
	setTimeout(function(){
	$(".onveiw_blur_main .bluray_load_div:last").css('margin-left','0px');
	setTimeout(function(){
	var prevcss = $(".onveiw_blur_main .bluray_load_div:last").prev().css("z-index");
	var zindexm = prevcss + 1;
	$(".onveiw_blur_main .bluray_load_div:last").css('z-index',zindexm);
	var attrid = $(".onveiw_blur_main .bluray_load_div:last").find(".blur_array_load").attr("id");
	$("#"+ attrid +"").arrayload();
	},300);
	},300);
	},300);
	}else {
	$(".control_prev").addClass("disabledcontrol");
	if($(".onveiw_blur_main .no_array_main").length == 0){
		
	}else {
		$(".onveiw_blur_main .no_array_main:first").removeClass("no_array_main");
		$(".onveiw_blur_main .no_array_main:first").css('margin-left','0px');
	}
	}
});
$(".control_next").click(function(){
	$(".control_prev").removeClass("disabledcontrol");
	if($(".onveiw_blur_main .bluray_load_div").length < 2){
		$(".control_next").addClass("disabledcontrol");
	}else {
	if($(".onveiw_blur_main .no_array_main").length == 0){
	$(".onveiw_blur_main .bluray_load_div:last").addClass("no_array_main");
	$(".onveiw_blur_main .bluray_load_div:last").css('margin-left','-600px');		
	}else {
	if($(".onveiw_blur_main .bluray_load_div:first").next().attr("class") == "bluray_load_div"){
	if($(".onveiw_blur_main .no_array_main:first").prev().attr("class") == "bluray_load_div"){
		$(".onveiw_blur_main .no_array_main:first").prev().addClass("no_array_main");
		$(".onveiw_blur_main .no_array_main:first").css('margin-left','-600px');
	}else {}		
	}else {
		$(".control_next").addClass("disabledcontrol");
	}
	}
	}
});
}); 
  
</script>
<div class="array_append_toedit" style="display: none!important;">
<div class="edit" id="sec<?php echo $postid; ?>">
<?php
	
    $explodfi = explode("'",$arrayno);
	$exploded = str_replace(",","",$explodfi);

    foreach($exploded as $explode){
	  if(!empty($explode)){
?>
<div class="pocdiv_4556">
<img src="../upload/posts/images/sml/<?php echo $explode; ?>" id="img_4556" class="img_4556 ertopic_4556" />
<input type="hidden" class="hideeditimgsrc" value="<?php echo $explode; ?>" />
	<svg class="falseupl4556" id="falseupl4556" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                    <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
</div>
<?php
	  
	  }
    } 

?>
</div>

</div>

<div class="arrpost_imgedit">
<div class="edit_7569" id="editarraymain_svg"><img src="../img/picon/edit.png" class="img_7569" /></div>
<div class="dele_7569"><img src="../img/picon/delete.png" class="img_7569" /></div>
<div class="pers_7569"><img src="../img/picon/pin.png" class="img_7569" /></div>
<div class="view_7569"><img src="../img/picon/media" class="img_7569" /></div>
<div class="save_7569" data-type="<?php if(empty($saveiditm)){echo '1';} else {echo '2';} ?>"><?php if(empty($saveiditm)){ ?><img src="../img/picon/save.png" class="img_477" /><?php }else { ?><img src="../img/picon/csave.png" class="img_477" /><?php } ?></div>
<div class="lock_7569"><img src="../img/picon/set.png" class="img_7569" /></div>
</div>

<script>
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .more_post").click(function(){
		$(".post#<?php echo $postid; ?> .thumbnail").addClass("imgbluropti");
		$(".post#<?php echo $postid; ?> .arrpost_imgedit").fadeIn();
	});
	$(".post#<?php echo $postid; ?> .save_7569").click(function(){
		$(this).bookMarkit("<?php echo $postid; ?>");
	});
});
$(document).mouseup(function (e){
	var container = $(".post#<?php echo $postid; ?> .more_post");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
	$(".post#<?php echo $postid; ?> .thumbnail").removeClass("imgbluropti");
	$(".post#<?php echo $postid; ?> .arrpost_imgedit").fadeOut();
    }
});
$(document).ready(function(){
	$("#<?php echo $postid; ?> #editarraymain_svg").click(function(){
	$("#postarrayedit").val("<?php echo $postid; ?>");
	arrayedit();
    });
});
$(document).ready(function(){
	$(".post#<?php echo $postid; ?> .dele_7569").click(function(){
		$(this).deletePost();
	});
});
$(".post#<?php echo $postid; ?> .pers_7569").click(function(){
	$(this).vevoTagslol("<?php echo $postid; ?>");
});
$(".post#<?php echo $postid; ?> .lock_7569").click(function(){
	$(this).settingsView();
});
</script>

</div>

<?php

}

?>


<?php

if(!empty($audio) && empty($vidn) && empty($imgv) && empty($arrayno)){
	
?>

<div class="audio_main_post_5555">
<div class="audio_post_main">
<div class="audio_body_back">
<div class="left_controls_audio">
<button type="button" class="play_audio_main">
<svg xmlns="http://www.w3.org/2000/svg" class="audio_svgplay" viewBox="0 0 24 24" class="ap--play">
     <path d="M8 5v14l11-7z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" class="audio_svgpasue" viewBox="0 0 24 24" class="ap--pause">
     <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
<button type="button" class="next_second_audio">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
     <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
<button type="button" class="back_second_audio">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
     <path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
</div>
<div class="cent_controls_audio">
<div class="niceright_border_main"></div>
<div class="progress_audio_main">
<div class="outline_progress_off">
<div class="inline_progress_on"></div>
<div class="loaded_progress_on"></div>
</div>
</div>
<div class="time_audio_madeio">
<span class="cerintly_timeopert">0:00</span><a> / </a><span class="filltime_mainopert">0:00</span>
</div>
</div>
<div class="rigt_controls_audio">
<div class="divbutton_valumeop">
<div class="rightaudiovlm_border"></div>
<div class="inliner_volumain">
<div class="offset_volumanin"></div>
</div>
</div>
<button type="button" class="muite_volem_main_opert">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="volem_onsvg_mainop">
     <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="volem_offsvg_mainop">
     <path d="M7 9v6h4l5 5V4l-5 5H7z"></path>
     <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</button>
</div>
</div>
</div>

</div>

<?php
	
}else {}

?>




<?php

$selcoplimg = mysql_query("SELECT COUNT(id) FROM likes WHERE post_id='$postid' AND do='like'");
$likeimg = mysql_result($selcoplimg,0);

$selcopdlimg = mysql_query("SELECT COUNT(id) FROM likes WHERE post_id='$postid' AND do='dislike'");
$dislikeimg = mysql_result($selcopdlimg,0);
	
$selcomentimg = mysql_query("SELECT COUNT(id) FROM comments WHERE post_id='$postid' AND type='comment'");
$cmmentcount = mysql_result($selcomentimg,0);
	
$selshareco = mysql_query("SELECT COUNT(id) FROM posts WHERE type='share' AND share_id='$postid'");
$sharecount = mysql_result($selshareco,0);

$selectrendlike = mysql_query("SELECT post_id FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='like' LIMIT 1");
while($fetdone = mysql_fetch_assoc($selectrendlike)){
	$likeresultcomc = $fetdone['post_id'];
}
if($likeresultcomc == $postid){
	$datadonelike = 'true';
	$datadexrlike = 'false';
	$comlikeclass = 'donelikediv';
}else {
	$datadonelike = 'false';
	$datadexrlike = 'true';
	$comlikeclass = '';
}

if($likeresultcomc !== $postid){
$selctredislike = mysql_query("SELECT post_id FROM likes WHERE post_id='$postid' AND from_id='$id' AND do='dislike' LIMIT 1");
while($fetdexr = mysql_fetch_assoc($selctredislike)){
	$dislikeresltcm = $fetdexr['post_id'];
}
}else {}
if($dislikeresltcm == $postid){
	$datadonedislike = 'true';
	$datadexrdislike = 'false';
	$comdislikeclass = 'donedislikediv';
}else {
	$datadonedislike = 'false';
	$datadexrdislike = 'true';
	$comdislikeclass = '';
}
?>


<div class="<?php echo $class; ?>" id="com<?php echo $postid; ?>">
<div class="sectionpostion_post">
<div class="like">
<div class="like-main <?php echo $comlikeclass; ?>">
<span class="like-many-num"><?php echo $likeimg; ?></span>
<button type="button" class="send_likepost" data-done="<?php echo $datadonelike; ?>" data-dexr="<?php echo $datadexrlike; ?>">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</button>
</div>
<div class="dislike-main <?php echo $comdislikeclass; ?>">
<span class="dislike-many-num"><?php echo $dislikeimg; ?></span>
<button type="button" class="send_dislikepost" data-done="<?php echo $datadonedislike; ?>" data-dexr="<?php echo $datadexrdislike; ?>">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</button>
</div>

</div>
<div class="share-comment">

<svg xmlns="http://www.w3.org/2000/svg" id="repost-icon" class="repost-icon" version="1.0" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M1752 4042 c1 -5 75 -99 163 -210 l160 -201 800 -3 c710 -3 804 -5 835 -19 46 -21 89 -65 111 -114 17 -37 19 -78 19 -592 l0 -553 -315 0 c-173 0 -315 -3 -315 -7 0 -11 836 -1055 844 -1054 8 0 846 1045 846 1055 0 3 -142 6 -315 6 l-315 0 0 534 c0 577 -5 647 -50 763 -67 175 -201 301 -397 376 l-58 22 -1008 3 c-571 1 -1007 -1 -1005 -6z"/>
<path d="M642 3311 c-232 -291 -422 -531 -422 -535 0 -3 142 -6 315 -6 l315 0 0 -534 c0 -577 5 -647 50 -763 67 -175 201 -301 397 -376 l58 -22 1008 -3 c571 -1 1007 1 1005 6 -1 5 -75 99 -163 210 l-160 201 -800 3 c-710 3 -804 5 -835 19 -46 21 -89 65 -111 114 -17 37 -19 78 -19 593 l0 552 315 0 c173 0 315 3 315 8 0 5 -812 1026 -838 1054 -4 4 -197 -231 -430 -521z"/>
</g>
</svg>
<span class="share-vlau-num"><?php echo $sharecount; ?></span>
<svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="comment-show-mico" id="comment-show-mico" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M2058 4459 c-222 -17 -390 -64 -603 -169 -784 -387 -1113 -1340 -735
-2127 130 -271 314 -485 556 -648 l81 -55 6 -67 c4 -38 7 -156 8 -263 1 -107
4 -258 8 -336 l6 -141 374 293 374 294 451 0 c445 0 558 6 706 36 202 41 449
154 620 282 264 199 458 464 564 770 59 169 77 274 83 477 5 156 2 197 -17
310 -88 519 -415 957 -884 1185 -194 94 -382 143 -615 160 -160 12 -829 11
-983 -1z m-100 -1368 c138 -71 151 -257 24 -346 -37 -25 -53 -30 -105 -30 -78
0 -131 26 -172 84 -26 37 -30 51 -30 111 0 60 4 74 30 112 56 81 170 112 253
69z m685 5 c39 -17 92 -71 106 -109 17 -45 13 -124 -8 -165 -53 -104 -163
-139 -269 -86 -115 57 -144 196 -64 303 47 62 159 90 235 57z m725 -5 c138
-71 150 -256 23 -346 -37 -26 -51 -30 -111 -30 -60 0 -74 4 -112 30 -162 113
-86 363 110 365 33 0 67 -7 90 -19z"></path>
</g>
</svg>
<span class="comment-vlaunum"><?php echo $cmmentcount; ?></span>
</div>
<span class="textemoji_descrip">فرحان</span>
<div class="selected_emoji">
<?php
echo $emojimage;
?>
</div>
<svg  viewBox="0 0 24 24" id="more-post-svg" class="more_post" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.97.89 1.66.89H22c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 13.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm5 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm5 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
</svg>
</div>
<?php
$selecountfirstmeo = mysql_query("SELECT COUNT(id) FROM emoji WHERE post_id='$postid' AND type='1'");
$firstresult = mysql_result($selecountfirstmeo,0);

$selecountseconmeo = mysql_query("SELECT COUNT(id) FROM emoji WHERE post_id='$postid' AND type='2'");
$seconresult = mysql_result($selecountseconmeo,0);

$selecountthirdmeo = mysql_query("SELECT COUNT(id) FROM emoji WHERE post_id='$postid' AND type='3'");
$thirdresult = mysql_result($selecountthirdmeo,0);

$selecountfourdmeo = mysql_query("SELECT COUNT(id) FROM emoji WHERE post_id='$postid' AND type='4'");
$forudresult = mysql_result($selecountfourdmeo,0);

$selecountfivedmeo = mysql_query("SELECT COUNT(id) FROM emoji WHERE post_id='$postid' AND type='5'");
$fivedresaul = mysql_result($selecountfivedmeo,0);

?>
<div class="sectionemoji_posts">
<div class="insetemoji_voperti">
<div class="flexdoblex_emojifo">
<div class="offsetemoji">
<div class="clickemoji_post" data-type="1" data-text="فرحان" id="laughp_vortext"></div>
<span><?php echo $firstresult; ?></span>
</div>
<div class="offsetemoji">
<div class="clickemoji_post" data-type="2" data-text="غضبان" id="angryp_vortext"></div>
<span><?php echo $seconresult; ?></span>
</div>
<div class="offsetemoji">
<div class="clickemoji_post" data-type="3" data-text="منفعل" id="edgysp_vortext"></div>
<span><?php echo $thirdresult; ?></span>
</div>
<div class="offsetemoji">
<div class="clickemoji_post" data-type="4" data-text="لا أهتم" id="otmind_vortext"></div>
<span><?php echo $forudresult; ?></span>
</div>
<div class="offsetemoji">
<div class="clickemoji_post" data-type="5" data-text="مستمتع" id="enjoyp_vortext"></div>
<span><?php echo $fivedresaul; ?></span>
</div>
</div>
</div>
</div>
<div class="allcomment-show">
<div class="addcomment">
<svg class="upcommentsdevo" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#bbb" fill-opacity="0.816519475">
                    <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
<img src="../upload/images/low/<?php echo $info['pro_img']; ?>" class="coment-imgpro" data-name="<?php echo $info['name']; ?>" />
<div class="option-come">
<svg viewBox="0 0 24 24" class="add-imotions" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
</svg>
<svg viewBox="0 0 24 24" class="add-vidphot-com" xmlns="http://www.w3.org/2000/svg">
    <circle cx="12" cy="12" r="3.2"/>
    <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<input type="hidden" id="qzx<?php echo $postid; ?>" />
</div>

<div contenteditable="PLAINTEXT-ONLY" class="h3coment-div-type" placeholder="اكتب تعليقا ..."></div>

<div class="upload-comfilediv5">

<form id="uploadForm5" action="../ajax-php/ajax-fileupload.php" method="POST">
<input style="display: none!important;" name="userImage" id="userImage5" type="file" class="demoInputBox" />
<input style="display: none!important;" type="submit" id="btnSubmit5" value="Submit" class="btnSubmit" />
<div class="progress5">
<div class="progress-div5" id="progress-div5"><div class="progress-bar5" id="progress-bar5"></div></div>
</div>
</form>
<div class="images_small_4477">
<div class="more_aopik_4477">
<div class="aopik_4477">
<div class="right_scroll_4477"><img src="../img/profile/account-icons/more.png" /></div>
<div class="inside_4477">
<div class="move_4477">
<div class="imagescomment">

</div>
</div>
</div>
<div class="left_scroll_4477"><img src="../img/profile/account-icons/more.png" /></div>
</div>
</div>
</div>
<a class="close-this-font">
<i class="fa fa-times" aria-hidden="true"></i>
</a>
<div class="add_img_edit_4477">
<img src="../img/profile/add-img.png" class="add_more_4477"/>
</div>
</div>


<button type="hidden" id="hidebutsenc" />
<button type="hidden" id="hideshiftclick" />


</div>
<div class="coments-database">
<input type="hidden" class="comntofsetval" value="0"/>
<div class="notajax-allcom">

</div>
<div class="showbox_comments">
<div class="loader_comments">
<svg class="circular_comments" viewBox="25 25 50 50">
<circle class="path_circle_comments" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
<div class="limit-add-comments">
<svg viewBox="0 0 24 24" id="refresh-comments-svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span>عرض المزيد من التعليقات</span>
</div>
</div>
</div>
</div>
</div>
</center>
<?php
$emptyfavor = '';
$saveiditm = '';
?>
