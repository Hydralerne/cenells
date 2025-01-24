<?php

include("../connectdb/index.php");

?>

<?php

if(isset($_POST['subpostimage'])){

$image = addslashes(htmlspecialchars(strip_tags(trim($_POST['image']))));
$proim = addslashes(htmlspecialchars(strip_tags(trim($_POST['pro_img']))));
if(!empty($image) && !empty($proim)){
$quereimg = mysql_query("UPDATE users SET pro_img='$proim' WHERE id='$id'");
if(isset($quereimg)){
$imgsrc = "../upload/posts/images/full/low/$image";
list($imgwidth, $imgheight) = getimagesize($imgsrc);

$insertdb = mysql_query("INSERT INTO posts(post_img,type_all,user_id,c_check,post_date,img_width,img_height) VALUES('$image','proimg','$id','$check','$timedate','$imgwidth','$imgheight')");

if(isset($insertdb)){
	echo '
	<script>
	location.reload();
	</script>
	';
}

}

}

}


if(isset($_POST['subchangecov'])){

$topval = addslashes(htmlspecialchars(strip_tags(trim($_POST['funcrop']))));
$value = addslashes(htmlspecialchars(strip_tags(trim($_POST['value']))));
if(!empty($value)){
$querecov = mysql_query("UPDATE users SET pro_cover='$value',cover_set='$topval' WHERE id='$id'");
if(isset($querecov)){
$imgsrc = "../upload/covers/full/low/$value";
list($imgwidth, $imgheight) = getimagesize($imgsrc);
mysql_query("INSERT INTO posts(post_img,type_all,user_id,c_check,post_date,img_width,img_height) VALUES('$value','procover','$id','$check','$timedate','$imgwidth','$imgheight')");
	echo '
	<script>
	$(".buttons_docovershng button").removeAttr("disabled");
	$(".cover_overwhite_main").fadeOut(100,function(){
		$(".cover_change_show").css("visibility","hidden");
		$(".cover_overwhite_main,.progressco,#uploadFormco,.upload-comfilediv").fadeOut(100,function(){
		$(".shadow-cover,.p-m-img,.pro-name,.overflow_image_cover").fadeIn(100);
		});
	});
	</script>';

}
}
}

?>