<?php
$connection = mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
$database = mysql_select_db('cemail') or die(mysql_error());

if(isset($_POST['submit'])){
$filinpusearch = addslashes(htmlspecialchars(strip_tags(trim($_POST['search']))));
$inpusearch = preg_replace('/ +/', ' ', $filinpusearch);

$sql_res = mysql_query("SELECT * FROM cerange WHERE name like '$inpusearch%' OR number='$inpusearch' order by id LIMIT 6");
while($row = mysql_fetch_array($sql_res)){
$name = $row['name'];
$img = $row['pro_img'];
$id = $row['id'];
$username = $row['r_user'];
$number = $row['number'];
$cemailid = $row['cemail_id'];
$check = $row['r_check'];
?>
<a href="#">
<div class="mini_0000" id="<?php echo $id; ?>" cename="<?php echo $username; ?>">
<img class="imgmain_0000" src="../../upload/images/low/<?php echo $img; ?>" />
<h3><?php echo $name; ?></h3>
<p><?php echo $number; ?></p>
<?php
if(empty($cemailid)){
	echo '<img class="rangeimg" src="../2.png" />';
}else {
	echo '<img class="rangeimg" src="../2.png" />';
	echo '<img class="cemalimg" src="../5.png" />';
}
?>
<script>
$(".mini_0000#<?php echo $id; ?>").click(function(){
$("#sidenurlname").val("<?php echo $name; ?>");
$("#sidenurlimag").val("<?php echo $img; ?>");
$("#sidenurluser").val("<?php echo $username; ?>");
$("#sidenurlusid").val("<?php echo $id; ?>");
$("#hidenumb_4444").val("<?php echo $username; ?>");
$("#mibobo_4563ho").val("<?php echo $id; ?>");
uploadserch();
});
</script>
</div>
</a>
<?php
}
?>
<div class="more_resault">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M20 19.59V8l-6-6H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c.45 0 .85-.15 1.19-.4l-4.43-4.43c-.8.52-1.74.83-2.76.83-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L20 19.59zM9 13c0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3-3 1.34-3 3z"/>
</svg>
<h3>بحث عن مزيد من النتائج</h3>
</div>
<?php
}
?>
