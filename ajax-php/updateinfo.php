<?php

include("../connectdb/multiply.php");

?>

<?php

if(isset($_POST['upstate'])){

$about = addslashes(htmlspecialchars(strip_tags($_POST['about'])));
$filla = preg_replace('/ +/', '', $about);
$about = preg_replace('/ +/', ' ', $about);

if(!empty($filla) || strlen($filla) > 3){
$update = mysql_query("UPDATE info SET about='$about' WHERE user_id='$id'",$dbh1);
if(isset($update)){
echo '<script>
var text = "'.$about.'";
$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: text},function(e){
	var erto = e.replace("<p>","");
	var html = erto.replace("</p>","");
	$(".first_stateecho_page span a").html(html);	
	$(".inputedit_statepro").removeAttr("disabled");
	$(".inputedit_statepro").fadeOut(0);
    $(".first_stateecho_page").removeClass("firstpadding");
	$(".first_stateecho_page span a").fadeIn(0);
	$(".edit_state_main").removeClass("closeedit_statesvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".edit_state_main").html(svg);
});
</script>';
}
}
}

if(isset($_POST['upworkin'])){

$work = addslashes(htmlspecialchars(strip_tags($_POST['work'])));
$filla = preg_replace('/ +/', '', $work);
$work = preg_replace('/ +/', ' ', $work);

$update = mysql_query("UPDATE info SET work='$work' WHERE user_id='$id'",$dbh1);
if(isset($update)){
echo '<script>';
	if(empty($work)){
		echo 'var text = "لايوجد مكان عمل لعرضة";';
		echo '$(".right_weorkmainopert span a").addClass("feticolor_main");';
	}else {
		echo 'var text = "'.$work.'";';
	}
	echo '
	$(".right_weorkmainopert span a").html(text);
	$(".inputedit_workinpro").removeAttr("disabled");
	$(".inputedit_workinpro").fadeOut(0);
    $(".right_weorkmainopert").removeClass("firstpadding");
	$(".right_weorkmainopert span a").fadeIn(0);
	$(".workfirst_edit_main").removeClass("closeedit_workinsvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".workfirst_edit_main").html(svg);
</script>';
}
}

if(isset($_POST['subtypew'])){

$worktype = addslashes(htmlspecialchars(strip_tags($_POST['worktype'])));
$filla = preg_replace('/ +/', '', $worktype);
$worktype = preg_replace('/ +/', ' ', $worktype);

$update = mysql_query("UPDATE info SET jop_name='$worktype' WHERE user_id='$id'",$dbh1);
if(isset($update)){
echo '<script>';
	if(empty($worktype)){
		echo 'var text = "لايوجد معلومات لعرضها";';
	}else{
		echo 'var text = "'.$worktype.'";';
	}
	echo '
	$(".div_weorkmainopert span a").html(text);
	$(".inputedit_worktype").removeAttr("disabled");
	$(".inputedit_worktype").fadeOut(0);
    $(".div_weorkmainopert").removeClass("firstpadding");
	$(".div_weorkmainopert span a").fadeIn(0);
	$(".worktype_edit_main").removeClass("closeedit_workinsvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".worktype_edit_main").html(svg);
</script>';
}
}

if(isset($_POST['subphone'])){

$phone = addslashes(htmlspecialchars(strip_tags($_POST['phonenum'])));
$phone = preg_replace('/ +/', '', $phone);

$update = mysql_query("UPDATE info SET phone='$phone' WHERE user_id='$id'",$dbh1);
if(isset($update)){
echo '<script>';
	if(empty($phone)){
		echo 'var text = "لا يوجد معلومات لعرضها";';
	}else {
		echo 'var text = "'.$phone.'";';
	}
	echo '
	$(".insetphone_numbercal span a").html(text);
	$(".inputedit_phonenumb").removeAttr("disabled");
	$(".inputedit_phonenumb").fadeOut(0);
    $(".insetphone_numbercal").removeClass("firstpadding");
	$(".insetphone_numbercal span a").fadeIn(0);
	$(".phonenumber_view").removeClass("closeedit_workinsvg");
    var svg = \'<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>\' +
    \'<path d="M0 0h24v24H0z" fill="none"></path>\';
	$(".phonenumber_view").html(svg);
</script>';
}
}

?>