<div class="allinsetpost_optionmain">
<div class="all_postedit_tools">
<div class="hideninputmargin">
<input type="hidden" id="posteditidopo" />
<input type="hidden" id="postimgeditid" />
<input type="hidden" id="postimgeimgid" />
<input type="hidden" id="postarrayedit" />
<input type="hidden" id="postgetlikeof" />
<input type="hidden" id="postgtshareof" />
<input type="hidden" id="posttdislikof" />
<input type="hidden" id="postlikecomof" />
<input type="hidden" id="pstdslikcomof" />
</div>
<div class="container">
<div class="post_edit_tools_main">
<div class="edit_type_main_4556">
<div contenteditable="PLAINTEXT-ONLY" id="edit_div_type" placeholder="اكتب تعديلا لهذه التدوينة" class="edit_div_type"></div>
<img src="../img/loading.gif" id="loading_4556" />
<img src="../img/icons/face_m.png" id="emotion_4556" />
<div class="under_div_4556">
<button type="button" class="subedit_4556">تعديل</button>
<button type="button" class="canseledit_4556">الغاء</button>
</div>
<div class="under_border_4556"></div>
<div class="images_small_4556">
<div class="more_aopik_4556">
<div class="aopik_4556">
<div class="right_scroll_4556"><img src="../img/profile/account-icons/more.png" /></div>
<div class="inside_4556">
<div class="move_4556">

</div>
</div>
<div class="left_scroll_4556"><img src="../img/profile/account-icons/more.png" /></div>
</div>
</div>
<div class="add_img_edit_4556">
<img src="../img/profile/add-img.png" class="add_more_4556"/>
</div>
</div>
</div>
<input type="hidden" id="hideinputedit" />
<div class="hidesesionarr" style="display: none!important;"></div>
<!-- image upload in edit -->
<div class="upload-comfilediv3">

<form id="uploadForm3" action="../ajax-php/ajax-editupload.php" method="POST">
<input style="display: none!important;" name="userImage" id="userImage3" type="file" class="demoInputBox" />
<input style="display: none!important;" type="submit" id="btnSubmit3" value="Submit" class="btnSubmit" />
<div class="progress3">
<div class="progress-div3"><div class="progress-bar3"></div></div>
<div class="progress-value3"></div>
</div>
<div class="upload-shytoh3">
<div class="targetLayer3" id="targetLayer3">
</div>
<div class="edit_row_645"></div>
</div>
</form>
</div>
</div>
<div id="edit_full_screen" class="fullscreen"></div>
<div class="none">
<svg class="falseupl4556" id="falseupl4556" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                    <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
</div>
<div class="append_ertop_4556" style="display: none!important;"></div>

<script>
$(document).ready(function(){
$(".pocdiv_4556").mouseenter(function(){
	var svg = $(".falseupl4556");
	$(this).append(svg);
});
$(".pocdiv_4556").mouseleave(function(){
	$(this).find(".falseupl4556").remove();
});
});
$(document).ready(function(){
	$("#edit_full_screen,.canseledit_4556").click(function(){
		$(".post_edit_tools_main,#edit_full_screen").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
			$(".move_4556").empty();
			$(".add_img_edit_4556").css('margin-left','300px');
			$(".hidesesionarr").empty();
		});
	});
	$(".subedit_4556").click(function(){
		$(".subedit_4556,.canseledit_4556").attr("disabled","disabled");
		$("#emotion_4556").fadeOut(250,function(){
		$("#loading_4556").fadeIn(250);
		});
		$(".edit_div_type").css({'background': '#f0f0f0','cursor': 'default'});
	    $(".edit_div_type").attr("contenteditable","false");
		var postid = $("#hideinputedit").val();
		var postpro = $(".edit_div_type").text();		
		if($(".aopik_4556 .edit#sec"+ postid +" .img_4556").length == 1){
		var val = $(".move_4556 .edit#sec"+ postid +" .pocdiv_4556 .hideeditimgsrc");
	    postimg = val.val();
		}else {
	    postimg = "";
		if($(".aopik_4556 .edit#sec"+ postid +" .img_4556").length > 1){
		$(".move_4556 .edit#sec"+ postid +" .pocdiv_4556 .hideeditimgsrc").each(function(){
		var a = $(this).val();
		var y = "'"+ a +"',";
		$(".hidesesionarr").append(y);
	    });
		}		
		}
		var div = $(".hidesesionarr").text();
		if(div == ""){
			array = "";
		}else {
			array = div;
		}
		$.post("../ajax-php/edit-post.php",{updatepost: "submit",postid: postid,postpro: postpro,array: array,postimg: postimg},function(r){$(".scripts").append(r);});
		var text = $(".edit_div_type").text();
		var morn = $("#hideinputedit").val(); 
		$.post("../ajax-php/emotion-uploder.php",{subturn: "submit",text: text},function(e){$(".post#"+ morn +" .moreh3").html(e);});
	});
});
$(document).ready(function(){
	$(".add_img_edit_4556").click(function(){
		$("#userImage3").click();
	});
});
$("#userImage3").change(function(){
	$("#uploadForm3").submit();
	$(".progress3").fadeIn(function(){
		$(".targetLayer3").slideDown();
	});
});
$(document).ready(function() {
	 $('#uploadForm3').submit(function(e) {
		if($('#userImage3').val()) {
			e.preventDefault();
			
			$(this).ajaxSubmit({
				target:   '.append_ertop_4556', 
				beforeSubmit: function() {
				  $(".progress-bar3").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$(".progress-bar3").width(percentComplete + '%');
				},
				success:function (){
	            $(".progress3").fadeOut(function(){
					$(".progress-bar3").width('0%');
				});
				var html = $(".append_ertop_4556").html();
				var postid = $("#hideinputedit").val();
				if($(".aopik_4556 .img_4556").length == 0){
				$(".add_img_edit_4556").css('margin-left','300px');
				$(".move_4556").css('margin-left','155px');
				$(".move_4556 .edit#sec"+ postid +"").append(html);
				$(".append_ertop_4556").empty();
				}else {
				if($(".aopik_4556 .img_4556").length == 1){
					$(".add_img_edit_4556").css('margin-left','130px');
					$(".move_4556").css('margin-left','-15px');
					$(".move_4556 .edit#sec"+ postid +"").append(html);
					$(".append_ertop_4556").empty();
				    }
					else {
					if($(".aopik_4556 .img_4556").length == 2){
					$(".move_4556 .edit#sec"+ postid +"").append(html);
					$(".append_ertop_4556").empty();
					$(".add_img_edit_4556").css('margin-left','30px');	
					setTimeout(function(){
					$(".aopik_4556").css('margin-left','-50px');
					},200);					
				    setTimeout(function(){
					$(".right_scroll_4556,.left_scroll_4556").fadeIn(100);
					},600);
				    }else {
				    if($(".aopik_4556 .img_4556").length > 2){
					$(".move_4556 .edit#sec"+ postid +"").append(html);
					$(".append_ertop_4556").empty();
					}
					}
					}
				    }
                    $(".falseupl4556").click(function(){
						$(this).closest(".pocdiv_4556").remove();
						if($(".aopik_4556 .img_4556").length == 0){
						    $(".add_img_edit_4556").css('margin-left','470px');
						}else {
						if($(".aopik_4556 .img_4556").length == 1){
							$(".right_scroll_4556,.left_scroll_4556").fadeOut(function(){
							$(".add_img_edit_4556").css('margin-left','300px');
							$(".move_4556").css('margin-left','155px');
							$(".aopik_4556").css('margin-left','0px');
							});
						}else {
						if($(".aopik_4556 .img_4556").length == 2){
						    $(".right_scroll_4556,.left_scroll_4556").fadeOut(function(){
							$(".aopik_4556").css('margin-left','0px');
							$(".add_img_edit_4556").css('margin-left','130px');
							$(".move_4556").css('margin-left','-15px');
							});
						}
						}
						}
					});
				},
				resetForm: true 
			}); 
			return false; 
		}
	});
});
function hideclickon(){
	var postid = $("#posteditidopo").val();
	var text = $(".post#"+ postid +" .moreh3").html();
	$(".edit_div_type").html(text);
	$("#hideinputedit").val(postid);
    $(".edit_div_type img").each(function(){
    	var img = $(this).attr("data-c");
		var src = $(this).attr("src");
		var thi = '<img data-c="'+ img +'" src="'+ src +'" class="emotiopost">';
		var ale = $(".edit_div_type").html().replace(thi,img);
		$(".edit_div_type").html(ale);
	});
	$("#edit_full_screen").fadeIn(100,function(){
		$(".post_edit_tools_main").css('display','table');
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
	});
	$(".under_border_4556").css('display','block');
	$(".move_4556").append('<div class="edit" id="sec'+ postid +'"></div>');
	$(".move_4556").css('margin-left','155px');
	$(".add_img_edit_4556").css('margin-left','470px');
	$(".pocdiv_4556").append($(".falseupl4556"));
    falseupclikc();
}
function posteditimg(){
	var poid = $("#postimgeditid").val();
	var imgv = $("#postimgeimgid").val();
	var text = $(".post#"+ poid +" .moreh3").html();
	$(".edit_div_type").html(text);
	$("#hideinputedit").val(poid);
    $(".edit_div_type img").each(function(){
    	var img = $(this).attr("data-c");
		var src = $(this).attr("src");
		var thi = '<img data-c="'+ img +'" src="'+ src +'" class="emotiopost">';
		var ale = $(".edit_div_type").html().replace(thi,img);
		$(".edit_div_type").html(ale);
	});
	$("#edit_full_screen").fadeIn(100,function(){
		$(".post_edit_tools_main").css('display','table');
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
	});
	$(".under_border_4556").css('display','block');
	if($(".move_4556 .edit").length == 0){
	$(".move_4556").append('<div class="edit" id="sec'+ poid +'"><div class="pocdiv_4556"><img src="../upload/posts/images/sml/'+ imgv +'" id="img_4556" class="img_4556 ertopic_4556" /><input type="hidden" class="hideeditimgsrc" value="'+ imgv +'" /></div></div>');
	$(".move_4556").css('margin-left','155px');
	$(".pocdiv_4556").append($(".falseupl4556"));
    falseupclikc();
	}
}

