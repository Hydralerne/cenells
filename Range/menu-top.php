


<div class="p-menu-t">
<div class="container">
<div class="search_range">
<img src="../../img/profile/header/search.png" class="searchiconra" />
<input type="text" class="serchranip" placeholder="بحث عن اشخاص" />
<div id="search_result"></div>
</div>
<div class="icons_range_7878">
<svg id="setrang_555" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path>
</svg>
<img src="../../img/profile/header/noti.png" class="alert_rang" />
</div>
<div class="info_rangeacc">
<img src="../../img/profile/account-icons/account.png" class="imgheader" />
<h3>
<?php
echo $info['first_name'];
?>
</h3>
</div>
</div>

</div>


<script>
/*
$(document).mouseup(function (e){
var container = $(".count_follal,.follow_alert_system");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".follow_alert_system").fadeOut(100);
}
});
$(document).mouseup(function (e){
var container = $("#message-show-menu,.message_system");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".message_system").fadeOut(100);
}
});
$(document).mouseup(function (e){
var container = $(".noti_ico,.noti_system");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".noti_system").fadeOut(100);
}
});*/
$(".serchranip").focusin(function(){
	$(this).css('border-radius','0px');
});
$(document).mouseup(function (e){
var container = $(".serchranip");
var sentainer = $("#search_result");
if (!container.is(e.target) && container.has(e.target).length === 0 && sentainer.has(e.target).length === 0) {
$("#search_result").fadeOut(0);
$(".serchranip").css('border-radius','100px');
}
});
/*
$(document).mouseup(function (e){
var container = $(".account-menu,#p-img");
if (!container.is(e.target) && container.has(e.target).length === 0) {
$(".account-menu").fadeOut(100);
}
});

$("#message-show-menu").click(function(){
	$(".message_system").fadeIn(100);
});
$("#addf").click(function(){
	$(".follow_alert_system").fadeIn(100);
});
$(".noti_ico").click(function(){
	$(".alert_ico_43 div").fadeOut();
});
$("#addf").click(function(){
	$(".ajax_count_foll div").fadeOut();
});
	
    $.post("../ajax-php/alert-count.php", {getcount: "submit"} ,function(post){ $(".ajax_count_alert").html(post);});
    $.post("../ajax-php/alert-count.php", {getfolcount: "submit"} ,function(post){ $(".ajax_count_foll").html(post);});
    $.post("../ajax-php/alert-follow.php", {sufollow: "submit"} ,function(post){ $(".noti_follow").html(post);});
    $.post("../ajax-php/alert-noti.php", {getnotimin: "submit"} ,function(post){ $(".noti").html(post);});

$(".noti_ico").click(function(){
	$(".noti_system").fadeIn(100);
});

*/

$(".serchranip").keyup(function(){
var search = $(this).val();
if(search == ''){
	$("#search_result").fadeOut(0);
}else {
	$.post("../search.php",{submit: "submit",search: search},function(html){$("#search_result").fadeIn(100);$("#search_result").html(html);});
}
});

$("#search_result").ready("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#serchranip').val(decoded);
});

$(document).ready(function(){

$("#serchranip").keydown(function(event){
if($(this).val().length == 0) {
}else{
    if (event.keyCode == 13) {
       var openhref = $(".search-more a").attr("href");
       window.location.replace("../"+ openhref);      
	 }
}  
   
   });

});

/*
$(document).keyup(function(event){
    if(event.keyCode == 27){
		$(".show_all_message,.message-mini").fadeOut();
    }
});
$(document).focusin(function() {
		$(".show_all_message,.message-mini").fadeOut();
});

*/
$(document).ready(function(){
function checkPersian( firstChar ) {
    if( typeof this.characters == 'undefined' )
        this.characters = ['ث','ا', 'ب', 'پ', 'ت', 'أ', 'ج', 'چ', 'ح', 'خ', 'ج','د','ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ي'];
    return this.characters.indexOf( firstChar ) != -1;
}
function checkInput(){
	var x = checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'rtl' : 'ltr';
	var y = checkPersian( jQuery( this ).val().substr( 0, 1 ) ) ? 'right' : 'left';
    $(this).css('direction',x);
    $(this).css('text-align',y);

if($(".serchranip").val() == ""){
	$(this).css({'text-align': 'right','direction': 'rtl'});
}
}
$(".serchranip").change(checkInput);
$(".serchranip").keydown(checkInput);
$(".serchranip").keyup(checkInput);
});
</script>


<div class="alert_scripts"></div>

