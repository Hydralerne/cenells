<?php
include ("../connectdb/index.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome To CEMail</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../style/index-style.css" />
<link rel="stylesheet" type="text/css" href="../style/option-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/fonts/font-awesome.min.css" />
<link rel="shortcut icon" href="../img/title.png" />
<script src="../js/jquery.js"></script>
<script src="../js/profile/account-menu.js"></script>
<script src="../js/ajaxfileup.js"></script>
<script src="../js/jquery.filedrop.js"></script>
<link rel="stylesheet" type="text/css" href="../style/home-style.css" />
<link rel="stylesheet" type="text/css" href="../style/emoicons-style.css" />
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

<script>
function updateon(){
	$.post("../ajax-php/online-check.php",{online: "submit"});
	setTimeout(updateon,30000);
}
updateon();
console.log = function() {}

</script>
</head>
<body>

<?php

include "../body-html/menu-top.php";
include "../body-html/right-main.php";

?>

<div class="search_center_main">
<div class="container">
<div class="search_topdescrip">
<span>محرك البحث</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 19.59V8l-6-6H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c.45 0 .85-.15 1.19-.4l-4.43-4.43c-.8.52-1.74.83-2.76.83-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L20 19.59zM9 13c0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3-3 1.34-3 3z"/>
</svg>
</div>
<div class="insetserch_mianinput">
<input type="text" class="search_input_pagemain" placeholder="اكتب كلمة للبحث" value="<?php echo htmlspecialchars(strip_tags($_GET['q'])); ?>" />
</div>
<div class="inset_serchdiv_main">
<div class="search_ajaxget_main">

</div>
</div>
</div>
<script>
$(document).ready(function(){
	$(".search_input_pagemain").keyup(function(){
		$.post("ajax-search.php",{submit: "submit",search: $(this).val()},function(e){$(".search_ajaxget_main").html(e)});
	});
});
</script>
</div>

<?php
include "../body-html/left-main.php";
?>
<script>
$(document).ready(function(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-search.php",
    data: {
		'offset': 0,
		'limit': 10
	},
	success: function(data){
		$(".search_ajaxget_main").append(data);
		loop += 9;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});

$(window).scroll(function(){
if($(window).scrollTop() + $(window).height() == $(document).height()) {
$.ajax({
	cache: false,
	type: "GET",
	url: "ajax-search.php",
    data: {
		'offset': loop,
		'limit': 10
	},
	success: function(data){
		$(".search_ajaxget_main").append(data);
		loop += 10;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});


});

</script>
<div class="scripts"></div>
</body>
</html>