function arrayedit(){
	var postid = $("#postarrayedit").val();
	if($(".post#"+ postid +" .array_append_toedit .img_4556").length == 2){
	$(".add_img_edit_4556").css('margin-left','130px');
	$(".move_4556").css('margin-left','-15px');
	}else {
	if($(".post#"+ postid +" .array_append_toedit .img_4556").length > 2){
	$(".move_4556").css('margin-left','-15px');
	$(".add_img_edit_4556").css('margin-left','30px');
    setTimeout(function(){
	$(".aopik_4556").css('margin-left','-50px');
	},200);					
	setTimeout(function(){
	$(".right_scroll_4556,.left_scroll_4556").fadeIn(100);
	},600);
	}
	}
	var text = $(".post#"+ postid +" .moreh3").html();
	$(".edit_div_type").html(text);
	$("#hideinputedit").val(postid);
    $(".edit_div_type img").each(function(){
    	var img = $(this).attr("data-c");
		var src = $(this).attr("src");
		var thi = '<img data-c="'+ img +'" src="'+ src +'" class="emotiopost">';
		var ale = $(".edit_div_type").html().replace(thi,img);
		$(".edit_div_type").html(ale);
	});
	$("#edit_full_screen").fadeIn(100,function(){
		$(".post_edit_tools_main").css('display','table');
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
	});
	$(".under_border_4556").css('display','block');
	var html = $(".post#"+ postid +" .array_append_toedit").html();
	$(".move_4556").append(html);
    falseupclikc();
}
function falseupclikc(){
$(".falseupl4556").click(function(){
	$(this).closest(".pocdiv_4556").remove();
	if($(".aopik_4556 .img_4556").length == 0){
	$(".add_img_edit_4556").css('margin-left','470px');
	}else {
	if($(".aopik_4556 .img_4556").length == 1){
	$(".right_scroll_4556,.left_scroll_4556").fadeOut(function(){
	$(".add_img_edit_4556").css('margin-left','300px');
	$(".move_4556").css('margin-left','155px');
	$(".aopik_4556").css('margin-left','0px');
	});
	}else {
	if($(".aopik_4556 .img_4556").length == 2){
	$(".right_scroll_4556,.left_scroll_4556").fadeOut(function(){
	$(".aopik_4556").css('margin-left','0px');	
	$(".add_img_edit_4556").css('margin-left','130px');
	$(".move_4556").css('margin-left','-15px');
	});
	}
	}
	}
});
}
</script>

</div>
</div>
<div class="all_postdelt_tools">
<input type="hidden" id="delhidenpostid" />
<div class="container">
<div class="text_type_4555">
<span>
هل انك متأكد من حذف هذه التدوينة؟
<br />
علما انه لايمكن التراجع عن هذا الاجراء
</span>
<button type="button" id="accept_delete_4555">حذف</button>
<button type="button" id="denyed_delete_4555">الغاء</button>
</div>
</div>
<div class="fullscreen" id="fullscrdeltool"></div>
<script>
$(document).ready(function(){
	$("#fullscrdeltool,#denyed_delete_4555").click(function(){
		$("#fullscrdeltool,.text_type_4555").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
		});
	});
	$("#accept_delete_4555").click(function(){
		$("#accept_delete_4555,#denyed_delete_4555").attr("disabled","disabled");
		var postid = $(".text_type_4555").attr("data-id");
		$.post("../ajax-php/edit-post.php",{deletpost: "submit",postid: postid},function(o){$(".scripts").append(o);});
	});
});
</script>
</div>
<div class="all_commentdelt_tools">
<div class="container">
<div class="text_type_4777">
<span>
هل انت متأكد من حذف هذا التعليق؟
<br />
علما انه لايمكن التراجع عن هذا الاجراء
</span>
<button type="button" id="accept_delete_4777">حذف</button>
<button type="button" id="denyed_delete_4777">الغاء</button>
</div>
</div>
<div class="fullscreen" id="fullcomscrdeltool"></div>
<script>
$(document).ready(function(){
	$("#fullcomscrdeltool,#denyed_delete_4777").click(function(){
		$("#fullcomscrdeltool,.text_type_4777").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
		});
	});
	$("#accept_delete_4777").click(function(){
		$("#accept_delete_4777,#denyed_delete_4777").attr("disabled","disabled");
		var postid = $(".text_type_4777").attr("data-po");
		var commid = $(".text_type_4777").attr("data-id");
		var type = $(".text_type_4777").attr("data-tp");
		if(type == "comment"){
		$.post("../ajax-php/delete-comment.php",{deleteco: "submit",postid: postid,commid: commid},function(o){$(".scripts").append(o);});
		var x = $(".post#"+ postid +" .comment-vlaunum").text();
		var y = x - 1;
		$(".post#"+ postid +" .comment-vlaunum").text(y);
		}else {
		if(type == "reply"){
		$.post("../ajax-php/delete-comment.php",{deletere: "submit",postid: postid,commid: commid},function(o){$(".scripts").append(o);});
		}else {}
		}
	});
});
</script>
</div>
<div class="all_like-dislike_view">
<div class="likeview_main">
<div class="container">
<div class="like_white">
<input type="hidden" id="commentlikety" />
<input type="hidden" id="commentlikeco" />
<input type="hidden" id="commentdislco" />
<div class="ajax_yoyo_7878">
<div class="option_menu_7878">
<div class="icon_div_7878">
<div class="move_icon_7878">
<div class="div_like_7575">
<img draggable="false" src="../img/icons/like2.png" id="img_like_7878">
</div>
<div class="div_dislike_7575">
<img draggable="false" src="../img/icons/dislike2.png" id="img_dislike_7878" class="">
</div>
<div class="timelike_div">
<svg viewBox="0 0 24 24" id="timelike_svg" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<div class="se7878_div">
<svg xmlns="http://www.w3.org/2000/svg" id="set7878_svg" class="repost-icon" version="1.0" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M1752 4042 c1 -5 75 -99 163 -210 l160 -201 800 -3 c710 -3 804 -5 835 -19 46 -21 89 -65 111 -114 17 -37 19 -78 19 -592 l0 -553 -315 0 c-173 0 -315 -3 -315 -7 0 -11 836 -1055 844 -1054 8 0 846 1045 846 1055 0 3 -142 6 -315 6 l-315 0 0 534 c0 577 -5 647 -50 763 -67 175 -201 301 -397 376 l-58 22 -1008 3 c-571 1 -1007 -1 -1005 -6z"></path>
<path d="M642 3311 c-232 -291 -422 -531 -422 -535 0 -3 142 -6 315 -6 l315 0 0 -534 c0 -577 5 -647 50 -763 67 -175 201 -301 397 -376 l58 -22 1008 -3 c571 -1 1007 1 1005 6 -1 5 -75 99 -163 210 l-160 201 -800 3 c-710 3 -804 5 -835 19 -46 21 -89 65 -111 114 -17 37 -19 78 -19 593 l0 552 315 0 c173 0 315 3 315 8 0 5 -812 1026 -838 1054 -4 4 -197 -231 -430 -521z"></path>
</g>
</svg>
</div>
</div>
</div>
</div>
<div class="menu_ajax_7878">
<div class="people_like_post divlike_many_number"><p>(<span class="like_many_number"></span>) الاشخاص اللذين اعجبو بالتدوينة</p></div>
<div class="people_like_post divdislike_many_number"><p>(<span class="dislike_many_number"></span>) الاشخاص اللذين لم يعجبو بالتدوينة</p></div>
<div class="people_like_post divshare_many_number"><p>(<span class="share_many_number"></span>) الاشخاص اللذين اعادو تدوين التدوينة</p></div>
</div>
<div class="topswsaqwe"></div>

<div class="main_ajax_get_like">
<div class="like_ajax_787898">
<div class="injaxlike_getwhop"></div>
<div class="loadmore_likeopert">
<button class="addlimit_wholike"><span>تحميل المزيد</span></button>
</div>
</div>
<div class="dislike_ajax_787">
<div class="injaxdislike_getwhop"></div>
<div class="loadmore_dislikeopert">
<button class="addlimit_whodislike"><span>تحميل المزيد</span></button>
</div>
</div>
<div class="share_ajax_787">
<div class="injaxshare_getwhop"></div>
<div class="loadmore_shareopert">
<button class="addlimit_whoshare"><span>تحميل المزيد</span></button>
</div>
</div>
<div class="moreloadingwjopert">
<div class="loading_poats_circles">
<div class="ce-loaging-posts-circle">
<div class="circle-posts"></div>
<div class="circle-small-posts"></div>
<div class="circle-big-posts"></div>
<div class="circle-inner-inner-posts"></div>
<div class="circle-inner-posts"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="ajax_likecomget_main">
<div class="optiontopeop_maincoment">
<div class="icon_div_456542">
<div class="move_icon_456542">
<div class="div_dislike_456542">
<img draggable="false" src="../img/icons/dislike2.png" class="img_dislike_456542" />
</div>
<div class="div_like_456542">
<img draggable="false" src="../img/icons/like2.png" class="img_like_456542" />
</div>
</div>
</div>
</div>
<div class="odser_maincomentcount">
<p class="getcommp_likemain">(<span class="like_comment_number"></span>) الاشخاص اللذين اعجبو بالتعليق</p>
<p class="getcommp_dislikemain">(<span class="dislike_comment_number"></span>) الاشخاص اللذين لم يعجبو بالتعليق</p>
</div>
<div class="inset_comentsop_lol">
<div class="inset_ajaxcomget_like">
<div class="injaxcomlike_getwhop"></div>
<div class="loadmore_comlikeopert">
<button class="addlimit_whocomlike"><span>تحميل المزيد</span></button>
</div>
</div>
<div class="inset_ajaxcomget_dislike">
<div class="injaxcomdislike_getwhop"></div>
<div class="loadmore_comdislikeopert">
<button class="addlimit_whocomdislike"><span>تحميل المزيد</span></button>
</div>
</div>
</div>
<div class="moreloadingwjopert">
<div class="loading_poats_comments">
<div class="ce-loaging-posts-circle">
<div class="circle-posts"></div>
<div class="circle-small-posts"></div>
<div class="circle-big-posts"></div>
<div class="circle-inner-inner-posts"></div>
<div class="circle-inner-posts"></div>
</div>
</div>
</div>
</div>

</div>
<div class="fullscreen" id="view_like_portino"></div>
<script>

function resizeul(){/*
	var winwidth = $(window).width();
	var winheigt = $(window).height();
	var divwidth = $(".option_menu_7878").width();
	var divheigt = $(".ajax_yoyo_7878 .main_ajax_get_like").height();
	var maintugh = divheigt + 100;
	var margntop = (winheigt - maintugh) / 2;
	var margnlef = (winwidth - divwidth) / 2;
	$(".ajax_yoyo_7878").css('margin-top',''+ margntop +'px');
	$(".ajax_yoyo_7878").css('margin-left',''+ margnlef +'px');*/
}
function resizcom(){/*
	var winwidth = $(window).width();
	var winheigt = $(window).height();
	var divwidth = $(".optiontopeop_maincoment").width();
	var divheigt = $(".ajax_likecomget_main .main_ajax_get_like").height();
	var maintugh = divheigt + 100;
	var margntop = (winheigt - maintugh) / 2;
	var margnlef = (winwidth - divwidth) / 2;
	$(".ajax_likecomget_main").css('margin-top',''+ margntop +'px');
	$(".ajax_likecomget_main").css('margin-left',''+ margnlef +'px');*/
}

$(window).resize(function(){
	resizeul();
	resizcom();
});


