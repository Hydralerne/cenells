<?php
include ("../connectdb/index.php");
?>



<?php

$search = addslashes(htmlspecialchars(strip_tags($_POST['search'])));
$limit = "8";
$offset = "0";
$search = preg_replace('/ +/', ' ', $search);
if(isset($_POST['submit'])){
if(!empty($search) || $search !== " "){
if(substr($search,0,1) == "@"){
$search = substr($search,1);
$query = mysql_query("SELECT * FROM users WHERE user_name='$search' LIMIT $limit offset $offset");
}else {
$filquery = mysql_query("SELECT * FROM users WHERE first_name like '$search%' LIMIT $limit offset $offset");
$count = mysql_num_rows($filquery);
if($count == 0){
$filquery = mysql_query("SELECT * FROM users WHERE last_name like '$search%' LIMIT $limit offset $offset");
$count = mysql_num_rows($filquery);
if($count == 0){
$filquery = mysql_query("SELECT * FROM users WHERE first_name like '%$search%' LIMIT $limit offset $offset");
$count = mysql_num_rows($filquery);
if($count == 0){
$filquery = mysql_query("SELECT * FROM users WHERE last_name like '%$search%' LIMIT $limit offset $offset");
$count = mysql_num_rows($filquery);
if($count == 0){
$query = mysql_query("SELECT * FROM users WHERE first_name like '%".substr($search,0,3)."%' LIMIT $limit offset $offset");
}else {
$query = mysql_query("SELECT * FROM users WHERE last_name like '%$search%' LIMIT $limit offset $offset");
}
}else {
$query = mysql_query("SELECT * FROM users WHERE first_name like '%$search%' LIMIT $limit offset $offset");
}
}else {
$query = mysql_query("SELECT * FROM users WHERE last_name like '$search%' LIMIT $limit offset $offset");
}
}else {
$query = mysql_query("SELECT * FROM users WHERE first_name like '$search%' LIMIT $limit offset $offset");
}
}
while($fetch = mysql_fetch_assoc($query)){
include "search-body.php";
}
}else {}
}

?>
