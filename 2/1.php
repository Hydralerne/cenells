
<script>
$(".rigt_controls_audio").mouseenter(function(){
	$(".time_audio_madeio").fadeOut(0,function(){
		$(".divbutton_valumeop").fadeIn(0);
	});
});
$(".rigt_controls_audio").mouseleave(function(){
	$(".divbutton_valumeop").fadeOut(100,function(){
		$(".time_audio_madeio").fadeIn(0);
	});
});
// audio player script 
$(".play_audio_main").mousedown(function(){
	$(this).css('background','#ddd');
});
$(".play_audio_main").mouseup(function(){
	$(this).css('background','none');
});
$(".play_audio_main").click(function(){
	var audio = document.getElementById("hideaudioview_mani");
    if (audio.paused == false) {
        audio.pause();
		$(".audio_svgpasue").fadeOut(0)
		$(".audio_svgplay").fadeIn(0);
    } else {
        audio.play();
		$(".audio_svgplay").fadeOut(0)
		$(".audio_svgpasue").fadeIn(0);
    }
});

// time print all in audio

function updateTrackTime(track){
var currtime = Math.floor(track.currentTime).toString(); 
var fildurat = Math.floor(track.duration).toString();
var cerintim = cerntlytimemain(currtime);
if (alltimesmainmor(fildurat) == "NaN:NaN:NaN"){
    duration = '0:00';
} else {
    duration = alltimesmainmor(fildurat);
}
/*
if(duration == cerintim){
$(".filltime_mainopert").text("0:00");
$(".cerintly_timeopert").text("0:00");
$(".audio_svgpasue").fadeOut(0)
$(".audio_svgplay").fadeIn(0);
$(".loaded_progress_on").css('width','0%');
$(".inline_progress_on").css('width','0%');

} else {*/
$(".filltime_mainopert").text(duration);
$(".cerintly_timeopert").text(cerintim);
/*
}*/

var audio = document.getElementById("hideaudioview_mani");
var barlength = Math.round(audio.currentTime * (100 / audio.duration));
$(".inline_progress_on").css('width',''+ barlength + '%');

var buffered = audio.buffered;
if(buffered.length) {
var loaded = Math.round(100 * buffered.end(0) / audio.duration);
$(".loaded_progress_on").css('width',''+ loaded + '%');
}


}

