<?php
$hostname = '127.0.0.1';
ob_start();
session_start();
$username = 'root';
$password = 'asdwqe123';
$dbh1 = mysql_connect($hostname, $username, $password); 
$dbh2 = mysql_connect($hostname, $username, $password, true); 
mysql_select_db('cemail', $dbh1);
mysql_select_db('contries', $dbh2);

function profile_connected($dbh1){
	
	$data = array();
	$c_email = $_SESSION['c_email'];
	$query = mysql_query("SELECT * FROM users WHERE c_email='$c_email'",$dbh1);

	while($rows = mysql_fetch_assoc($query)){
		$data[] = $rows;
	}
	return $data;
	
	
}
$data = profile_connected($dbh1);

foreach($data as $info){

}

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

$id = $info['id'];

?>

<?php
if(isset($_POST['subinfcon'])){

$serty = mysql_query("SELECT info_config FROM users WHERE id='$id'",$dbh1);

while($der = mysql_fetch_array($serty)){
	$de = $der['info_config'];
}

if($de == "true"){
	$error[] = "<h3>عفوا لقد قمت بأدخال معلوماتك مسبقاَ</h3>
	<script>
	setTimeout(function(){
	location.reload();
	},2500);
	</script>
<script>
$('body').animate({ scrollTop: '550px' });
</script>
	";
	
		foreach($error as $er){
			
			echo "<div class='error-infocon'>".$er."</div>";
			
		}
		
}else{




// arrayas 

$acctype_array = array('1','9','4','5','6','7','8','11','2','3','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97','98','99','100');

// variables 


$contryf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['contry'])))));
$cityf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['city'])))));
$loctypef = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['loctype'])))));
$workf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['work'])))));
$learnf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['learn'])))));
$acctypef = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['acctype'])))));
$socialf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['social'])))));
$hobbyf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['hobby'])))));
$aboutf = addslashes(htmlspecialchars(html_entity_decode(strip_tags(trim($_POST['about'])))));



$contry = preg_replace('/ +/', '', $contryf);
$city = preg_replace('/ +/', '', $cityf);
$work = preg_replace('/ +/', ' ', $workf);
$learn = preg_replace('/ +/', ' ', $learnf);
$acctype = preg_replace('/ +/', '', $acctypef);
$social = preg_replace('/ +/', '', $socialf);
$hobby = preg_replace('/ +/', ' ', $hobbyf);
$postst = preg_replace('/ +/', ' ', $aboutf);
$loctype = preg_replace('/ +/', ' ', $loctypef);

include "emotions.php";

if(empty($contry)){

$error[] = '
<script>
$("#country-type-text").css({
	"border-color": "#ffa4a4",
	"background": "#ffe7e7",
});	
$("#country-type-text").keydown(function(){
$("#country-type-text").css({
	"border-color": "#ccc",
	"background": "#f9f9f9",
});
});
</script>
<script>
$("#suballinfo").removeAttr("disabled");
</script>
';
}else{
$checkcount = mysql_query("SELECT * FROM countries WHERE id='$contry'",$dbh2);
$countrow = mysql_num_rows($checkcount);
if($countrow == 0){
$error[] = '
<h3>عفوا - لقد حدث خطأ ما حاول مرة اخري في وقت لاحق</h3>
';
}else {}
}

if(empty($city)){
	
$error[] = '
<script>
$("#city-type-text").css({
	"border-color": "#ffa4a4",
	"background": "#ffe7e7",
});	
$("#city-type-text").keydown(function(){
$("#city-type-text").css({
	"border-color": "#ccc",
	"background": "#f9f9f9",
});	
});

</script>
<script>
$("#suballinfo").removeAttr("disabled");
</script>
';

}else {
if(empty($loctype)){
$error[] = '<h3>عفوا - لقد حدث خطأ ما حاول مرة اخري في وقت لاحق</h3>';
}else {
if($loctype == "state"){
$checkcity = mysql_query("SELECT * FROM states WHERE id='$city' AND country_id='$contry'",$dbh2);
$countrow = mysql_num_rows($checkcity);
if($countrow == 0){
$error[] = '<h3>عفوا - لقد حدث خطأ ما حاول مرة اخري في وقت لاحق</h3>';
}else {}
}else {
$checkcity = mysql_query("SELECT * FROM cities WHERE id='$city' AND country_id='$contry'",$dbh2);
$countrow = mysql_num_rows($checkcity);
if($countrow == 0){
$error[] = '<h3>عفوا - لقد حدث خطأ ما حاول مرة اخري في وقت لاحق</h3>';
}else {}
}
}
}
if(empty($postst)){

$error[] = '
<script>

$("#aboutui_764").css({
	"border-color": "#ffa4a4",
	"background": "#ffe7e7",
});	
$("#aboutui_764").keydown(function(){
$("#aboutui_764").css({
	"border-color": "#ccc",
	"background": "#f9f9f9",
});	
});

</script>
';

echo '
	<script>
	$("#suballinfo").removeAttr("disabled");
	</script>
';	


}
else if($postst == " "){

$error[] = '
<script>

$("#aboutui_764").css({
	"border-color": "#ffa4a4",
	"background": "#ffe7e7",
});	
$("#aboutui_764").keydown(function(){
$("#aboutui_764").css({
	"border-color": "#ccc",
	"background": "#f9f9f9",
});	
});

</script>
';

echo '
	<script>
	$("#suballinfo").removeAttr("disabled");
	</script>
';	

}


if(empty($acctypef)){

$error[] = '
<script>

$(".selected-type").css({
	"border-color": "#ffa4a4",
	"background": "#ffe7e7",
});	
$("#selacctypeol li").click(function(){
$(".selected-type").css({
	"border-color": "#ccc",
	"background": "#f9f9f9",
});	
});

</script>
';

echo '
	<script>
	$("#suballinfo").removeAttr("disabled");
	</script>
';
}
else{
if(in_array($acctypef,$acctype_array)){

}
else{
echo '
	<script>
	$("#suballinfo").removeAttr("disabled");
	</script>
';

$error[] = "<h3>لقد قمت بالتعديل علي المحتوي البرمجي من فضلك لاتقم بتغيير اي شيئ منعا لحدوث المشكلات</h3>";

$error[] = '
<script>
$("body").animate({ scrollTop: "500px" });
</script>
';

}

}





	if(empty($error)){
	
	$insinfdb = mysql_query("INSERT INTO info(user_id,contry,city,loctype,work,learn,account_type,social,hobby,about) VALUES('$id','$contry','$city','$loctype','$work','$learn','$acctype','$social','$hobby','$postst')",$dbh1);
	
	if(isset($insinfdb)){
		$upstepu = mysql_query("UPDATE users SET info_config='true' WHERE id='$id'",$dbh1);
		if(isset($upstepu)){
	        echo "<script>location.reload();</script>";
		}
	}
	
	}else{
		
		foreach($error as $er){
			
			echo "<div class='error-infocon'>".$er."</div>";
			
		}
		
	}


	
 } 
	
	
	

}

?>











