<?php
ob_start();
session_start();
if(isset($_SESSION['ceuser'])){
	Header("Location:../");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>انشاء حساب - CENells</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="مرحبا يكم في  سينيلز انشئ حساب مجاني الان وتواصل مع من تريد بلا حدود" />
<meta name="keywords" content="انشاء حساب,CENells,تسجيل,Login,تدوينة,CE Tcenology,signup" />
<meta name="author" content="CE Technology" />
<meta property="og:image" content="img/og-image.png" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../style/dexofflog-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<script src="../js/jquery.js"></script>
</head>
<body>
<div class="offlog">
<div class="container">
<div class="big_menu_nav">
<div id="menu-nav">
  <div id="navigation-bar">
    <ul>
      <li class="menu-sub-nav current-item"><a href="../"></i><span>الرئيسية</span></a></li>
      <li class="menu-sub-nav login_clickli"><a><span>تسجيل الدخول</span></a></li>
      <li class="menu-sub-nav signup_clicki"><a><span>انشاء حساب</span></a></li>
      <li class="menu-sub-nav"><a href="http://support.cenells.com"><span>الدعم الفني</span></a></li>
      <li class="menu-sub-nav accept-items"><a href="../explanation"><span>الاتفاقية والشروط</span></a></li>
      <li class="menu-sub-nav securty-items"><a href="../policies"><span>سياسة الخصوصية</span></a></li>     
	  <li class="menu-sub-nav"><a href="../range"><span>CE Range</span></a></li>
    </ul>
  </div>
  </div>
</div>
</div>
<div class="inlog">
<div class="login_main_divs"></div>
<div class="register_div">
<?php
$include = "true";
include "signup-html.php";
?>
</div>
</div>
</div>
</div>
<div class="index_body"></div>
<div class="all_loading_back">
<div class="ce-loaging">
<div class="circle"></div>
<div class="circle-small"></div>
<div class="circle-big"></div>
<div class="circle-inner-inner"></div>
<div class="circle-inner"></div>
</div>
</div>
<div class="bottom_dives">
<div class="menu-bottom">
<div class="menu-bottom-back"></div>
<div class="container">
<svg class="getlangamdmore" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path>
</svg>
<div class="right_description">
<span class="right-copy">Powered By CE Technology ™</span>
<img draggable="false" class="cetech-logo" src="../img/logo/cemain.png">
</div>
<center>
<div class="logo">
<img src="../img/logo/cenells.png" id="logo-img">
</div>
</center>
<div class="left_discreption">
<span class="left-copy">© 2017 | CENells . All Rights Reserved</span>
</div>
<div class="wrapper">
<div class="top bar"></div>
<div class="middle bar"></div>
<div class="bottom bar"></div>
</div>
</div>
</div>

<footer class="footer">
<div class="footer-bottom">
<div class="container">
<div class="language">

<div class="first-package">
<li>English (UK)</li>
<li>العربية</li>
<li>Français (France)</li>
<li>Italiano</li>
<li>Deutsch</li>
<li>Русский</li>
<li>Español</li>
<li>Bahasa Indonesia</li>
<li>Türkçe</li>
<li>Português (Brasil)</li>
<li>हिन्दी</li>
</div>
<div class="second-package">
<li>‏فارسی‏</li>
<li>‏اردو‏</li>
<li>中文(简体)</li>
<li>日本語</li>
<li>Tiếng Việt</li>
<li>Ελληνικά</li>
<li>Íslenska</li>
<li>‏עברית‏</li>
<li>Română</li>
<li>Filipino</li>
<li>Bahasa Indonesia</li>
<li>বাংলা </li>
</div>
</div>
</div>

</div>
</footer>
</div>

<script>
function resvis(){
var winwidth = $(window).width();
var winheight = $(window).height();
var divwidth = $(".logindiv-back").width();
var divheigth = $(".logindiv-back").height();
var margintop = (winheight - divheigth) / 2;
var marginlft = (winwidth - divwidth) / 2;
$(".logindiv-back").css('margin-top',''+ margintop +'px');
$(".logindiv-back").css('margin-left',''+ marginlft +'px');
}
function resize(){
var winwidth = $(window).width();
var winheight = $(window).height();
var divwidth = $(".signup-form").width();
var divheigth = $(".signup-form").height();
var margintop = (winheight - divheigth) / 2;
var marginlft = (winwidth - divwidth) / 2;
$(".signup-form").css('margin-top',''+ margintop +'px');
$(".signup-form").css('margin-left',''+ marginlft +'px');
}
$(document).ready(function(){
	$(".login_clickli").click(function(){
		window.history.pushState("", "", '/login/');
		if($(".logindiv-back").length == 0){
		$(".index_body,.scrolling_main").fadeOut(250,function(){
        $(".signup-form").addClass("scale");
        setTimeout(function(){
		$(".all_loading_back").fadeIn(250);
		$.get("../login/login-body.php",{gethtml: "submit"},function(e){$(".login_main_divs").html(e)});	
        },300);		
		});
		}else {
        $(".all_loading_back").fadeOut(250,function(){
        $(".signup-form").addClass("scale");
        setTimeout(function(){
        $(".logindiv-back").removeClass("scale");
        },300);
        });
		}
	});
	$(".signup_clicki").click(function(){
		window.history.pushState("", "", '/signup/');
        $(".all_loading_back").fadeOut(250,function(){
        $(".logindiv-back").addClass("scale");
        setTimeout(function(){
        $(".signup-form").removeClass("scale");
        },300);
        });
	});
});

window.onload = function(){
	$("body").fadeIn(250,function(){
    $(".logindiv-back").addClass("scale");
    setTimeout(function(){
    $(".signup-form").removeClass("scale");
    },300);
    resize();
    $(window).resize(function(){
    resize();
    });
    });
}
</script>
</body>

</html>