<?php

include("../connectdb/index.php");

?>

<?php

if(isset($_POST['upbest'])){

$text = addslashes(htmlspecialchars(strip_tags($_POST['text'])));
$filla = preg_replace('/ +/', '', $work);
$text = preg_replace('/ +/', ' ', $text);

$update = mysql_query("UPDATE info SET best_sayes='$text' WHERE user_id='$id'");
if(isset($update)){
echo '<script>';
if(empty($text)){
echo '
	$(".insetmain_bestsay span a").html("لا يوجد معلومات لعرضها");	
	$(".inputedit_bestsays").removeAttr("disabled");
	$(".inputedit_bestsays").fadeOut(0);
    $(".insetmain_bestsay").removeClass("firstpadding");
	$(".insetmain_bestsay span a").fadeIn(0);
	$(".editbest_saysvg").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".editbest_saysvg").html(svg);
';	
}else {
echo '
var text = "'.$text.'";
$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: text},function(e){
	var erto = e.replace("<p>","");
	var html = erto.replace("</p>","");
	$(".insetmain_bestsay span a").html(html);	
	$(".inputedit_bestsays").removeAttr("disabled");
	$(".inputedit_bestsays").fadeOut(0);
    $(".insetmain_bestsay").removeClass("firstpadding");
	$(".insetmain_bestsay span a").fadeIn(0);
	$(".editbest_saysvg").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".editbest_saysvg").html(svg);
});
';
}
echo '</script>';
}
}
if(isset($_POST['othename'])){

$textnm = addslashes(htmlspecialchars(strip_tags($_POST['textnm'])));
$filla = preg_replace('/ +/', '', $work);
$textnm = preg_replace('/ +/', ' ', $textnm);

$update = mysql_query("UPDATE info SET other_name='$textnm' WHERE user_id='$id'");
if(isset($update)){
echo '<script>';
if(empty($textnm)){
	echo 'var html = "لا يوجد مععلومات لعرضها";';
}else {
	echo 'var html = "'.$textnm.'";';
}
echo '
	$(".rightmain_othersname span a").html(html);	
	$(".inputedit_othername").removeAttr("disabled");
	$(".inputedit_othername").fadeOut(0);
    $(".rightmain_othersname").removeClass("firstpadding");
	$(".rightmain_othersname span a").fadeIn(0);
	$(".othername_editsvg").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".othername_editsvg").html(svg);
</script>
';	
}
}

if(isset($_POST['deianades'])){

$textds = addslashes(htmlspecialchars(strip_tags($_POST['textds'])));
$filla = preg_replace('/ +/', '', $work);
$textds = preg_replace('/ +/', ' ', $textds);

$update = mysql_query("UPDATE info SET deianah_desc='$textds' WHERE user_id='$id'");
if(isset($update)){
echo '<script>';
if(empty($textds)){
	echo 'var html = "لا يوجد مععلومات لعرضها";';
}else {
	echo 'var html = "'.$textds.'";';
}
echo '
	$(".right_dianahinfo span a").html(html);	
	$(".inputedit_deianah").removeAttr("disabled");
	$(".inputedit_deianah").fadeOut(0);
    $(".right_dianahinfo").removeClass("firstpadding");
	$(".right_dianahinfo span a").fadeIn(0);
	$(".deianahdescedit_svg").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".deianahdescedit_svg").html(svg);
</script>
';	
}
}
if(isset($_POST['deobert'])){

$textde = addslashes(htmlspecialchars(strip_tags($_POST['textde'])));
$filla = preg_replace('/ +/', '', $work);
$textde = preg_replace('/ +/', ' ', $textde);

$update = mysql_query("UPDATE info SET deiana='$textde' WHERE user_id='$id'");
if(isset($update)){
echo '<script>';
if(empty($textde)){
	echo 'var html = "لا يوجد مععلومات لعرضها";';
}else {
	echo 'var html = "'.$textde.'";';
}
echo '
	$(".left_dianahinfo span a").html(html);	
	$(".inputedit_deimna").removeAttr("disabled");
	$(".inputedit_deimna").fadeOut(0);
    $(".left_dianahinfo").removeClass("firstpadding");
	$(".left_dianahinfo span a").fadeIn(0);
	$(".deianahedit_svg").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".deianahedit_svg").html(svg);
</script>
';	
}
}
if(isset($_POST['seiasasu'])){

$textsi = addslashes(htmlspecialchars(strip_tags($_POST['textsi'])));
$filla = preg_replace('/ +/', '', $work);
$textsi = preg_replace('/ +/', ' ', $textsi);

$update = mysql_query("UPDATE info SET seiasa='$textsi' WHERE user_id='$id'");
if(isset($update)){
echo '<script>';
if(empty($textsi)){
	echo 'var html = "لا يوجد مععلومات لعرضها";';
}else {
	echo 'var html = "'.$textsi.'";';
}
echo '
	$(".insetmain_seiasa span a").html(html);	
	$(".inputedit_seiasa").removeAttr("disabled");
	$(".inputedit_seiasa").fadeOut(0);
    $(".insetmain_seiasa").removeClass("firstpadding");
	$(".insetmain_seiasa span a").fadeIn(0);
	$(".editseaiasa_svg").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".editseaiasa_svg").html(svg);
</script>
';	
}
}
?>