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

?>
<?php
include "../body-html/right-main.php";
?>
<div class="center_notifications">
<div class="noti_bodymain_page">
<div class="noti_topdescription">
<span>كافة الاشعارات</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"></path>
</svg>
</div>
<div class="inset_ajaxnoti">
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
<div class="showbox_noti">
<div class="loader_noti">
<svg class="circular_noti" viewBox="25 25 50 50">
<circle class="path_circle_noti" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
</div>
<script>
$(document).ready(function(){
function notiloader(){
var loop = 1;
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/alert-noti.php",
    data: {
		'offset': 0,
		'limit': 15
	},
	success: function(data){
		$(".inset_ajaxnoti").html(data);
		loop += 14;
		$(".showbox_noti").fadeIn(0);
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
	url: "../ajax-php/alert-noti.php",
    data: {
		'offset': loop,
		'limit': 15
	},
	success: function(data){
		$(".inset_ajaxnoti").append(data);
		loop += 15;
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
});
}
notiloader();
});

</script>
</div>

<?php
include "../body-html/left-main.php";
?>
</body>
</html>
