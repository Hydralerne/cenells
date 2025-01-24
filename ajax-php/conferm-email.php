<?php

include ("../connectdb/index.php");

?>


<?php 

$codefill = addslashes(htmlspecialchars(strip_tags(trim($_POST['code']))));
$code = preg_replace('/ +/', '', $codefill);


if(isset($_POST['subemcon'])){

$serty = mysql_query("SELECT email_comfig FROM users WHERE id='$id'");

while($der = mysql_fetch_array($serty)){
	$de = $der['email_comfig'];
}

if($de == "true"){
	echo '
	<script>
	$("#subconfig_5768,#coningo_5768").removeAttr("disabled");
	$("#coningo_5768").val("");
	</script>';
	echo "عفوا لقد قمت بتأكيد بريدك مسبقا";	
	echo "<script>
	setTimeout(function(){
	location.reload();
	},2500);
	</script>";

}else{



if($code == "123456"){
$update = mysql_query("UPDATE users SET email_comfig='true' WHERE id='$id'");
if(isset($update)){
	echo "<script>location.reload();</script>";
}
}else{
if(empty($code)){
	echo '
	<script>
	$("#subconfig_5768,#coningo_5768").removeAttr("disabled");
	$("#coningo_5768").val("");
	</script>';
	echo "من فضلك ادخل رمز التأكيد";		
}else{
	echo '
	<script>
	$("#subconfig_5768,#coningo_5768").removeAttr("disabled");
	$("#coningo_5768").val("");
	</script>';
	echo "الرمز الذي ادخلته غير صحيح";
}
}


}



}

?>