$.fn.ajaxGetlike = function(postid){
$(".loading_poats_circles").fadeIn(100);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getlike.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'offset': 0,
		'limit': 10
	},
	success: function(data){
		$(".loading_poats_circles").fadeOut(100,function(){
		$(".injaxlike_getwhop").html(data);
		$("#postgetlikeof").val("10");
	    });
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.appendLikewho = function(postid){
$(this).attr("disabled","disabled");
var offset = $("#postgetlikeof").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getlike.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'offset': offset,
		'limit': 10
	},
	success: function(data){
		$(".injaxlike_getwhop").append(data);
		var scrol = $("#postgetlikeof").val();
		var voop = 10;
		var gal = +voop + +scrol;
		$("#postgetlikeof").val(gal);
		$(".addlimit_wholike").removeAttr("disabled");
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$(".addlimit_wholike").click(function(){
	var postid = $(".ajax_yoyo_7878").attr("data-id");
	$(this).appendLikewho(postid);
});
$.fn.ajaxGetdislike = function(postid){
$(".loading_poats_circles").fadeIn(100);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getdislike.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'offset': 0,
		'limit': 10
	},
	success: function(data){
		$(".loading_poats_circles").fadeOut(100,function(){
		$(".injaxdislike_getwhop").html(data);
		$("#posttdislikof").val("10");
	    });
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.appenddisLikewho = function(postid){
$(this).attr("disabled","disabled");
var offset = $("#posttdislikof").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getdislike.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'offset': offset,
		'limit': 10
	},
	success: function(data){
		$(".injaxdislike_getwhop").append(data);
		var scrol = $("#posttdislikof").val();
		var voop = 10;
		var gal = +voop + +scrol;
		$("#posttdislikof").val(gal);
		$(".addlimit_whodislike").removeAttr("disabled");
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$(".addlimit_whodislike").click(function(){
	var postid = $(".ajax_yoyo_7878").attr("data-id");
	$(this).appenddisLikewho(postid);
});
$.fn.ajaxGetshare = function(postid){
$(".loading_poats_circles").fadeIn(100);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getshare.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'offset': 0,
		'limit': 10
	},
	success: function(data){
		$(".loading_poats_circles").fadeOut(100,function(){
		$(".injaxshare_getwhop").html(data);
		$("#postgtshareof").val("10");
	    });
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.appendSharewho = function(postid){
$(this).attr("disabled","disabled");
var offset = $("#postgtshareof").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getdislike.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'offset': offset,
		'limit': 10
	},
	success: function(data){
		$(".injaxshare_getwhop").append(data);
		var scrol = $("#postgtshareof").val();
		var voop = 10;
		var gal = +voop + +scrol;
		$("#postgtshareof").val(gal);
		$(".addlimit_whoshare").removeAttr("disabled");
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$(".addlimit_whoshare").click(function(){
	var postid = $(".ajax_yoyo_7878").attr("data-id");
	$(this).appendSharewho(postid);
});


$(document).ready(function(){
$("#view_like_portino").click(function(){
	$("#view_like_portino,.like_white,.ajax_likecomget_main").fadeOut(100);
});

$(".div_like_456542").click(function(){
	if($(".inset_ajaxcomget_like .main_7878_get_like").length == 0){
	    var postid = $(".ajax_likecomget_main").attr("data-postid");
	    var commid = $(".ajax_likecomget_main").attr("data-commid");
	    var type = $(".ajax_likecomget_main").attr("data-type");
	    var likecount = $(".div_like_456542").attr("data-count");
	    var dislikecount = $(".div_dislike_456542").attr("data-count");
		$(".ajax_likecomget_main").getLikecomment(postid,commid,likecount,dislikecount,type);
	}
	$(".getcommp_dislikemain").fadeOut(100,function(){
	$(".getcommp_likemain").fadeIn(100);
	});
	$(".inset_ajaxcomget_dislike").fadeIn(0);
	$(".inset_ajaxcomget_dislike").css('transform','scale(0)');
	setTimeout(function(){
    $(".inset_ajaxcomget_dislike").fadeOut(0);
	$(".inset_ajaxcomget_like").fadeIn(0);
	$(".inset_ajaxcomget_like").css('transform','scale(1)');
	resizcom();
	},300);
});
$(".div_dislike_456542").click(function(){
	if($(".inset_ajaxcomget_like .main_7878_get_like").length == 0){
	    var postid = $(".ajax_likecomget_main").attr("data-postid");
	    var commid = $(".ajax_likecomget_main").attr("data-commid");
	    var type = $(".ajax_likecomget_main").attr("data-type");
	    var likecount = $(".div_like_456542").attr("data-count");
	    var dislikecount = $(".div_dislike_456542").attr("data-count");
		$(".ajax_likecomget_main").getDislikecomment(postid,commid,likecount,dislikecount,type);
	}
	$(".getcommp_likemain").fadeOut(100,function(){
	$(".getcommp_dislikemain").fadeIn(100);
	});
	$(".inset_ajaxcomget_like").fadeIn(0);
	$(".inset_ajaxcomget_like").css('transform','scale(0)');
	setTimeout(function(){
    $(".inset_ajaxcomget_like").fadeOut(0);
	$(".inset_ajaxcomget_dislike").fadeIn(0);
	$(".inset_ajaxcomget_dislike").css('transform','scale(1)');
	resizcom();
	},300);
});



$.fn.ajaxGetlikecom = function(postid,commid,type){
$(".loading_poats_comments").fadeIn(100);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getlikecom.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'commid': commid,
		'typeid': type,
		'offset': 0,
		'limits': 10
	},
	success: function(data){
		$(".loading_poats_comments").fadeOut(100,function(){
		$(".injaxcomlike_getwhop").html(data);
		$("#postlikecomof").val("10");
	    });
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.appendLikecom = function(postid,commid,type){
$(this).attr("disabled","disabled");
var offset = $("#postlikecomof").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getlikecom.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'commid': commid,
		'typeid': type,
		'offset': offset,
		'limits': 10
	},
	success: function(data){
		$(".injaxcomlike_getwhop").append(data);
		var scrol = $("#postlikecomof").val();
		var voop = 10;
		var gal = +voop + +scrol;
		$("#postlikecomof").val(gal);
		$(".addlimit_whocomlike").removeAttr("disabled");
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$(".addlimit_whocomlike").click(function(){
	var postid = $(".ajax_likecomget_main").attr("data-postid");
	var commid = $(".ajax_likecomget_main").attr("data-commid");
	var type = $(".ajax_likecomget_main").attr("data-type");
	$(this).appendLikecom(postid,commid,type);
});

$.fn.ajaxGetdisikecom = function(postid,commid,type){
$(".loading_poats_comments").fadeIn(100);
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getdislikecom.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'commid': commid,
		'typeid': type,
		'offset': 0,
		'limits': 10
	},
	success: function(data){
		$(".loading_poats_comments").fadeOut(100,function(){
		$(".injaxcomdislike_getwhop").html(data);
		$("#pstdslikcomof").val("10");
	    });
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$.fn.appendDisikecom = function(postid,commid,type){
$(this).attr("disabled","disabled");
var offset = $("#pstdslikcomof").val();
$.ajax({
	cache: false,
	type: "GET",
	url: "../ajax-php/getdislikecom.php",
    data: {
		'gethtml': 'submit',
		'postid': postid,
		'commid': commid,
		'typeid': type,
		'offset': offset,
		'limits': 10
	},
	success: function(data){
		$(".injaxcomdislike_getwhop").append(data);
		var scrol = $("#pstdslikcomof").val();
		var voop = 3;
		var gal = +voop + +scrol;
		$("#pstdslikcomof").val(gal);
		$(".addlimit_whocomdislike").removeAttr("disabled");
	},
    error: function(){
		alert("خطأ - يرجي المحاولة مرة اخري");
	}
});
}
$(".addlimit_whocomdislike").click(function(){
	var postid = $(".ajax_likecomget_main").attr("data-postid");
	var commid = $(".ajax_likecomget_main").attr("data-commid");
	var type = $(".ajax_likecomget_main").attr("data-type");
	$(this).appendDisikecom(postid,commid,type);
});

$.fn.getLikecomment = function(postid,commid,likecount,dislikecount,type){
	$(".ajax_likecomget_main").attr("data-postid",postid);
	$(".ajax_likecomget_main").attr("data-commid",commid);
	$(".ajax_likecomget_main").attr("data-type",type);
	$(".div_like_456542").attr("data-count",likecount);
	$(".div_dislike_456542").attr("data-count",dislikecount);
	$("#view_like_portino,.ajax_likecomget_main").fadeIn(100);
	$(".getcommp_dislikemain").fadeOut(100,function(){
	$(".getcommp_likemain").fadeIn(100);
	});
	$(".inset_ajaxcomget_dislike").fadeIn(0);
	$(".inset_ajaxcomget_dislike").css('transform','scale(0)');
	setTimeout(function(){
    $(".inset_ajaxcomget_dislike").fadeOut(0);
	$(".inset_ajaxcomget_like").fadeIn(0);
	$(".inset_ajaxcomget_like").css('transform','scale(1)');
	resizcom();
	},300);
	var comcon = $(".div_like_456542").attr("data-count");
	$(".like_comment_number").html(comcon);
	var postid = $(".ajax_likecomget_main").attr("data-postid");
	var commid = $(".ajax_likecomget_main").attr("data-commid");
	$(this).ajaxGetlikecom(postid,commid,type);
}
$.fn.getDislikecomment = function(postid,commid,likecount,dislikecount,type){
	$(".ajax_likecomget_main").attr("data-postid",postid);
	$(".ajax_likecomget_main").attr("data-commid",commid);
	$(".div_like_456542").attr("data-count",likecount);
	$(".div_dislike_456542").attr("data-count",dislikecount);
	$("#view_like_portino,.ajax_likecomget_main").fadeIn(100);
	$(".getcommp_likemain").fadeOut(100,function(){
	$(".getcommp_dislikemain").fadeIn(100);
	});
	$(".inset_ajaxcomget_like").fadeIn(0);
	$(".inset_ajaxcomget_like").css('transform','scale(0)');
	setTimeout(function(){
    $(".inset_ajaxcomget_like").fadeOut(0);
	$(".inset_ajaxcomget_dislike").fadeIn(0);
	$(".inset_ajaxcomget_dislike").css('transform','scale(1)');
	resizcom();
	},300);
	var comcon = $(".div_dislike_456542").attr("data-count");
	$(".like_comment_number").html(comcon);
	var postid = $(".ajax_likecomget_main").attr("data-postid");
	var commid = $(".ajax_likecomget_main").attr("data-commid");
	$(this).ajaxGetdisikecom(postid,commid,type);
}

$(".div_dislike_7575").click(function(){
	if($(".dislike_ajax_787 .main_7878_get_like").length == 0){
		var postid = $(".ajax_yoyo_7878").attr("data-id");
		var likecount = $(".div_like_7575").attr("data-count");
        var dislikecount = $(".div_dislike_7575").attr("data-count");
		var sharecount = $(".share_ajax_787").attr("data-count");
		$(".ajax_yoyo_7878").getDislikecou(postid,likecount,dislikecount,sharecount);
	}
	$(".divlike_many_number,.divshare_many_number").fadeOut(0);
	$(".divdislike_many_number").fadeIn(0);
	$(".divlike_many_number p,.divshare_many_number p").fadeOut(100,function(){
	$(".divdislike_many_number p").fadeIn(100);
	});
	$(".like_ajax_787898,.share_ajax_787").fadeIn(0);
	$(".like_ajax_787898,.share_ajax_787").css('transform','scale(0)');
	setTimeout(function(){
	$(".like_ajax_787898,.share_ajax_787").fadeOut(0);
	$(".dislike_ajax_787").fadeIn(0);
	$(".dislike_ajax_787").css('transform','scale(1)');
	resizeul();
	},300);
});
$(".div_like_7575").click(function(){
	if($(".like_ajax_787898 .main_7878_get_like").length == 0){
		var postid = $(".ajax_yoyo_7878").attr("data-id");
		var likecount = $(".div_like_7575").attr("data-count");
        var dislikecount = $(".div_dislike_7575").attr("data-count");
		var sharecount = $(".share_ajax_787").attr("data-count");
		$(".ajax_yoyo_7878").getLikecou(postid,likecount,dislikecount,sharecount);
	}
	$(".divdislike_many_number,.divshare_many_number").fadeOut(0);
	$(".divlike_many_number").fadeIn(0);
	$(".divdislike_many_number p,.divshare_many_number p").fadeOut(100,function(){
	$(".divlike_many_number p").fadeIn(100);
	});
	$(".dislike_ajax_787,.share_ajax_787").fadeIn(0);
	$(".dislike_ajax_787,.share_ajax_787").css('transform','scale(0)');
	setTimeout(function(){
    $(".dislike_ajax_787,.share_ajax_787").fadeOut(0);
	$(".like_ajax_787898").fadeIn(0);
	$(".like_ajax_787898").css('transform','scale(1)');
	resizeul();
	},300);
});
$(".se7878_div").click(function(){
	if($(".share_ajax_787 .main_7878_get_like").length == 0){
		var postid = $(".ajax_yoyo_7878").attr("data-id");
		var likecount = $(".div_like_7575").attr("data-count");
        var dislikecount = $(".div_dislike_7575").attr("data-count");
		var sharecount = $(".share_ajax_787").attr("data-count");
		$(".ajax_yoyo_7878").getSharecou(postid,likecount,dislikecount,sharecount);
	}
	$(".divlike_many_number,.divdislike_many_number").fadeOut(0);
	$(".divshare_many_number").fadeIn(0);
	$(".divdislike_many_number p,.divlike_many_number").fadeOut(100,function(){
	$(".divshare_many_number p").fadeIn(100);
	});
	$(".dislike_ajax_787,.like_ajax_787898").fadeIn(0);
	$(".dislike_ajax_787,.like_ajax_787898").css('transform','scale(0)');
	setTimeout(function(){
    $(".dislike_ajax_787,.like_ajax_787898").fadeOut(0);
	$(".share_ajax_787").fadeIn(0);
	$(".share_ajax_787").css('transform','scale(1)');
	resizeul();
	},300);
});
$.fn.getLikecou = function(postid,likecount,dislikecount,sharecount){
	$(".div_like_7575").attr("data-count",likecount);
	$(".div_dislike_7575").attr("data-count",dislikecount);
	$(".share_ajax_787").attr("data-count",sharecount);
	$("#view_like_portino,.like_white").fadeIn(100);
	var val = $(".div_like_7575").attr("data-count");
	$(".like_many_number").text(val);
	$(".divdislike_many_number,.divshare_many_number").fadeOut(0);
	$(".divlike_many_number").fadeIn(0);
	$(".divlike_many_number p").fadeIn(100);
	$(".dislike_ajax_787,.share_ajax_787").fadeIn(0);
	$(".dislike_ajax_787,.share_ajax_787").css('transform','scale(0)');
	setTimeout(function(){
    $(".dislike_ajax_787,.share_ajax_787").fadeOut(0);
	$(".like_ajax_787898").fadeIn(0);
	$(".like_ajax_787898").css('transform','scale(1)');
	},300);
	$(".ajax_yoyo_7878").attr("data-id",postid);
	$(this).ajaxGetlike(postid);
}

$.fn.getDislikecou = function(postid,likecount,dislikecount,sharecount){
	$(".div_like_7575").attr("data-count",likecount);
	$(".div_dislike_7575").attr("data-count",dislikecount);
	$(".share_ajax_787").attr("data-count",sharecount);
	$("#view_like_portino,.like_white").fadeIn(100);
	var val = $(".div_dislike_7575").attr("data-count");
	$(".dislike_many_number").text(val);
	$(".divlike_many_number,.divshare_many_number").fadeOut(0);
	$(".divdislike_many_number").fadeIn(0);
	$(".divdislike_many_number p").fadeIn(100);
	$(".like_ajax_787898,.share_ajax_787").fadeIn(0);
	$(".like_ajax_787898,.share_ajax_787").css('transform','scale(0)');
	setTimeout(function(){
	$(".like_ajax_787898,.share_ajax_787").fadeOut(0);
	$(".dislike_ajax_787").fadeIn(0);
	$(".dislike_ajax_787").css('transform','scale(1)');
	},300);
	$(".ajax_yoyo_7878").attr("data-id",postid);
	$(this).ajaxGetdislike(postid);
}
$.fn.getSharecou = function(postid,likecount,dislikecount,sharecount){
	$(".div_like_7575").attr("data-count",likecount);
	$(".div_dislike_7575").attr("data-count",dislikecount);
	$(".share_ajax_787").attr("data-count",sharecount);
	$("#view_like_portino,.like_white").fadeIn(100);
	var val = $(".share_ajax_787").attr("data-count");
	$(".share_many_number").text(val);
	$(".divlike_many_number,.divdislike_many_number").fadeOut(0);
	$(".divshare_many_number").fadeIn(0);
	$(".divshare_many_number p").fadeIn(100);
	$(".like_ajax_787898,.dislike_ajax_787").fadeIn(0);
	$(".like_ajax_787898,.dislike_ajax_787").css('transform','scale(0)');
	setTimeout(function(){
	$(".like_ajax_787898").fadeOut(0);
	$(".share_ajax_787,.dislike_ajax_787").fadeIn(0);
	$(".share_ajax_787").css('transform','scale(1)');
	},300);
	$(".ajax_yoyo_7878").attr("data-id",postid);
	$(this).ajaxGetshare(postid);
}
});
</script>
</div>
</div>
<div class="all_post_screenshot">
<div class="fullscreen" id="screenshot_back"></div>
<div class="container">
<div class="screenpost_main">
<input type="hidden" id="screenshotpostid" />
<input type="hidden" id="screenshotuserna" />
<div class="toptoolspost">
<img class="screenpostimg" />
<h3>
</h3>
<p></p>
<button type="button" class="butpo_34">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
</svg>
</button>
<svg  viewBox="0 0 24 24" id="download_screenshot" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
</div>
<div class="relative_post_2002">
<h3 class="lessh3">
</h3>
<div class="screenppost_imgmain">
</div>
</div>
<div class="relative_post_function">
<div class="remain_78542">
<div class="likescount_4999"><span>معجبين <p>265</p></span></div>
<div class="dislikescount_4999"><span>غير معجبين <p>31</p></span></div>
<div class="images_likes_20589">

</div>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
	$("#screenshot_back").click(function(){
		$("#screenshot_back,.screenpost_main").fadeOut(100,function(){
			$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
		});
		setTimeout(100,function(){
			$(".toptoolspost h3").empty();
			$(".screenppost_imgmain").empty();
		});
	});
});
function screenshot(){
	var postid = $("#screenshotpostid").val();
	var userna = $(".post#"+ postid +"").attr("username");
	var data = $(".post#"+ postid +" .moreh3").html();
	$(".lessh3").html(data);
	var src = $(".post#"+ postid +"").find("#user-pot-imico").attr("src");
	$(".screenpostimg").attr("src",src);
	var name = $(".post#"+ postid +"").find(".post-user-infpty h4 a");
	var chek = $(".post#"+ postid +"").find(".post-user-infpty #check-postu");
	var pimg = $(".post#"+ postid +"").find(".imgp-mus-div .mirro");
	$(".toptoolspost p").html("@"+ userna +"");
	name.clone().prependTo(".toptoolspost h3");
	chek.clone().appendTo(".toptoolspost h3");
	pimg.clone().appendTo(".screenppost_imgmain");
	$(".screenppost_imgmain img").attr("class","image_20598");
	$(".screenppost_imgmain img").removeAttr("style");
	$(".screenpost_main,#screenshot_back").fadeIn(100,function(){
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
	});
}
</script>
</div>
<div class="all_share_tools">
<div class="fullscreen" id="sharewindow_back"></div>
<div class="hidden_inputshare">
<input type="hidden" id="hidesharepostid" />
</div>
<div class="container">
<div class="share_window_main">
<div class="writesomething_share">
<div contenteditable="PLAINTEXT-ONLY" class="share-div-type" placeholder="اكتب شيئا مع المشاركة"></div>
</div>
<button class="shareit_post">اعادة تدوين</button>
<div class="share_user_info">

</div>
<div class="share_text_main">
<div class="text_post_share"></div>
<div class="image_post_main"></div>
</div>
</div>
</div>
<script>
$.fn.sharePost = function(){
	$("#sharewindow_back").fadeIn(100,function(){
		$(".share_window_main").css('display','table');
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
	});
	var postid = $(this).closest(".post-main-tvi").attr("id");
	$("#hidesharepostid").val(postid);
	var useimg = $(".post#"+ postid +" .post-user-infpty").find("#user-pot-imico");
	var usetxt = $(".post#"+ postid +" .post-user-infpty").find("h4");
	var postxt = $(".post#"+ postid +" .h3post_alleripo").find(".moreh3");
	var pstimg = $(".post#"+ postid +" .imgp-mus-div").find(".mirro");
	var userna = $(".post#"+ postid +"").attr("username");
	var echonm = '<p>@'+ userna +'</p>';
	useimg.clone().prependTo(".share_user_info");
	usetxt.clone().appendTo(".share_user_info");
	$(".share_user_info").append(echonm);
	postxt.clone().appendTo(".text_post_share");
	pstimg.clone().appendTo(".image_post_main");
	$(".image_post_main img").attr("class","image_7007");
	$(".share_user_info #user-pot-imico").attr("id","imagesur_545");
	$(".image_post_main img").removeAttr("style");
}
$("#sharewindow_back").click(function(){
	$("#sharewindow_back,.share_window_main").fadeOut(100,function(){
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
	});
	$(".share_user_info").empty();
	$(".text_post_share").empty();
	$(".image_post_main").empty();
});
$(".shareit_post").click(function(){
	$(this).attr("disabled","disabled");
	var postpro = $(".share-div-type").text();
    var postid = $("#hidesharepostid").val();
	if($(".post#"+ postid +"").attr("data-edit") == "share"){
		var drobox = "share";
	}else {
		var drobox = "normal";
	}
	$.post("../ajax-php/share.php",{subshare: "submit",postid: postid,postpro: postpro,drobox: drobox},function(e){$(".scripts").html(e)});
});
</script>
</div>
<div class="all_image_view_tools">
<div class="fullscreen" id="view_image_div"></div>
<div class="container">
<div class="div_main_0505">
<div class="comments_view_maingo">
<div class="top_info">
<div class="view_info_5050"></div>
<div class="view_name_5050"></div>
</div>
<div class="viewajax_botco_main">
<input type="text" class="view-div-type" placeholder="اكتب تعليقا..." />
<div class="veiw_option_come">
<svg viewBox="0 0 24 24" class="view_add_imotions" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"></path>
</svg>
<svg viewBox="0 0 24 24" class="view_add_emoi" xmlns="http://www.w3.org/2000/svg">
    <circle cx="12" cy="12" r="3.2"></circle>
    <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
<input type="hidden" id="qzx1088">
</div>
</div>
</div>

<div class="all_left_0505">
<div class="img_app_0505">

</div>
<div class="full_image_opert"></div>
<div class="input_main_view_5050">
<div class="first_5050">
<span>الجودة الكاملة</span>
</div>
<div class="second_5050">
<span>الجودة المتوسطة</span>
</div>
<a id="download_href_5050" href="#" download>
<svg viewBox="0 0 24 24" class="download_image_5050" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
</a>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
$(".all_left_0505").click(function(){
	$(".input_main_view_5050").fadeToggle(100);
});
$(".download_image_5050").click(function(){
	$(".input_main_view_5050").fadeOut(100);
});
$(".first_5050").click(function(){
	$(".input_main_view_5050").fadeOut(100,function(){
	$('.view_imageblur').removeClass("sml_loaded");
	setTimeout(function(){
    $(".full_image_opert").changeQuality("low");
	},300);
	});
});
$(".second_5050").click(function(){
	$(".input_main_view_5050").fadeOut(100,function(){
	$('.view_imageblur').removeClass("sml_loaded");
	setTimeout(function(){
    $(".full_image_opert").changeQuality("full");
	},300);
	});
});
(function ($) {
    $.fn.veiwdLoad = function (options) {
        var imageContainer = $(this);
        // 2: load large image
        var imgLarge = new Image();
        var getsrc = $(this).attr('data-large');
		imgLarge.src = getsrc;
		imgLarge.style.display = "none";
        imgLarge.classList.add('view_datalag');
        imgLarge.onload = function () {
        imageContainer.addClass('sml_loaded');	
		$(".full_image_opert").html(imgLarge);
		imgLarge.classList.add('larg_loaded');
		$("#download_href_5050").attr("href",$(".view_datalag").attr("src"));
		setTimeout(function(){
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
		},100);
		};
    };
}(jQuery));
$.fn.viewImage = function(postid,postyp){
	if(postyp == "post"){
	var imager = $(".post#"+ postid +"").find(".image-blur").clone();
	$(".img_app_0505").html(imager);
	$(".img_app_0505 .image-blur").attr("class","view_imageblur");
	$(".img_app_0505 .view_imageblur").removeAttr("id");
	var largwidth = $(".post#"+ postid +" .postimg_overflow").attr("larg-width");
	var largheight = $(".post#"+ postid +" .postimg_overflow").attr("larg-height");
	}else {
	if(postyp == "comment"){
	var imager = $("#888"+ postid +"").find(".smlofload_comment").clone();
	$(".img_app_0505").html(imager);
	$(".img_app_0505 .smlofload_comment").attr("class","view_imageblur");
	$(".img_app_0505 .view_imageblur").removeAttr("id");
	var largwidth = $("#888"+ postid +"").find(".smlofload_comment").attr("width");
	var largheight = $("#888"+ postid +"").find(".smlofload_comment").attr("height");
	}else {}
	}
	var newidth = 1000;
	var newhigt = (largheight * newidth) / largwidth;
	if(newhigt > 750){
	var vewhigt = 750;
	var vewidth = (largwidth * vewhigt) / largheight;
	$(".all_left_0505,.div_main_0505").css("width",""+ vewidth +"px");
	$(".img_app_0505 .view_imageblur").css("width",vewidth + 50 +'px');
	$(".img_app_0505 .view_imageblur").css("height",vewhigt + 50 +'px');		
	$(".all_left_0505,.div_main_0505").css("height",''+ vewhigt +'px');		
	}else {
	$(".all_left_0505,.div_main_0505").css("width",""+ newidth +"px");
	$(".img_app_0505 .view_imageblur").css("width",newidth + 50 +'px');
	$(".img_app_0505 .view_imageblur").css("height",newhigt + 50 + 'px');
	$(".all_left_0505,.div_main_0505").css("height",""+ newhigt +"px");
	}

$(".view_imageblur").veiwdLoad();

// append ommentseroi 

if(postyp == "post"){
var namenpoom = $(".post#"+ postid +" .post-user-infpty").html();
var spantimgo = $(".post#"+ postid +"").attr("username");
$(".view_info_5050").html(namenpoom);
$(".view_info_5050 h4 a").prependTo(".view_info_5050 h4");
$(".view_name_5050").html("@"+ spantimgo +"");
$(".view_info_5050 #user-pot-imico").attr("class","view_avatar_mainop");
$(".view_info_5050 #user-pot-imico").removeAttr("id");
if($(".view_info_5050 h4 img").length !== 0){
$(".view_info_5050 #check-postu").attr("class","view_check_mainop");
$(".view_info_5050 #check-postu").removeAttr("id");
}else {}
}else {
if(postyp == "comment"){
var namenpoom = $("#888"+ postid +" .username-commespn").html();
var spantimgo = $("#888"+ postid +"").attr("data-name");
var imagemain = $("#888"+ postid +"").find(".comuseimga").clone();
$(".view_info_5050").html(namenpoom);
$(".view_info_5050").append("<h4></h4>");
$(".view_info_5050 a").appendTo(".view_info_5050 h4");
$(".view_name_5050").html("@"+ spantimgo +"");
$(".view_info_5050").prepend(imagemain);
$(".view_info_5050 .comuseimga").attr("class","view_avatar_mainop");
if($(".view_info_5050 span img").length !== 0){
$(".view_info_5050 .check_comment_img").attr("class","view_check_mainop");
}else {}
}else {}
}
$("#view_image_div,.div_main_0505").fadeIn(0);
}

$.fn.changeQuality = function(quality){
var imageContainer = $(".view_imageblur");
// 2: load large image
var imgLarge = new Image();
var getsrc = $(".view_imageblur").attr("data-large");
if(quality == "full"){
var repsrc = getsrc.replace("low","height");
}else {
var repsrc = getsrc;
}
imgLarge.src = repsrc;
imgLarge.style.display = "none";
imgLarge.classList.add('view_datalag');
imgLarge.onload = function () {
imageContainer.addClass('sml_loaded');	
$(".full_image_opert").html(imgLarge);
imgLarge.classList.add('larg_loaded');
$("#download_href_5050").attr("href",$(".view_datalag").attr("src"));
$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
};
}


$("#view_image_div").click(function(){
	$("#view_image_div,.div_main_0505").fadeOut(0,function(){
		$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
	});
	$(".full_image_opert,.img_app_0505").empty();
});	

});
</script>

</div>
<div class="all_post_save_do">
<script>
$(document).ready(function(){
	$.fn.bookMarkit = function(postid,type){
	if(postid.replace(/ /g,'') !== ""){
	var type = $(this).attr("data-type");
    if(type == "1"){
		$(".post#"+ postid +" .post_stil_loading").css('display','inline-block');
		$.post("../ajax-php/save.php",{save: "submit",postid: postid},function(e){
			$(".post#"+ postid +" .post_stil_loading").fadeOut(0);
			$(".scripts").append(e);
		});
	}else {
	if(type == "2"){
		$(".post#"+ postid +" .post_viewtimes_main .postsavedit_svgico").remove();
		$(".post#"+ postid +" .post_stil_loading").css('display','inline-block');
		$.post("../ajax-php/save.php",{removesave: "submit",postid: postid},function(e){
			$(".post#"+ postid +" .post_stil_loading").fadeOut(0);
			$(".scripts").append(e);
		});
	}else {}
	}
	}
	}
});
</script>
</div>
<div class="all_tagepost_toolspost">
<input type="hidden" id="hiddenpostagid" />
<input type="hidden" id="foreachgrouped" />
<script>
var updatecookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
$.fn.vevoTagslol = function(postid){
$("#hiddenpostagid").val(postid);
var html = '<div class="allpostags_esharas">' +
'<div class="eshara_selected_4444">' +
'<div class="with_8678778">' +
'<div class="eshara_body_454568"></div>' +
'</div>' +
'</div>' +
'<div class="tagedclose_postexp">' +
'<span><i class="fa fa-times" aria-hidden="true"></i></span>' +
'<input type="text" class="cerentpost_esharatdw" placeholder="مع من تريد مشاركة هذه التدوينة" />' +
'</div>' +
'<div class="esharainpost_ajax"></div>' +
'</div>';
var postid = $("#hiddenpostagid").val();
$(".post#"+ postid +" .h3post_alleripo").prepend(html);
$(".post#"+ postid +" .h3post_alleripo h3").addClass("margintwentytop");
$(".post#"+ postid +" .tagedclose_postexp span").click(function(){
$(".post#"+ postid +" .allpostags_esharas").remove();
$(".post#"+ postid +" .h3post_alleripo h3").removeClass("margintwentytop");
});
if($(".post#"+ postid +"").attr("data-edit") == "taged" && $(".post#"+ postid +" .smlimages_tagedicon").length !== 0){
$(".post#"+ postid +" .smlimages_tagedicon").each(function(){
var postid = $("#hiddenpostagid").val();
var id = $(this).attr("data-id");
var im = $(this).attr("src");
var nm = $(this).attr("data-name");
var ht = '<div class="short_daruyi_ment" dataid="'+ id +'">' +
'<i class="fa fa-times-circle" aria-hidden="true"></i>' +
'<img src="'+ im +'" /><span>'+ nm +'</span>' +	
'</div>';
$(".post#"+ postid +" .eshara_body_454568").append(ht);
$(".post#"+ postid +" .esharainpost_ajax").fadeOut(0);
$("#"+ postid +" #postmouqate_fadeklop").val("true");
$(".post#"+ postid +" .with_8678778").fadeIn(100);
resultclick();
});
function resultclick(){
var postid = $("#hiddenpostagid").val();
$(".post#"+ postid +" .short_daruyi_ment").mouseenter(function(){
	$(this).find("img").fadeOut(0)
	$(this).find("i").fadeIn(0);
});
$(".post#"+ postid +" .short_daruyi_ment").mouseleave(function(){
	$(this).find("i").fadeOut(0)
	$(this).find("img").fadeIn(0);
});
$(".post#"+ postid +" .short_daruyi_ment").click(function(){
var postid = $("#hiddenpostagid").val();
	$(this).remove();
	if($(".post#"+ postid +" .with_8678778 .short_daruyi_ment").length == 0){
		$(".post#"+ postid +" .with_8678778").fadeOut(100);
	}else {}
});
}
}
$(".post#"+ postid +" .cerentpost_esharatdw").keyup(function(){
	var postid = $("#hiddenpostagid").val();
	var name = $(this).val();
	if(name == ""){
	$(".post#"+ postid +" .esharainpost_ajax").fadeOut(0);
	}else {
	$.get("../ajax-php/eshara-opert.php",{getpost: "submit",name: name,postid: postid},function(e){
		var postid = $("#hiddenpostagid").val();
		$(".post#"+ postid +" .esharainpost_ajax").html(e);
	});
	}
});
$(".post#"+ postid +" .cerentpost_esharatdw").keydown(function(event){
if(event.keyCode == 13){
var eshara = $("#hiddenpostagid").val();
if($(".post#"+ eshara +" .short_daruyi_ment").length == 1){
var thsval = ""+ $(this).attr("dataid") +"-";
$("#foreachgrouped").val(thsval);
}else {
$(".post#"+ eshara +" .short_daruyi_ment").each(function(){
	var oldval = $("#foreachgrouped").val();
	var thsval = ""+ $(this).attr("dataid") +"-"+ oldval +"";
	$("#foreachgrouped").val(thsval);
});
}
var groub = $("#foreachgrouped").val();
if(groub.replace(/ /g,'') !== ""){
$.post("../ajax-php/edit-post.php",{uposteshara: "submit",eshara: eshara,groub: groub},function(e){$(".scripts").html(e);updatecookie('tagpostvergin');});
}else {}
}else {}
});
}
/*
function getpostupsh(name) {
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
    var groub = getpostupsh("tagpostvergin");
	}
*/
</script>
</div>
<div class="all_postlock_set">
<div class="fullscreen" id="fullscreenlockset"></div>
<div class="whitelock_postset">
<a class="closelockvern">
<i class="fa fa-times" aria-hidden="true"></i>
</a>
<?php

$sexcenolsd = mysql_query("SELECT id FROM posts WHERE user_id='$id' ORDER BY id DESC LIMIT 1");
while($vqop = mysql_fetch_array($sexcenolsd)){
$paramater = $vqop['id'];
}
$selectlockq = mysql_query("SELECT * FROM posts_query WHERE user_id='$id' AND session='lockview' AND post_id='$paramater'");
while($zexl = mysql_fetch_array($selectlockq)){
	$locktypeall = $zexl['type'];
}

?>
<div class="append_vortextlock">
<?php
if($locktypeall == "v4" || $locktypeall == "v5"){
echo '<div class="insetvortex_podv" style="display: flex">';
$selectlockq = mysql_query("SELECT * FROM posts_query WHERE user_id='$id' AND to_id!='' AND session='lockview' AND post_id='$paramater' AND type_all='custom'");
while($zexl = mysql_fetch_array($selectlockq)){
$zexluserid = $zexl['to_id'];
$fetchbnioi = mysql_query("SELECT id,name,pro_img FROM users WHERE id='$zexluserid' LIMIT 1");
while($coszel = mysql_fetch_array($fetchbnioi)){
echo '<div title="'.$coszel['name'].'">
<i class="fa fa-times-circle" aria-hidden="true"></i>
<img src="../upload/images/low/'.$coszel['pro_img'].'" class="vortextimg_lockv" data-id="'.$coszel['id'].'" />
</div>';
}
}
echo '</div>';
	
}else {}
?>
</div>
<div class="menudescrip_lockset">
<span>تعديل خصوصية التدوينات</span>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/>
</svg>
</div>
<div class="insetlock_vorptore">
<div class="whosee_tahatdes">
<span>من يستطيع رؤية التدوينة</span>
</div>
<div class="selectmenu_vortex">
<li data-view="<?php if(empty($locktypeall)){echo 'v1';}else {echo $locktypeall;} ?>">
<svg viewBox="0 0 24 24" class="thatvega_morelock" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<?php
if($locktypeall == "v1"){
echo '
<p>العامة</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
</svg>
';
}else if($locktypeall == "v2"){
echo '
<p>المتابِعون</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"></path>
</svg>
';
}else if($locktypeall == "v3"){
echo '
<p>المفضلة</p>
<svg viewBox="0 0 24 24" class="scgicon_01510" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
';
}else if($locktypeall == "v4"){
echo '
<p>اشخاص محددون</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<script>
$(".selectmenu_vortex").css(\'width\',\'200px\');
</script>
';
}else if($locktypeall == "v5"){
echo '
<p>تخصيص استثناء</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
<script>
$(".selectmenu_vortex").css(\'width\',\'200px\');
</script>
';
}else {
echo '
<p>العامة</p>
<svg class="scgicon_01510" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
</svg>
';
}
?>
</li>
</div>
<div class="offsetm_postslock_view">
<div class="menuvok_postslock_view">
<li class="publick_viewmain" data-view="v1" data-text="اي شخص يمكنه رؤية هذه التدوينة">
<svg class="iconmenu_lockview" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path>
</svg>
<span>العامة</span>
</li>
<li class="following_postlockli" data-view="v2" data-text="المتابِعين فقط من يمكنهم رؤية هذه التدوينة">
<svg class="lockview_postfollow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"></path>
</svg>
<span>المتابِعون</span>
</li>
<li class="favorlock_postilis" data-view="v3" data-text="تحديد الاحسابات المفضلة فقط لرؤية هذه التدوينة">
<svg viewBox="0 0 24 24" class="favolock_postview" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
</svg>
<span>المفضلة</span>
</li>
<li class="personspost_whereslock" data-view="v4" data-text="تحديد بعض الاشخاص فقط لرؤية هذه التدوينة">
<svg class="mohadada_personmav" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>
<span>اشخاص محددون</span>
</li>
<li class="onlywithout_lockpost" data-view="v5" data-text="استثناء اشخاص من رؤية هذه التدوينة">
<svg class="mokhassalock_postview" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
<span>تخصيص استثناء</span>
</li>
</div>
</div>
<div class="apeend_lockpost_viewnasd"></div>
<div class="porhguh_veoplqwe">
<p>اي شخص يمكنه رؤية هذه التدوينة</p>
</div>
</div>
</div>
<div class="or_485412_ar" style="display: none!important"></div>
<script>
var text = $(".menuvok_postslock_view li[data-view='<?php echo $locktypeall; ?>']").attr("data-text");
$(".porhguh_veoplqwe p").text(text);
<?php
if($locktypeall == "v4"){
?>
var vio = '<div class="seleclockv_40125">' +
'<input type="text" class="inputview_lockmbder" data-put="m7" placeholder="حدد الذي تريد اظهار له هذه التدوينة" />' +
'<div class="ajax_lockset_viewpost" id="ajax_lockset_pers"></div>' +
'</div>';
<?php
}else {
if($locktypeall == "v5"){
?>	
var vio = '<div class="seleclockv_40125">' +
'<input type="text" class="inputview_lockmbder" data-put="m5" placeholder="حدد الذي تريد منعه من رؤية هذه التدوينة" />' +
'<div class="ajax_lockset_viewpost" id="ajax_lockset_mohd"></div>' +
'</div>';
<?php
}else {}
}
if($locktypeall == "v4" || $locktypeall == "v5"){
?>
$(".selectmenu_vortex").css('width','200px');
$(".whitelock_postset").css('height','235px');
$(".apeend_lockpost_viewnasd").html(vio);
$(".apeend_lockpost_viewnasd").fadeIn(100);
$(".inputview_lockmbder").keyup(function(){
var data = $(this).attr("data-put");
var text = $(this).val();
if($(this).val() == ""){
$(".ajax_lockset_viewpost").fadeOut(0);
}else {
$(".ajax_lockset_viewpost").fadeIn(0);
$.get("../ajax-php/selctlock.php",{getuser: "submit",text: text,data: data},function(e){$(".ajax_lockset_viewpost").html(e)});
}
});
$(".insetvortex_podv div i").click(function(){
	$(this).closest("div").remove();
	if($(".insetvortex_podv div").length == 0){
		$(".insetvortex_podv").fadeOut(0);
	}else {
		$(".insetvortex_podv").css('display','flex');
	}
});
<?php
}else {}
?>
</script>
<script>
$(document).ready(function(){
	$(".menuvok_postslock_view li").click(function(){
		if($(this).attr("class") == "personspost_whereslock"){
			var cio = '<div class="seleclockv_40125">' +
			'<input type="text" class="inputview_lockmbder" data-put="m7" placeholder="حدد الذي تريد اظهار له هذه التدوينة" />' +
			'<div class="ajax_lockset_viewpost" id="ajax_lockset_pers"></div>' +
			'</div>';
		}else if($(this).attr("class") == "onlywithout_lockpost"){
			var cio = '<div class="seleclockv_40125">' +
			'<input type="text" class="inputview_lockmbder" data-put="m5" placeholder="حدد الذي تريد منعه من رؤية هذه التدوينة" />' +
			'<div class="ajax_lockset_viewpost" id="ajax_lockset_mohd"></div>' +
			'</div>';
		}else {}
		if($(this).attr("class") == "personspost_whereslock" || $(this).attr("class") == "onlywithout_lockpost"){
			$(".insetvortex_podv").empty();
			$(".insetvortex_podv").fadeOut(0);
			$(".selectmenu_vortex").css('width','200px');
			$(".whitelock_postset").css('height','235px');
			$(".apeend_lockpost_viewnasd").html(cio);
			$(".apeend_lockpost_viewnasd").fadeIn(100);
			$(".inputview_lockmbder").keyup(function(){
			    var data = $(this).attr("data-put");
				var text = $(this).val();
				if($(this).val() == ""){
				$(".ajax_lockset_viewpost").fadeOut(0);
				}else {
				$(".ajax_lockset_viewpost").fadeIn(0);
				$.get("../ajax-php/selctlock.php",{getuser: "submit",text: text,data: data},function(e){$(".ajax_lockset_viewpost").html(e)});
				}
			});
		}else {
			$(".selectmenu_vortex").css('width','175px');
			$(".apeend_lockpost_viewnasd,.insetvortex_podv").fadeOut(100);
			$(".whitelock_postset").css('height','180px');
		}
		$(".menuvok_postslock_view").fadeOut(0);
		var txt = $(this).attr("data-text");
		var pht = '<p>'+ txt +'</p>';
		$(".porhguh_veoplqwe p").html(pht);
		$(".scgicon_01510,.selectmenu_vortex p").remove();
		var spn = $(this).find("span").text();
		var sht = '<p>'+ spn +'</p>';
		$(".selectmenu_vortex li").append(sht);
		var svg = $(this).find("svg");
		svg.clone().appendTo(".selectmenu_vortex li");
		$(".selectmenu_vortex li svg").each(function(){
			if($(this).attr("class") == "thatvega_morelock"){
			}else {
				$(this).attr("class","scgicon_01510");
			}
		});
		var atr = $(this).attr("data-view");
		$(".selectmenu_vortex li").attr("data-view",atr);
		$(".thatvega_morelock").css('transform','rotate(0deg)');
	});
});
$(function() {
    $(".selectmenu_vortex").each(function() {
        var count = 0;
        $(this).click(function(){
        count++;
        if (count === 1) {
		$(".thatvega_morelock").css('transform','rotate(180deg)');
        }
        else{
		$(".thatvega_morelock").css('transform','rotate(0deg)');
		count = 0;
        }
        });
    });
});
$(document).ready(function(){
$("#lock-set").click(function(){
	$("#fullscreenlockset").fadeIn(100,function(){
		$(".whitelock_postset").fadeIn(100);
	});
});
$("a.closelockvern").click(function(){
$(".or_485412_ar").empty();	
if($(".selectmenu_vortex li").attr("data-view") == "v4" || $(".selectmenu_vortex li").attr("data-view") == "v5"){
$(".insetvortex_podv div").each(function(){
	var img = $(this).find(".vortextimg_lockv").attr("data-id");
	var val = $(".or_485412_ar").text();
	var htm = ""+ img +"-"+ val +"";
	$(".or_485412_ar").text(htm);
});
}else {}
if($(".selectmenu_vortex li").attr("data-view") == "v4" && $(".insetvortex_podv div").length == 0 || $(".selectmenu_vortex li").attr("data-view") == "v5" && $(".insetvortex_podv div").length == 0 ){
$(".apeend_lockpost_viewnasd").empty();
$(".whitelock_postset").css('height','180px');
$(".selectmenu_vortex").css('width','175px');
$(".selectmenu_vortex li").attr("data-view","v1");
var txt = $(".publick_viewmain").attr("data-text");
var pht = '<p>'+ txt +'</p>';
$(".porhguh_veoplqwe p").html(pht);
$(".scgicon_01510,.selectmenu_vortex p").remove();
var spn = $(".publick_viewmain").find("span").text();
var sht = '<p>'+ spn +'</p>';
$(".selectmenu_vortex li").append(sht);
var svg = $(".publick_viewmain").find("svg");
svg.clone().appendTo(".selectmenu_vortex li");
$(".selectmenu_vortex li svg").each(function(){
if($(this).attr("class") == "thatvega_morelock"){
}else {
$(this).attr("class","scgicon_01510");
}
});
}
$(".whitelock_postset").fadeOut(100,function(){
	$("#fullscreenlockset").fadeOut(100);
});
});
$(".selectmenu_vortex").click(function(){
	$(".menuvok_postslock_view").slideToggle(250);
});
});
</script>
</div>
<div class="all_alertstem_window">
<div class="fullscreen" id="alertback_system"></div>
<div class="alertsystem_body">
<div class="topbottom_alertmrg">
<div class="alertext_maindiv"><span></span></div>
<div class="alertsystembtns">
<button type="button" class="alertsustem_okbutton">موافق</button>
<button type="button" class="alertsystem_cnterhrf">المزيد</button>
</div>
</div>
</div>
<script>
function alertText(text,center){
	$("#alertback_system,.alertsystem_body").fadeIn(100,function(){
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");
	});
	$(".alertext_maindiv span").html(text);
	$(".alertsystem_cnterhrf").click(function(){
	    if(center == false){
			$(".alertsustem_okbutton").click();
		}else {
		window.location = center;
		}
	});
	$(".alertsustem_okbutton,#alertback_system").click(function(){
    $("#alertback_system,.alertsystem_body").fadeOut(100,function(){
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
	});		
	});
}
</script>
</div>
<div class="all_postsettings_view">
<div class="fullscreen" id="fullpostsetting"></div>
<div class="insettings_post">
<a class="closepostlock">
<i class="fa fa-times" aria-hidden="true"></i>
</a>
<div class="mainsetting_postwh">
<div class="loadingmin_45484">
<div class="showbox_postset">
<div class="loader_postset">
<svg class="circular_postset" viewBox="25 25 50 50">
<circle class="path_circle_postset" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>
</div>
<div class="loadingjax_45484"></div>
<div class="menutop_setpostdes">
<button type="button" class="vortexsub_45484" disabled="disabled">تطبيق</button>
<span>الاعدادات العامة لهذه التدوينة</span>
<svg viewBox="0 0 24 24" class="vortextopsvg_454" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
<div class="return_45484">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
</svg>
</div>
</div>
<div class="homes_scale_45484 scale_454">
<div class="secoundescrip_postset">
<span>اختر القسم الذي تريد تعديل خصوصيته</span>
</div>
<div class="flexset_postwhb">
<div class="insetflex_454 repostdiv_lockset" data-text="تغيير خصوصية عرض الاشخاص اللذين اعادو تدوين التدوينة">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
<path d="M1752 4042 c1 -5 75 -99 163 -210 l160 -201 800 -3 c710 -3 804 -5 835 -19 46 -21 89 -65 111 -114 17 -37 19 -78 19 -592 l0 -553 -315 0 c-173 0 -315 -3 -315 -7 0 -11 836 -1055 844 -1054 8 0 846 1045 846 1055 0 3 -142 6 -315 6 l-315 0 0 534 c0 577 -5 647 -50 763 -67 175 -201 301 -397 376 l-58 22 -1008 3 c-571 1 -1007 -1 -1005 -6z"></path>
<path d="M642 3311 c-232 -291 -422 -531 -422 -535 0 -3 142 -6 315 -6 l315 0 0 -534 c0 -577 5 -647 50 -763 67 -175 201 -301 397 -376 l58 -22 1008 -3 c571 -1 1007 1 1005 6 -1 5 -75 99 -163 210 l-160 201 -800 3 c-710 3 -804 5 -835 19 -46 21 -89 65 -111 114 -17 37 -19 78 -19 593 l0 552 315 0 c173 0 315 3 315 8 0 5 -812 1026 -838 1054 -4 4 -197 -231 -430 -521z"></path>
</g>
</svg>
</div>
<div class="insetflex_454 commimag_lockset" data-text="الغاء او تفعيل الصور في التعليقات علي التدوينة">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <circle cx="12" cy="12" r="3.2"></circle>
    <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
<div class="insetflex_454 likepost_lockset" data-text="تغيير خصوصية عرض الاشخاص المعجبين بالتدوينة">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</div>
<div class="insetflex_454 dislikepost_lockset" data-text="تغيير خصوصية عرض الاشخاص الغير معجبين بالتدوينة">
<svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 88.000000 85.000000">
<g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)">
<path d="M403 677 l-163 -163 0 -232 0 -233 25 -24 c24 -25 25 -25 233 -25 185 0 212 2 230 17 12 10 50 88 86 174 57 134 66 165 66 217 0 44 -5 66 -19 83 -18 23 -27 24 -165 29 l-145 5 48 105 c26 58 51 118 55 134 10 41 -16 76 -56 76 -28 0 -53 -20 -195 -163z"></path>
<path d="M0 240 l0 -240 80 0 80 0 0 240 0 240 -80 0 -80 0 0 -240z"></path>
</g>
</svg>
</div>
<div class="insetflex_454 querypost_lockset" data-text="تعديل الاشخاص المسموح لهم برؤية هذه التدوية">
<svg class="minmax_ofsseting_svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"></path>
</svg>
</div>
</div>
<div class="botpost_buetidesc descripst_545">
<p>يمكنك اعداد خصائص التدوينة كتغيير خصوصيتها وتقيدها وغير ذلك</p>
</div>
</div>
<div class="repostscale_45484 scale_454">
<div class="secoundescrip_postset">
<span>اختر خصوصية عرض اللذين اعادو تدوين التدوينة</span>
</div>
<div class="inselect_repost_45484">
<div class="personaly_45484" data-text="انت فقط من يمكنه رؤية هذا">
<h3>عرض خاص</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"></path>
</svg>
</div>
<div class="publick_45484 selected_erpost_454" data-text="اي شخص لدية صلاحية الوصول للتدوينة">
<h3>عرض عام</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path>
</svg>
</div>
</div>
<div class="botpost_buetidesc vertexit_454">
<p>اي شخص لدية صلاحية الوصول للتدوينة</p>
</div>
</div>
<div class="comimgscale_45484 scale_454">
<div class="secoundescrip_postset">
<span>اختر الغاء او تفعيل الصور في التعليقات</span>
</div>
<div class="inselect_comimg_45484">
<div class="useitforcomimg_45484">
<h3>الغاء التفعيل</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg>
</div>
</div>
<div class="botpost_buetidesc cedsersx_454">
<p>اضغط لمنع الاشخاص من وضع الصور في التعليقات علي التدوينة</p>
</div>
</div>
<div class="likeitscale_45484 scale_454">
<div class="secoundescrip_postset">
<span>اختر خصوصية عرض اللذين اعجبو بالتدوينة</span>
</div>
<div class="inselect_likeit_45484">
<div class="personaly_like_45484" data-text="انت فقط من يمكنه رؤية هذا">
<h3>عرض خاص</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"></path>
</svg>
</div>
<div class="publick_like_45484 selected_erpost_454" data-text="اي شخص لدية صلاحية الوصول للتدوينة">
<h3>عرض عام</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path>
</svg>
</div>
</div>
<div class="botpost_buetidesc cesdedx_454">
<p>اي شخص لدية صلاحية الوصول للتدوينة</p>
</div>
</div>
<div class="dslikescale_45484 scale_454">
<div class="secoundescrip_postset">
<span>اختر خصوصية عرض اللذين لم يعجبو بالتدوينة</span>
</div>
<div class="inselect_dslike_45484">
<div class="personaly_dislike_45484" data-text="انت فقط من يمكنه رؤية هذا">
<h3>عرض خاص</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"></path>
</svg>
</div>
<div class="publick_dislike_45484 selected_erpost_454" data-text="اي شخص لدية صلاحية الوصول للتدوينة">
<h3>عرض عام</h3>
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"></path>
</svg>
</div>
</div>
<div class="botpost_buetidesc cesdeds_454">
<p>اي شخص لدية صلاحية الوصول للتدوينة</p>
</div>
</div>
</div>
<script>
$(document).ready(function(){
$(".dislikepost_lockset").click(function(){
	$(".return_45484").attr("data-return",".dslikescale_45484");
	$(".homes_scale_45484").removeClass("inscale_454");
	setTimeout(function(){
	$(".homes_scale_45484").fadeOut(0);
	$(".dslikescale_45484").fadeIn(0);
	$(".dslikescale_45484").addClass("inscale_454");
	$(".return_45484,.vortexsub_45484").fadeIn(200);
	},200);
});
$(".likepost_lockset").click(function(){
	$(".return_45484").attr("data-return",".likeitscale_45484");
	$(".homes_scale_45484").removeClass("inscale_454");
	setTimeout(function(){
	$(".homes_scale_45484").fadeOut(0);
	$(".likeitscale_45484").fadeIn(0);
	$(".likeitscale_45484").addClass("inscale_454");
	$(".return_45484,.vortexsub_45484").fadeIn(200);
	},200);
});
$(".repostdiv_lockset").click(function(){
	$(".return_45484").attr("data-return",".repostscale_45484");
	$(".homes_scale_45484").removeClass("inscale_454");
	setTimeout(function(){
	$(".homes_scale_45484").fadeOut(0);
	$(".repostscale_45484").fadeIn(0);
	$(".repostscale_45484").addClass("inscale_454");
	$(".return_45484,.vortexsub_45484").fadeIn(200);
	},200);
});
$(".commimag_lockset").click(function(){
	$(".return_45484").attr("data-return",".comimgscale_45484");
	$(".homes_scale_45484").removeClass("inscale_454");
	setTimeout(function(){
	$(".homes_scale_45484").fadeOut(0);
	$(".comimgscale_45484").fadeIn(0);
	$(".comimgscale_45484").addClass("inscale_454");
	$(".return_45484,.vortexsub_45484").fadeIn(200);
	},200);
});
$(".return_45484 svg").click(function(){
	$(".return_45484,.vortexsub_45484").fadeOut(200);
	var reus = $(".return_45484").attr("data-return");
	$(reus).removeClass("inscale_454");
	setTimeout(function(){
	var reus = $(".return_45484").attr("data-return");
	$(reus).fadeOut(0);
	$(".homes_scale_45484").fadeIn(0);
	$(".homes_scale_45484").addClass("inscale_454");
	},200);
});
$.fn.settingsView = function(){
var postid = $(this).closest(".post-main-tvi").attr("id");
if($(".vortexsub_45484").attr("post-id") !== postid){
$(".vortexsub_45484").attr("loading","loading");
$(".vortexsub_45484").attr("post-id",postid);
}else {}
$("#fullpostsetting,.insettings_post").fadeIn(250);
    setTimeout(function(){/*
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").addClass("blurfullscreen");*/
	if($(".vortexsub_45484").attr("loading") !== "loading"){
        $(".loadingmin_45484").fadeOut(0,function(){
	        $(".homes_scale_45484").fadeIn(0);
	        $(".homes_scale_45484").addClass("inscale_454");
        });
	}else {}
	if($(".vortexsub_45484").attr("loading") == "loading"){
	var postid = $(".vortexsub_45484").attr("post-id");
	$.get("../ajax-php/postsettings.php",{session: "submit",postid: postid},function(e){
		$(".scripts").append(e);
	    $(".loadingmin_45484").fadeOut(100,function(){
	        $(".homes_scale_45484").fadeIn(0);
	        $(".homes_scale_45484").addClass("inscale_454");
			$(".vortexsub_45484").attr("loading","loaded");
        });
    });
	}else {}
},250);
}
$(".insetflex_454").mouseenter(function(){
	$(".descripst_545 p").fadeOut(150);
	var text = $(this).attr("data-text");
	$(".descripst_545 p").attr("data-text",text);
	setTimeout(function(){
	var text = $(".descripst_545 p").attr("data-text");
	$(".descripst_545 p").text(text);
	$(".descripst_545 p").fadeIn(150);
	},150);
});
$(".homes_scale_45484").mouseleave(function(){
	$(".descripst_545 p").fadeOut(150,function(){
    var text = "يمكنك اعداد خصائص التدوينة كتغيير خصوصيتها وتقيدها وغير ذلك";
	$(".descripst_545 p").text(text);
	$(this).fadeIn(150);
	});
});
$(".personaly_like_45484").click(function(){
	$(this).addClass("selected_erpost_454");
    $(".publick_like_45484").removeClass("selected_erpost_454");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","like");
	$(".vortexsub_45484").attr("data-type","1");
});
$(".publick_like_45484").click(function(){
	$(this).addClass("selected_erpost_454");
    $(".personaly_like_45484").removeClass("selected_erpost_454");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","like");
	$(".vortexsub_45484").attr("data-type","2");
});
$(".personaly_like_45484,.publick_like_45484").mouseenter(function(){
	$(".cesdedx_454 p").fadeOut(150);
	var text = $(this).attr("data-text");
	$(".cesdedx_454 p").attr("data-text",text);
	setTimeout(function(){
	var text = $(".cesdedx_454 p").attr("data-text");
	$(".cesdedx_454 p").text(text);
	$(".cesdedx_454 p").fadeIn(150);
	},150);
});
$(".likeitscale_45484").mouseleave(function(){
	$(".cesdedx_454 p").fadeOut(150,function(){
    var text = "اي شخص لدية صلاحية الوصول للتدوينة";
	$(".cesdedx_454 p").text(text);
	$(this).fadeIn(150);
	});
});


$(".personaly_dislike_45484").click(function(){
	$(this).addClass("selected_erpost_454");
    $(".publick_dislike_45484").removeClass("selected_erpost_454");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","dislike");
	$(".vortexsub_45484").attr("data-type","1");
});
$(".publick_dislike_45484").click(function(){
	$(this).addClass("selected_erpost_454");
    $(".personaly_dislike_45484").removeClass("selected_erpost_454");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","dislike");
	$(".vortexsub_45484").attr("data-type","2");
});
$(".personaly_dislike_45484,.publick_dislike_45484").mouseenter(function(){
	$(".cesdeds_454 p").fadeOut(150);
	var text = $(this).attr("data-text");
	$(".cesdeds_454 p").attr("data-text",text);
	setTimeout(function(){
	var text = $(".cesdeds_454 p").attr("data-text");
	$(".cesdeds_454 p").text(text);
	$(".cesdeds_454 p").fadeIn(150);
	},150);
});
$(".dslikescale_45484").mouseleave(function(){
	$(".cesdeds_454 p").fadeOut(150,function(){
    var text = "اي شخص لدية صلاحية الوصول للتدوينة";
	$(".cesdeds_454 p").text(text);
	$(this).fadeIn(150);
	});
});
$(".personaly_45484").click(function(){
	$(this).addClass("selected_erpost_454");
    $(".publick_45484").removeClass("selected_erpost_454");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","repost");
	$(".vortexsub_45484").attr("data-type","1");
});
$(".publick_45484").click(function(){
	$(this).addClass("selected_erpost_454");
    $(".personaly_45484").removeClass("selected_erpost_454");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","repost");
	$(".vortexsub_45484").attr("data-type","2");
});
$(".personaly_45484,.publick_45484").mouseenter(function(){
	$(".vertexit_454 p").fadeOut(150);
	var text = $(this).attr("data-text");
	$(".vertexit_454 p").attr("data-text",text);
	setTimeout(function(){
	var text = $(".vertexit_454 p").attr("data-text");
	$(".vertexit_454 p").text(text);
	$(".vertexit_454 p").fadeIn(150);
	},150);
});
$(".repostscale_45484").mouseleave(function(){
	$(".vertexit_454 p").fadeOut(150,function(){
    var text = "اي شخص لدية صلاحية الوصول للتدوينة";
	$(".vertexit_454 p").text(text);
	$(this).fadeIn(150);
	});
});
$(".useitforcomimg_45484").click(function(){
    $(".vortexsub_45484").removeAttr("disabled");
	$(".vortexsub_45484").attr("data-vers","comimg");
	if($(this).attr("doing") !== "true"){
	$(".vortexsub_45484").attr("data-type","1");
    var html = '<path d="M0 0h24v24H0z" fill="none"></path>' +
    '<path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>';
	$(".useitforcomimg_45484 svg").html(html);
	$(".useitforcomimg_45484 h3").text("تفعيل الصور");
	$(".cedsersx_454 p").text("اضغط للسماح للاشخاص بوضع الصور في التعليقات علي التدوينة");
	$(this).attr("doing","true");
	}else {
	$(".vortexsub_45484").attr("data-type","2");
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>' +
    '<path d="M0 0h24v24H0z" fill="none"></path>';
	$(".useitforcomimg_45484 svg").html(html);
	$(".useitforcomimg_45484 h3").text("الغاء التفعيل");
	$(".cedsersx_454 p").text("اضغط لمنع الاشخاص من وضع الصور في التعليقات علي التدوينة");
	$(this).attr("doing","false");
	}
});
$("#fullpostsetting,.closepostlock i").click(function(){
$("#fullpostsetting,.insettings_post").fadeOut(100,function(){
	$(".left-main, .right-main, .ertineo_center, .follow_4353, .poats ,.center_left_main,.towcolumnidval,.allpagetopmain,.centercolumain").removeClass("blurfullscreen");
	$(".loadingmin_45484").fadeIn(0,function(){
	    $(".homes_scale_45484,.repostscale_45484,.comimgscale_45484,.likeitscale_45484,.dslikescale_45484,.vortexsub_45484,.return_45484").fadeOut(0);
	    $(".homes_scale_45484,.repostscale_45484,.comimgscale_45484,.likeitscale_45484,.dslikescale_45484").removeClass("inscale_454");
    });
});
});
});
</script>
<script>
function hideloadbbom(){
	$(".return_45484,.vortexsub_45484").fadeOut(200);
	var reus = $(".return_45484").attr("data-return");
	$(reus).removeClass("inscale_454");
	setTimeout(function(){
	var reus = $(".return_45484").attr("data-return");
	$(reus).fadeOut(0);
	$(".homes_scale_45484").fadeIn(0);
	$(".homes_scale_45484").addClass("inscale_454");
	},200);	
}
$(".vortexsub_45484").click(function(){
$(this).attr("disabled","disabled");
$(".loadingjax_45484").fadeIn(0);
var vorxer = $(this).attr("data-vers");
var type = $(this).attr("data-type");
var postid = $(this).attr("post-id");
if(vorxer == "like"){
$.post("../ajax-php/postsettings.php",{sublike: "submit",postid: postid,type: type},function(e){$(".scripts").html(e)});
}else {}
if(vorxer == "dislike"){
$.post("../ajax-php/postsettings.php",{subdislike: "submit",postid: postid,type: type},function(e){$(".scripts").html(e)});
}else {}
if(vorxer == "repost"){
$.post("../ajax-php/postsettings.php",{subrepost: "submit",postid: postid,type: type},function(e){$(".scripts").html(e)});
}else {}
if(vorxer == "comimg"){
$.post("../ajax-php/postsettings.php",{subcomimg: "submit",postid: postid,type: type},function(e){$(".scripts").html(e)});
}else {}
});
</script>
</div>
</div>
</div>