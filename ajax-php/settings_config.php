<?php

include ("../connectdb/index.php");

?>

<?php

$typefill = addslashes(htmlspecialchars(strip_tags(trim($_POST['type']))));
$type = preg_replace('/ +/', '', $typefill);

$array = array('per','pub');

if(isset($_POST['subemper'])){
	
	

$serty = mysql_query("SELECT settings_config FROM users WHERE id='$id'");

while($der = mysql_fetch_array($serty)){
	$de = $der['settings_config'];
}

if($de == "true"){

echo "عفوا لقد قمت بتحديد نوع خصوصية حسابك مسبقا";

echo '<script>

	setTimeout(function(){
	location.reload();
	},2500);
	$(".setting-config-main").animate({height: "600px"},function(){
		$(".script_87").fadeIn();
	});
	</script>';

}else{






if(empty($type)){
	echo 'من فضلك قم باختيار نوع خصوصية حسابك
	<script>
	$("#subaccset_43").removeAttr("disabled");
	$(".disable_354").css("display","none");
	$(".setting-config-main").animate({height: "600px"},function(){
		$(".script_87").fadeIn();
	});
    </script>
	'; 
}else {
	if(in_array($type,$array)){
		
		$update = mysql_query("UPDATE users SET settings_config='true' WHERE id='$id'");
		if(isset($update)){
			$upinfo = mysql_query("UPDATE info SET account_secrit='$type' WHERE user_id='$id'");
		if(isset($upinfo)){
			echo "<script>location.reload();</script>";
		}
		}

	}else{
		echo 'تحذيير لقد قمت بتغيير النص البرمجي لا تحاول فعل هذا ثانيةَ
			<script>
			$("#subaccset_43").removeAttr("disabled");
			$(".disable_354").css("display","none");
			$(".setting-config-main").animate({height: "600px"},function(){
				$(".script_87").fadeIn();
			});
            </script>
		';
	}
  }

 }

}



?>






