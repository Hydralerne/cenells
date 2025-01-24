<?php

include ("../connectdb/index.php");

?>



<?php



if(isset($_POST['subchngid'])){

echo '
<script>
$("#config_account").removeAttr("disabled");
</script>
';

$filluno = addslashes(htmlspecialchars(strip_tags(trim($_POST['changeu']))));	
$filluser = preg_replace('/ +/', '', $filluno);


$serty = mysql_query("SELECT config FROM users WHERE id='$id'");
while($der = mysql_fetch_array($serty)){
	$de = $der['config'];
}

if($de == "true"){
	echo "<div class='error5'><h3>عفوا لقد قمت بانهاء حسابك مسبقا</h3></div>
	<script>
	setTimeout(function(){
	location.reload();
	},2500);
	</script>
	";

}
else{

if(empty($filluser)){
$errors[] = "<div class='error5'><h3>فضلا ادخل اسم المستخدم</h3></div>";
}else {
	$fillchreo = str_replace('_', '', $filluser);
	$fillchret = str_replace('.', '', $fillchreo);
	$fillchrer = str_replace('-', '', $fillchret);
	if(empty($fillchrer)){
	    $errors[] = "<div class='error5'><h3>اسم المستخدم غير صالح</h3></div>";
	}else{
	$rotyui = preg_replace('/[0-9]/', '', $filluser);
	if(preg_match('/[^A-Za-z0-9,.,_]/', $filluser) || strlen($rotyui) == 0){
		$errors[] = "<div class='error5'><h3>اسم المستخدم غير صالح</h3></div>";
	}else {
	$lengthval = preg_replace('/[^A-Za-z0-9,.,_]/', '', $filluser);
	if(strlen($lengthval) < 4){
		$errors[] = "<div class='error5'><h3>اسم المستخدم قصير جدا</h3></div>";
	}else if(strlen($lengthval) > 20){
		$errors[] = "<div class='error5'><h3>اسم المستخدم طويل جدا</h3></div>";
	}else {
		$reruiujm = str_replace('._', '', $filluser);
		$ofurbnsh = str_replace('_.', '', $reruiujm);
        if(substr($ofurbnsh,-1) == "_" || substr($ofurbnsh,-1) == "."){
        $filename =  substr($ofurbnsh,0,-1);
        }else {
        $filename = $ofurbnsh;
        }
        if(substr($filename,0,1) == "_" || substr($filename,0,1) == "."){
        $boboname = substr($filename,1);
        }else {
        $boboname = $filename;
        }	
		$selectuse = mysql_query("SELECT COUNT(id) FROM users WHERE user_name='$boboname'");
	    $usercount = mysql_result($selectuse,0);		
		if($usercount !== "0"){
			$errors[] = "<div class='error5'><h3>هذا الاسم مستخدم مسبقا</h3></div>";
		}else {
		$fhgoikhr = str_replace('._', '', $filluser);
		$fillname = str_replace('_.', '', $fhgoikhr);
        if(substr($fillname,-1) == "_" || substr($fillname,-1) == "."){
        $filtname =  substr($fillname,0,-1);
        }else {
        $filtname = $fillname;
        }
        if(substr($filtname,0,1) == "_" || substr($filtname,0,1) == "."){
        $username = substr($filtname,1);
        }else {
        $username = $filtname;
        }		
		}
	}
	}
	}
}

if(!empty($username)){
$filexists = '../'.$username.'';	
if(is_dir($filexists)){
$errors[] = "<div class='error5'><h3>اسم المستخدم هذا غير متاح</h3></div>";
}
}else {}
if(empty($errors)){

$dirname = $username;

// Header Location From id To User dir

$ertodir = mkdir("../{$info['id']}",0777,true);
if(isset($ertodir)){
copy("../account.txt","../{$info['id']}/index.php");
$file = fopen("../{$info['id']}/index.php","w");
fwrite($file,"<?php");
fwrite($file,"
");
fwrite($file,'header("Location:../');
fwrite($file,$dirname);
fwrite($file,'");');
fwrite($file,"
");
fwrite($file,"?>");
fclose($file);
}

// Main USer Dir With user name
$newmkid = mkdir("../{$dirname}",0777,true);
if(isset($newmkid)){
copy("../account.txt","../{$dirname}/index.php");
$newfile = fopen("../{$dirname}/index.php","w");
fwrite($newfile,"<?php");
fwrite($newfile,"
");
fwrite($newfile,'$use = ');
fwrite($newfile,"'");
fwrite($newfile,$id);
fwrite($newfile,"'");
fwrite($newfile,";");
fwrite($newfile,"
");
fwrite($newfile,'include "../main.php"');
fwrite($newfile,"
");
fwrite($newfile,"?>");
fclose($newfile);
}


// Main USer Dir With user name
copy("../account.txt","../{$dirname}/posts.php");
$vuofile = fopen("../{$dirname}/posts.php","w");
fwrite($vuofile,"<?php");
fwrite($vuofile,"
");
fwrite($vuofile,'$use = ');
fwrite($vuofile,"'");
fwrite($vuofile,$id);
fwrite($vuofile,"'");
fwrite($vuofile,";");
fwrite($vuofile,"
");
fwrite($vuofile,'include "../ajax-php/posts-acc.php";');
fwrite($vuofile,"
");
fwrite($vuofile,"?>");
fclose($vuofile);

copy("../account.txt","../{$dirname}/followers.php");
$oldfile = fopen("../{$dirname}/followers.php","w");
fwrite($oldfile,"<?php");
fwrite($oldfile,"
");
fwrite($oldfile,'$use = ');
fwrite($oldfile,"'");
fwrite($oldfile,$id);
fwrite($oldfile,"'");
fwrite($oldfile,";");
fwrite($oldfile,"
");
fwrite($oldfile,'include "../ajax-php/select-follow.php";');
fwrite($oldfile,"
");
fwrite($oldfile,"?>");
fclose($oldfile);

copy("../account.txt","../{$dirname}/following.php");
$cewfile = fopen("../{$dirname}/following.php","w");
fwrite($cewfile,"<?php");
fwrite($cewfile,"
");
fwrite($cewfile,'$use = ');
fwrite($cewfile,"'");
fwrite($cewfile,$id);
fwrite($cewfile,"'");
fwrite($cewfile,";");
fwrite($cewfile,"
");
fwrite($cewfile,'include "../ajax-php/select-following.php";');
fwrite($cewfile,"
");
fwrite($cewfile,"?>");
fclose($cewfile);

copy("../account.txt","../{$dirname}/about.php");
$cemorel = fopen("../{$dirname}/about.php","w");
fwrite($cemorel,"<?php");
fwrite($cemorel,"
");
fwrite($cemorel,'$use = ');
fwrite($cemorel,"'");
fwrite($cemorel,$id);
fwrite($cemorel,"'");
fwrite($cemorel,";");
fwrite($cemorel,"
");
fwrite($cemorel,'include "../ajax-php/select-aboutinfo.php";');
fwrite($cemorel,"
");
fwrite($cemorel,"?>");
fclose($cemorel);

copy("../account.txt","../{$dirname}/more.php");
$xedfile = fopen("../{$dirname}/more.php","w");
fwrite($xedfile,"<?php");
fwrite($xedfile,"
");
fwrite($xedfile,'$use = ');
fwrite($xedfile,"'");
fwrite($xedfile,$id);
fwrite($xedfile,"'");
fwrite($xedfile,";");
fwrite($xedfile,"
");
fwrite($xedfile,'include "../ajax-php/accmore-refs.php";');
fwrite($xedfile,"
");
fwrite($xedfile,"?>");
fclose($xedfile);

copy("../account.txt","../{$dirname}/xred.php");
$cesilea = fopen("../{$dirname}/xred.php","w");
fwrite($cesilea,"<?php");
fwrite($cesilea,"
");
fwrite($cesilea,'$use = ');
fwrite($cesilea,"'");
fwrite($cesilea,$id);
fwrite($cesilea,"'");
fwrite($cesilea,";");
fwrite($cesilea,"
");
fwrite($cesilea,'include "../ajax-php/accxred-refs.php";');
fwrite($cesilea,"
");
fwrite($cesilea,"?>");
fclose($cesilea);

$updateusn = mysql_query("UPDATE users SET user_name='$dirname' WHERE id='$id'");
if(isset($updateusn)){
$updatecon = mysql_query("UPDATE users SET config='true' WHERE id='$id'");
}
if(isset($updatecon)){
	echo '
	<script>
	location.reload();
	</script>
	';
}

}else {
foreach($errors as $er){
	echo $er;
}
}

// fdghsydr




}



}


?>



