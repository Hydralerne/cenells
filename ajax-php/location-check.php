<?php
mysql_connect('127.0.0.1','root','asdwqe123');
mysql_select_db("contries");
?>


<?php

if(isset($_POST['setcont'])){
$country = addslashes(htmlspecialchars(trim($_POST['country'])));
$country = preg_replace('/ +/', ' ', $country);
if(!empty($country) || $country == " "){
$countquery = mysql_query("SELECT * FROM countries WHERE name LIKE '$country%' LIMIT 50");
$count = mysql_num_rows($countquery);
if($count == 0){
$countquery = mysql_query("SELECT * FROM countries WHERE name LIKE '%$country%' LIMIT 50");
$count = mysql_num_rows($countquery);
if($count == 0){
$search = mysql_query("SELECT * FROM countries WHERE id='99999999' LIMIT 50");
	echo'<div class="contry_fuction disabled"><span>Country Not Found</span></div>';
}else {
$search = mysql_query("SELECT * FROM countries WHERE name LIKE '%$country%' LIMIT 50");
}
}else {
$search = mysql_query("SELECT * FROM countries WHERE name LIKE '$country%' LIMIT 50");
}
while($fetch = mysql_fetch_array($search)){
	echo'<div class="contry_fuction" data-id="'.$fetch['id'].'"><span>'.$fetch['name'].'</span><p>'.$fetch['sortname'].'</p></div>';
}
echo '
<script>
$(".contry_fuction").click(function(){
	var val = $(this).attr("data-id");
	$("#country-type-text").attr("data-id",val);
	$(".ajax_contryresult").fadeOut(0);
	var name = $(this).find("span").text();
	$("#country-type-text").val(name);
	$("#country-type-text").addClass("done_country");
	$("#city-type-text").removeAttr("disabled");
});
</script>
';
}else {}
}
if(isset($_POST['setcity'])){
$state = addslashes(htmlspecialchars(trim($_POST['state'])));
$country = addslashes(htmlspecialchars(trim($_POST['country'])));
$state = preg_replace('/ +/', ' ', $state);
$country = preg_replace('/ +/', '', $country);

if(!empty($state) || $state !== " " || !empty($country)){
$countquery = mysql_query("SELECT * FROM states WHERE name LIKE '$state%' AND country_id='$country' LIMIT 50");
$count = mysql_num_rows($countquery);
if($count == 0){
$countquery = mysql_query("SELECT * FROM states WHERE name LIKE '%$state%' AND country_id='$country' LIMIT 50");
$count = mysql_num_rows($countquery);
if($count == 0){
$countcity = mysql_query("SELECT * FROM cities WHERE name LIKE '$state%' AND country_id='$country' LIMIT 50");
$city_count = mysql_num_rows($countcity);
if($city_count == 0){
$countcity = mysql_query("SELECT * FROM cities WHERE name LIKE '%$state%' AND country_id='$country' LIMIT 50");
$city_count = mysql_num_rows($countcity);
if($city_count == 0){
}else {
$cityquery = mysql_query("SELECT * FROM cities WHERE name LIKE '%$state%' AND country_id='$country' LIMIT 50");
}
}else {
$cityquery = mysql_query("SELECT * FROM cities WHERE name LIKE '$state%' AND country_id='$country' LIMIT 50");
}
if(!empty($cityquery)){
while($ftci = mysql_fetch_array($cityquery)){
	echo'<div class="cities_fuction" data-id="'.$ftci['id'].'" data-type="city"><span>'.$ftci['name'].'</span></div>';
}
}else {
	$empty = "true";
}
}else {
$search = mysql_query("SELECT * FROM states WHERE name LIKE '%$state%' AND country_id='$country' LIMIT 50");
}
}else {
$search = mysql_query("SELECT * FROM states WHERE name LIKE '$state%' AND country_id='$country' LIMIT 50");
}
if(!empty($search)){
while($fetch = mysql_fetch_array($search)){
	echo'<div class="cities_fuction" data-id="'.$fetch['id'].'" data-type="state"><span>'.$fetch['name'].'</span></div>';
}
}else {}
if($empty == "true"){
	echo'<div class="cities_fuction disabled"><span>City Not Found</span></div>';
}
echo '
<script>
$(".cities_fuction").click(function(){
	var val = $(this).attr("data-id");
	$("#city-type-text").attr("data-id",val);
	$(".ajax_cityresult").fadeOut(0);
	var name = $(this).find("span").text();
	$("#city-type-text").val(name);
	$("#city-type-text").addClass("done_country");
});
</script>
';
}else {}
}
?>