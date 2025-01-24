
var x = document.getElementById("body-sitteng-m");
var y = document.getElementById("lock-account-mp");
var o = document.getElementById("menu-set");
var m = document.getElementById("menu-changesp");
var a = document.getElementById("menu-changesp2");


x.style.display = "none";
y.style.display = "block";
o.style.marginLeft = "0px";
m.style.display = "none";
a.style.display = "none";

// jquery animate check pass



$(document).ready(function(){
    $(".check-pass-toch,#error-h3").fadeOut(0,function(){
			$(".change-info-form").fadeIn();
	});
});