function cerntlytimemain(s) {
    var h = Math.floor(s/3600); //Get whole hours
    s -= h*3600;
    var m = Math.floor(s/60); //Get remaining minutes
    s -= m*60;
    if(h == 0){
    var time = (m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }else {
    var time = h+":"+(m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }
    return time;
}

function alltimesmainmor(s) {
    var h = Math.floor(s/3600); //Get whole hours
    s -= h*3600;
    var m = Math.floor(s/60); //Get remaining minutes
    s -= m*60;
    if(h == 0){
    var time = (m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }else {
    var time = h+":"+(m < 10 ? ''+m : m)+":"+(s < 10 ? '0'+s : s);
    }
    return time;
}


/*
$("#text-div-type").on("paste", function(){
	$("#blog_post_sub").removeAttr("disabled");
	setTimeout(function(){
	var text = $("#text-div-type").text();
    var urlRegex = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
    var arete = text.replace(urlRegex, '<a class="getinfo_url" href="$1">$1</a>')
    var domert = $('<div>' + arete + '</div>');
    if( $('.getinfo_url', domert).length !== 0 ) {
	$("#blog_post_sub").animate({'margin-left': '180px'});
	setTimeout(function(){
	$(".blog_post div").fadeIn();
	$.post("ajax-php/shareurl.php",{geturlshare: "submit",urlere: arete},function(e){$(".ajax_share_div").html(e);});
	},300);
    }
	},500);
});*/

$(document).ready(function() {
	 $('#uploadForm9').submit(function(e) {
		if($('#userImage9').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.audio_upload_target', 
				beforeSubmit: function() {
				  $(".progress9-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress9-bar").width(percentComplete + '%');
				},
				success:function (){
	            $(".progress9").fadeOut(function(){
					$(".progress9-bar").width('0%');
				});
				$("#uploadForm9").fadeOut(0,function(){
				$(".setpost_main_textdiv").css('transform','scale(1)');
				$(".audio_src_viewmain").fadeIn(100);
				})
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});
/*
    function readaudio(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#hideaudioview_mani').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
*/
$(".right_media_music").click(function(){
	$("#userImage9").click();
});
$("#userImage9").change(function(){
	$("#uploadForm9").submit();
	$(".select_post_media").fadeOut(500,function(){
		$(".audio_media_upload,.progress9").fadeIn(100);
	});
});
$("#add-video").click(function(){
	$(".setpost_main_textdiv").css('transform','scale(0)');
	setTimeout(function(){
		$(".select_post_media").fadeIn();
	},500);
	$("#return_bostool_input").val("vida");
});
$(".return_bak_bostool").click(function(){
	if($("#return_bostool_input").val() == "vida"){
	$(".select_post_media").fadeOut(function(){
	$(".setpost_main_textdiv").css('transform','scale(1)');
	});
	$("#return_bostool_input").val("");	
	}
});
$("#pin-per").click(function(){
	$(".eshara_to_followers").slideDown(function(){
		$(".inset_8768785").fadeIn(100);
	});
});
$(".inset_8768785 span").click(function(){
	$(".inset_8768785,.eshara_selected_4444").fadeOut(100,function(){
		$(".eshara_to_followers").slideUp(500);
		delete_cookie('tagsmainval');
	});	
});
$(".input_eshara_type").keyup(function(){
	var name = $(this).val();
	if(name == ""){
	$(".eshara_resault_main").fadeOut(0);
	}else {
	$.post("ajax-php/eshara-opert.php",{get: "submit",name: name},function(e){$(".eshara_resault_main").html(e)});
	}
});
$(".a_fet_fotio").click(function(){
$(".all-top_55,.main-posts").fadeOut(function(){
	$(".follow_return_all").fadeOut(function(){
		$(".following_return_all").fadeIn();
	});
});
setTimeout(function(){
$.post("ajax-php/select-following.php",{follow: "submit",user_id: ""},function(get){$(".body_afterl_404").html(get);});
},500);
	
});
$(".a_get_fol,.a_fet_fotio,.a_posts_view").click(function(){
	$("html, body").animate({ scrollTop: 0 }, 500);
});	

$(".a_get_fol").click(function(){
$(".all-top_55,.main-posts").fadeOut(function(){
	$(".following_return_all").fadeOut(function(){
		$(".follow_return_all").fadeIn();
	});
});
setTimeout(function(){
$.post("ajax-php/select-follow.php",{follow: "submit",user_id: ""},function(get){$(".body_afterl_878").html(get);});
},500);
});
$(".a_posts_view").click(function(){
	$(".follow_return_all,.following_return_all").fadeOut(function(){
		$(".all-top_55,.main-posts").fadeIn();
	});
});


$(document).keyup(function(event){
    if(event.keyCode == 27){
		$(".emoticons").fadeOut();
    }
});

$(document).ready(function(){
	$("#edit_onr_34,.edit_onr_34").click(function(){
		$("#editpostfulls,.fulleditsr_main").fadeIn(100,function(){
			$(".left-main, .right-main, .ertineo_center, .poats ,.center_left_main").addClass("blurfullscreen");
		});
	});
	$("#editpostfulls").click(function(){
		$(".fulleditsr_main").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .poats ,.center_left_main").removeClass("blurfullscreen");
		});
		$(this).fadeOut();
	});
$("#edit_onr_34,.edit_onr_34").click(function(){
	var src = $("#hiddensrceimg").val();
	$("#varsrc_tr").attr("src",src);
});
$(".del_etrerjh").click(function(){
setTimeout(function(){
	$("#edit_post_ico").fadeOut(0);
},5);
$(".targetLayer8").slideUp(function(){
	$(".targetLayer8 center").remove();
});

});

$("#del_etrerjh").click(function(){
	var src = $("#hiddensrceimg").val();
    var img = $("#slider8 li img[src$='"+ src +"']");
	var min = img.closest("li");
	min.remove();
});



});
$(document).ready(function(){
	$("#text-div-type").focusin(function(){
		if($(this).text() == 0){
		$(this).css({'border-color':'#ccc','border-radius':'0px'});
		}
	});
	$("#text-div-type").focusout(function(){
		if($(this).text() == 0){
			$(this).css({'border-color':'#999','border-radius':'100px'});
		}
	});
});
// contenteditable
$(document).ready(function(){
$("#text-div-type").keyup(function (){
	if($("#text-div-type").text() == 0){
		$("#blog_post_sub").attr("disabled","true");
		$(this).css({'border-color':'#ccc'});
	}else {
		$(this).css({'border-color':'#999'});
		$("#blog_post_sub").removeAttr("disabled");
	}
});
	if($("#text-div-type").text() == 0){
		$("#blog_post_sub").attr("disabled","true");
	}else {
		$("#blog_post_sub").removeAttr("disabled");
	}

$("#blog_post_sub").click(function(){
	$(this).attr("disabled","true");
	$(this).css('background','#aaa');
	$(this).animate({'margin-left': '180px'});
	setTimeout(function(){
	$(".blog_post div").fadeIn();
	},500);
$("#text-div-type").css({'background': '#eee','cursor': 'default'});
	$("#text-div-type").attr("contenteditable","false");
	var post = $("#text-div-type").text();
	if($(".blog_77 #slider8 ul li").length > 1){
	$(".hidinfop_ert90 input").each(function(){
	
	var a = "'"+ $(this).val() +"',";
	$(".arrayino8").append(a);
	});
	}else {
	var x = $("#hideinimgsrc").val();
	var y = $("#hidden_3242").val(x);
	}
	if($(".short_daruyi_ment").length > 0){
	$(".short_daruyi_ment").each(function(){
	function geteshara(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
    } 
    var esharacookie = geteshara("tagsmainval");
	var thisval = ""+ $(this).attr("dataid") +"-"+ esharacookie +"";
    document.cookie = "tagsmainval="+ thisval +"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
	});
	}else {}
	if($("#audiofilenameval").length > 0){
		audio = $("#audiofilenameval").val();
	}else {
		audio = "";
	}
	var img = $("#hidden_3242").val();
	var array = $(".arrayino8").html();
	function getsharesco(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
    } 
    var groub = getsharesco("tagsmainval");
	$.post("../ajax-php/add-post.php",{insertpost: "submit",array: array,groub: groub,audio: audio,sendimgurs: img,postpro: post},function(script){$(".scripts").append(script);delete_cookie('tagsmainval');delete_cookie('setdivtext');});
});
});

function nonedisp(){
	if($("#slider8 li").length > 1){
        $(".blog_77 .targetLayer8").css('display','none');
		$(".main_div_edit").css('margin-top','-925px');
		$(".edit_tools").css('margin-top','-925px');
	}
setTimeout(nonedisp,100);
}
nonedisp();


        var filesInput = document.getElementById("userImage");
        
        filesInput.addEventListener("change", function(event){
            
            var files = event.target.files; //FileList object
            var output = document.getElementById("targetLayer8");
            
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                
                //Only pics
                if(!file.type.match('image'))
                  continue;
                
                var picReader = new FileReader();
                
                picReader.addEventListener("load",function(event){
                    
                    var picFile = event.target;
                    
                    var div = document.createElement("center");
                    div.innerHTML = "<li><div><img draggable='false' id='thumbnail' class='thumbnail' src='" + picFile.result + "'/></div></li>";
					output.insertBefore(div,null);				

					if($(".blog_77 .targetLayer8 li").length > 1){
	                    $(".blog_77 .targetLayer8 li").appendTo("#slider8 ul");
						$(".blog_77 .targetLayer8").hide(0,function(){
							$("#slider8").show(0,function(){
								$(".controls_32428").fadeIn();
							});
						});
                    }
					
setTimeout(function(){
$("#slider8 img").hover(function(){
	var src = $(this).attr("src");
	var inp = $("#hiddensrceimg").val();
	$("#hiddensrceimg").val(src);
});
},500);
setTimeout(function(){
$(".blog_77 #targetLayer8 img").hover(function(){
	var src = $(this).attr("src");
	var inp = $("#hiddensrceimg").val();
	$("#hiddensrceimg").val(src);
});
},500);

$(".blog_77 #targetLayer8 img").mouseenter(function(){
	$("#edit_post_ico").fadeIn(100);
	$(this).css('filter','blur(10px)');
});
$(".blog_77 #targetLayer8 img").mouseleave(function(){
	$("#edit_post_ico").fadeOut(0);
	$(this).css('filter','blur(0px)');
});
$("#edit_post_ico svg").mouseenter(function(){
	$("#edit_post_ico").fadeIn(0);
	$(".blog_77 #targetLayer8 img").css('filter','blur(10px)');
});
$("#edit_post_ico svg").mouseleave(function(){
	$("#edit_post_ico").fadeOut(0);
	$(".blog_77 #targetLayer8 img").css('filter','blur(0px)');
});


   });
                
                 //Read the image
                picReader.readAsDataURL(file);
            }                               
           
        });
   
   
$(document).ready(function() {
	 $('#uploadForm').submit(function(e) {
		if($('#userImage').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.hidden_654', 
				beforeSubmit: function() {
				  $(".progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress-bar").width(percentComplete + '%');
				},
				success:function (){
	            $(".progress").fadeOut(function(){
					$(".progress-bar").width('0%');
				});					
                $(".truesvgcup").fadeIn();
				$(".blog_77 .targetLayer8,.upload-shytoh svg").hover(function(){
					$(".truesvgcup").fadeToggle(0);
					$(".falseupsvg").fadeToggle(0);
				});
				$(".falseupsvg").click(function(){
					$(".upload-shytoh").fadeOut(function(){
						$(this).remove();
						$(".add-vidphot-com").remove();
					});
				});
				var input = $(".hidden_654").html();
				$(".hidinfop_ert90").append(input);
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});


$(document).ready(function ($) {

  $("#play_458,#pause_458").click(function(){
	if($('#checkbox').attr("data-check") == "true"){
    setInterval(function () {
        moveRight();
    }, 3000);
	}
  });
  
	var slideCount = $('#slider8 ul li').length;
	var slideWidth = $('#slider8 ul li').width();
	var slideHeight = $('#slider8 ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider8').css({ width: slideWidth, height: slideHeight });
	
	$('#slider8 ul').css({marginLeft: - slideWidth});
	
    $('#slider8 ul li:last-child').prependTo('#slider8 ul');

    function moveLeft() {
        $('#slider8 ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider8 ul li:last-child').prependTo('#slider8 ul');
            $('#slider8 ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider8 ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider8 ul li:first-child').appendTo('#slider8 ul');
            $('#slider8 ul').css('left', '');
        });
    };

    $('a.control_prev8').click(function () {
        moveLeft();
    });

    $('a.control_next8').click(function () {
        moveRight();
    });

}); 

$("#pause_458").click(function(){
	$(this).fadeOut(50,function(){
		$("#play_458").fadeIn();
	});
	$("#checkbox").removeAttr("data-check");
});
$("#play_458").click(function(){
	$(this).fadeOut(50,function(){
		$("#pause_458").fadeIn();
	});
	$("#checkbox").attr("data-check","true");
});


$(document).ready(function(){
$("#slider8 ul").mouseenter(function(){
	$(".edit_post_ico").fadeIn(100);
});
$("#slider8 ul").mouseleave(function(){
	$(".edit_post_ico").fadeOut(0);
});
$(".edit_post_ico svg").mouseenter(function(){
	$(".edit_post_ico").fadeIn(0);
	$("#slider8 img").css('filter','blur(10px)');
});
$(".edit_post_ico svg").mouseleave(function(){
	$(".edit_post_ico").fadeOut(0);
	$("#slider8 img").css('filter','blur(0px)');
});
$("#slider8 ul").mouseenter(function(){
	$("#slider8 img").css('filter','blur(10px)');
});
$("#slider8 ul").mouseleave(function(){
	$("#slider8 img").css('filter','blur(0px)');
});

});


$("#add-img").click(function(){
	$("#userImage").click();
});
$("#userImage").change(function(){
	$("#uploadForm").submit();
	$(".progress").fadeIn(function(){
		$(".targetLayer8").slideDown();
	});
});

</script>

