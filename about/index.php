<!DOCTYPE html>
<html>
<head>
<title>عن الموقع - CENells</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="عن الموقع,about cenells,عن سينيلز,CENells,تدوينة" />
<meta name="author" content="CE Technology" />
<meta property="og:image" content="img/og-image.png" />
<link rel="shortcut icon" href="../img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../style/pages-style.css" />
<link rel="stylesheet" type="text/css" href="../style/fonts/href-font.css" />
<script src="../js/jquery.js"></script>
</head>
<body>
<script>
window.onload = function(){
	$("body").fadeIn(250);
}
</script>
<div class="offlog">
<div class="container">
<div class="big_menu_nav">
<div id="menu-nav">
  <div id="navigation-bar">
    <ul>
      <li class="menu-sub-nav current-item"><a href="../"></i><span>الرئيسية</span></a></li>
      <li class="menu-sub-nav login_clickli"><a href="../login"><span>تسجيل الدخول</span></a></li>
      <li class="menu-sub-nav signup_clicki"><a href="../signup"><span>انشاء حساب</span></a></li>
      <li class="menu-sub-nav"><a href="http://support.cenells.com"><span>الدعم الفني</span></a></li>
      <li class="menu-sub-nav accept-items"><a href="../explanation"><span>الاتفاقية والشروط</span></a></li>
      <li class="menu-sub-nav securty-items"><a href="../policies"><span>سياسة الخصوصية</span></a></li>     
	  <li class="menu-sub-nav"><a href="../range"><span>CE Range</span></a></li>
    </ul>
  </div>
  </div>
</div>
</div>
</div>
<div class="scrolling_main">
<input type="hidden" id="hidenscrollval" value="down">
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
$(".scrolldown_svg").click(function(){
	$(".leftext_change,.worldimage").fadeOut(250);
});
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
</script>
</div>
<div class="all_loading_back">
<div class="ce-loaging">
<div class="circle"></div>
<div class="circle-small"></div>
<div class="circle-big"></div>
<div class="circle-inner-inner"></div>
<div class="circle-inner"></div>
</div>
</div>

</body>
</html>