$(document).ready(function(){
	$("#menu-changesp").click(function(){
		$(".body-sitteng-m").animate({'margin-left': '0px'},function(){
			$(".menu-set").animate({'margin-left': '0px'},function(){
				$("#menu-changesp").fadeOut(0,function(){
					$("#menu-changesp2").fadeIn(0);
				});
			});
		});
	});
})

$(document).ready(function(){
	$("#menu-changesp2").click(function(){
		$(".menu-set").animate({'margin-left': '-251px'},function(){
			$(".body-sitteng-m").animate({'margin-left': '-235px'},function(){
				$("#menu-changesp2").fadeOut(0,function(){
					$("#menu-changesp").fadeIn(0);
				});
			});
		});
	});
})

