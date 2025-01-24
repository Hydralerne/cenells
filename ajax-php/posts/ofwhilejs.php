<script>
$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}

$(".like-many-num,.dislike-many-num,.comment-vlaunum").digits();

$(window).scroll(function() {
    $('.post-main-tvi').each(function() {
        if(isInView(this)) {
            var seenVal = $(this).attr("id");
			var viewchk = $(this).attr("data-view");
			if(viewchk !== "true"){
			$.post("../ajax-php/viewpost-add.php",{subviewpost: "submit",viewpostid: seenVal});
			$(this).attr("data-view","true");
			}else {}
        }
    });
});

function isInView(el) {
    windowTop = $(window).scrollTop();
    windowButtom = windowTop + $(window).height();
    elTop = $(el).offset().top;
    elButtom = elTop + $(el).height();

    return (elTop >= windowTop && elButtom <= windowButtom);
}
$(document).ready(function(){
$(function() {    
$(".clicksvg_viewimoji").each(function() {
var count = 0;
$(this).click(function(){
count++;
if (count === 1) {
    var html = '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>' +
    '<path d="M0 0h24v24H0z" fill="none"/>';
	$(this).html(html);
	$(this).closest(".post-main-tvi").find(".allcomment-show").css('margin-top','175px');
	var value = $(this).closest(".post-main-tvi").attr("id");
	$("#valpostemokim").val(value);
	setTimeout(function(){
	var postid = $("#valpostemokim").val();
	$(".post#"+ postid +" .sectionemoji_posts").fadeIn(250);
	$(".post#"+ postid +" .allcomment-show").animate({'margin-top':'175px'},0);
	},300);
}
else{
    var html = '<path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"></path>' +
    '<path d="M0 0h24v24H0z" fill="none"></path>';
	$(this).html(html);
	$(this).closest(".post-main-tvi").find(".sectionemoji_posts").fadeOut(250);
	var value = $(this).closest(".post-main-tvi").attr("id");
	$("#valpostemokim").val(value);
	setTimeout(function(){
	var postid = $("#valpostemokim").val();
	$(".post#"+ postid +" .allcomment-show").css('margin-top','65px');
	$(".post#"+ postid +" .sectionemoji_posts").fadeOut(0);
	},250);
count = 0;
}
});
});
});/*
$(".clickemoji_post").mouseenter(function(){
	var post = $(this).closest(".post-main-tvi").attr("id");
	$("#valposthoveid").val(post);
    var text = $(this).attr("data-text");
	$("#valposthovemo").val(text);
	setTimeout(function(){
	if($("#valposthovemo").val() !== ""){
	var postid = $("#valposthoveid").val();
	var text = $("#valposthovemo").val();
	$(".post#"+ postid +" .textemoji_descrip").text(text);
	$(".post#"+ postid +" .textemoji_descrip").fadeIn(100);
	}else {}
	},100);
});
$(".clickemoji_post").mouseleave(function(){
	$("#valposthovemo").val("");
	$(".textemoji_descrip").fadeOut(100);
});*/
});


</script>
