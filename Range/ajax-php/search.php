<?php
$connection = mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
$database = mysql_select_db('cemail') or die(mysql_error());

if($_POST)
{
$filinpusearch = addslashes(htmlspecialchars(strip_tags(trim($_POST['search']))));
$inpusearch = preg_replace('/ +/', ' ', $filinpusearch);

$sql_res = mysql_query("SELECT * FROM users WHERE name like '$inpusearch%' or user_name='$inpusearch' or c_email='$inpusearch'  order by id LIMIT 6");
while($row = mysql_fetch_array($sql_res))
{
$name = $row['name'];
$email = $row['c_email'];
$img = $row['pro_img'];
$id = $row['id'];
$username = $row['user_name'];
$check = $row['c_check'];
?>
<?php
echo '
<a href="../../'.$id.'">
';
?>
<?php
if($check == "true"){
echo '
<div id="blue-hover" class="show" align="left">
';
}else{
echo '
<div id="red-hover" class="show" align="left">
';
}
echo '
<img src="../../upload/images/'.$img.'" id="imgpro-search" />
';
?>
<span class="name-search">
<?php
echo $name; 
if($check == "true"){
	
	echo '
	<img src="../../img/icons/check.png" id="check-busearch"/>
	';
}
?>
</span>
<?php
if(!empty($username)){
echo '
<span class="user-name-search">@'.$username.'</span>
';
}
?>
</div>
</a>

<?php 
} 
?>

<div class="search-more">
<?php
echo '
<a href="search?q='.$inpusearch.'">
';
?>
<h4>
بحث عن مزيد من النتائج
</h4>
<i class="fa fa-search" aria-hidden="true"></i>

</a>
</div>

<?php 
} 
?>
