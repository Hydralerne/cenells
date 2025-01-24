<?php

include ("../connectdb/index.php");

?>
<?php

if(isset($_GET['search'])){
$search = addslashes(htmlspecialchars(strip_tags(trim($_GET['search']))));
$search = preg_replace('/ +/', ' ', $search);
$sql_res = mysql_query("SELECT * FROM users WHERE name like '$search%' or user_name='$search' order by id LIMIT 6");
while($row = mysql_fetch_array($sql_res)){
$name = $row['name'];
$email = $row['c_email'];
$img = $row['pro_img'];
$id = $row['id'];
$username = $row['user_name'];
$check = $row['c_check'];
?>
<a href="../<?php echo $id; ?>">
<div class="insetsearch_result">
<img src="../upload/images/low/<?php echo $img;?> " id="imgpro-search" />
<span class="name-search">
<?php
echo $name; 
if($check == "true"){
echo '
<img src="../img/icons/check.png" id="check-busearch"/>
';
}else {}
?>
</span>
<span class="user-name-search">@<?php echo $username; ?></span>
</div>
</a>
<?php 
}
}
?>
