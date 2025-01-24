<?php
ob_start();
session_start();
mysql_connect('127.0.0.1','root','asdwqe123') or die(mysql_error());
mysql_select_db('cemail') or die(mysql_error());

date_default_timezone_set('Africa/Cairo');

$timedate = date("Y-m-d H:i:s");

?>


<?php

if(isset($_POST['signofouper'])){

$efioimrd = addslashes(htmlspecialchars(strip_tags(trim($_POST['firstname']))));
$firstnme = preg_replace('/ +/', '', $efioimrd);
$morintpd = addslashes(htmlspecialchars(strip_tags(trim($_POST['lastname']))));
$lastname = preg_replace('/ +/', '', $morintpd);
$ertopioi = addslashes(htmlspecialchars(strip_tags(trim($_POST['number']))));
$fillnumb = preg_replace('/ +/', '', $ertopioi);
$noynoyui = addslashes(htmlspecialchars(strip_tags(trim($_POST['username']))));
$filluser = preg_replace('/ +/', '', $noynoyui);
$password = addslashes(htmlspecialchars(strip_tags(trim($_POST['password']))));

if(empty($firstnme)){
$error[] = "<div class='firstname_error'><p>من فضلك ادخل الاسم الاول</p><a>▲</a></div>";
}else {
	if(preg_match('/[0-9,.,_]/', $firstnme)){
		$error[] = "<div class='firstname_error'><p>الاسم الاول غير صالح</p><a>▲</a></div>";
	}else {
	if(strlen($firstnme) < 3){
		$error[] = "<div class='firstname_error'><p>الاسم الاول غير صالح</p><a>▲</a></div>";
	}else {
		if(strlen($firstnme) > 30){
			$error[] = "<div class='firstname_error'><p>الاسم الاول غير صالح</p><a>▲</a></div>";
		}
	}
	}
}
if(empty($lastname)){
$error[] = "<div class='lastname_error'><p>من فضلك ادخل الاسم الثاني</p><a>▲</a></div>";
}else {
	if(preg_match('/[0-9,.,_]/', $lastname)){
		$error[] = "<div class='lastname_error'><p>الاسم الثاني غير صالح</p><a>▲</a></div>";
	}else {
	if(strlen($lastname) < 3){
		$error[] = "<div class='lastname_error'><p>الاسم الثاني غير صالح</p><a>▲</a></div>";
	}else {
		if(strlen($lastname) > 30){
			$error[] = "<div class='lastname_error'><p>الاسم الثاني غير صالح</p><a>▲</a></div>";
		}
	}
	}
}
if(empty($fillnumb)){
$error[] = "<div class='number_error'><p>من فضلك ادخل رقم الهاتف</p><a>▲</a></div>";
}else {
	if(preg_match('/[^0-9]/', $fillnumb)){
		$error[] = "<div class='number_error'><p>رقم الهاتف غير صالح</p><a>▲</a></div>";
	}else {
	if(strlen($fillnumb) < 8){
		$error[] = "<div class='number_error'><p>رقم الهاتف غير صالح</p><a>▲</a></div>";
	}else {
		if(strlen($fillnumb) > 15){
			$error[] = "<div class='number_error'><p>رقم الهاتف غير صالح</p><a>▲</a></div>";
		}else {
		    $selectnum = mysql_query("SELECT COUNT(id) FROM cerange WHERE number='$fillnumb'");
	        $numbcount = mysql_result($selectnum,0);
			if($numbcount !== "0"){
				$error[] = "<div class='number_error'><p>رقم الهاتف مستخدم مسبقا</p><a>▲</a></div>";
			}
		}
	}
	}	
}
if(empty($filluser)){
$error[] = "<div class='username_error'><p>فضلا ادخل اسم المستخدم</p><a>▲</a></div>";
}else {
	$fillchreo = $fillunt = str_replace('_', '', $filluser);
	$fillchret = $fillunt = str_replace('.', '', $fillchreo);
	$fillchrer = $fillunt = str_replace('-', '', $fillchret);
	if(empty($fillchrer)){
	    $error[] = "<div class='username_error'><p>اسم المستخدم غير صالح</p><a>▲</a></div>";
	}else{
	$rotyui = preg_replace('/[0-9]/', '', $filluser);
	if(preg_match('/[^A-Za-z0-9,.,_]/', $filluser) || strlen($rotyui) == 0){
		$error[] = "<div class='username_error'><p>اسم المستخدم غير صالح</p><a>▲</a></div>";
	}else {
	$lengthval = preg_replace('/[^A-Za-z0-9,.,_]/', '', $filluser);
	if(strlen($lengthval) < 4){
		$error[] = "<div class='username_error'><p>اسم المستخدم قصير جدا</p><a>▲</a></div>";
	}else if(strlen($lengthval) > 20){
		$error[] = "<div class='username_error'><p>اسم المستخدم طويل جدا</p><a>▲</a></div>";
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
		$selectuse = mysql_query("SELECT COUNT(id) FROM cerange WHERE r_user='$boboname'");
	    $usercount = mysql_result($selectuse,0);		
		if($usercount !== "0"){
			$error[] = "<div class='username_error'><p>هذا الاسم مستخدم مسبقا</p><a>▲</a></div>";
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
if(empty($password)){
$error[] = "<div class='password_error'><p>من فضلك ادخل كلمة المرور</p><a>▲</a></div>";
}else {
	if(strlen($password) < 8){
		$error[] = "<div class='password_error'><p>كلمة المرور قصيرة جدا</p><a>▲</a></div>";
	}else {
		if(strlen($password) > 32){
			$error[] = "<div class='password_error'><p>كلمة المرور طويلة جدا</p><a>▲</a></div>";
		}
	}
}
if(empty($error)){
$pro_img = "letters/".substr($firstnme, 0, 1).".png";	
$insertdata = mysql_query("INSERT INTO cerange(first_name,last_name,name,number,r_user,r_password,type,time,pro_img) VALUES('$firstnme','$lastname','$firstnme $lastname','$fillnumb','$username','$password','range','$timedate','$pro_img')");


if(isset($insertdata)){

$getfromid = mysql_query("SELECT id FROM cerange WHERE r_user='$username'");
while($fetr = mysql_fetch_assoc($getfromid)){
	$fetchid = $fetr['id'];
}
// Header Location From id To User Range dir

$ertodir = mkdir("{$fetchid}",0777,true);
if(isset($ertodir)){
copy("../account.txt","{$fetchid}/index.php");
$file = fopen("{$fetchid}/index.php","w");
fwrite($file,"<?php");
fwrite($file,"
");
fwrite($file,'header("Location:../');
fwrite($file,$username);
fwrite($file,'");');
fwrite($file,"
");
fwrite($file,"?>");
fclose($file);
}	



$rangedir = mkdir("{$username}",0777,true);
if(isset($rangedir)){
copy("../account.txt","{$username}/index.php");
$ranfile = fopen("{$username}/index.php","w");
fwrite($ranfile,"<?php");
fwrite($ranfile,"
");
fwrite($ranfile,'$user = ');
fwrite($ranfile,"'");
fwrite($ranfile,$fetchid );
fwrite($ranfile,"'");
fwrite($ranfile,";");
fwrite($ranfile,"
");
fwrite($ranfile,'include "../inmain.php"');
fwrite($ranfile,"
");
fwrite($ranfile,"?>");
fclose($ranfile);

// include chat body

copy("../account.txt","{$username}/chat.php");
$rerfile = fopen("{$username}/chat.php","w");
fwrite($rerfile,"<?php");
fwrite($rerfile,"
");
fwrite($rerfile,'$user = ');
fwrite($rerfile,"'");
fwrite($rerfile,$fetchid );
fwrite($rerfile,"'");
fwrite($rerfile,";");
fwrite($rerfile,"
");
fwrite($rerfile,'include "../chatoff.php"');
fwrite($rerfile,"
");
fwrite($rerfile,"?>");
fclose($rerfile);

// include send chat

copy("../account.txt","{$username}/send.php");
$opefile = fopen("{$username}/send.php","w");
fwrite($opefile,"<?php");
fwrite($opefile,"
");
fwrite($opefile,'$user = ');
fwrite($opefile,"'");
fwrite($opefile,$fetchid );
fwrite($opefile,"'");
fwrite($opefile,";");
fwrite($opefile,"
");
fwrite($opefile,'include "../sendoff.php"');
fwrite($opefile,"
");
fwrite($opefile,"?>");
fclose($opefile);

// include online super

copy("../account.txt","{$username}/fast.php");
$fasfile = fopen("{$username}/fast.php","w");
fwrite($fasfile,"<?php");
fwrite($fasfile,"
");
fwrite($fasfile,'$user = ');
fwrite($fasfile,"'");
fwrite($fasfile,$fetchid );
fwrite($fasfile,"'");
fwrite($fasfile,";");
fwrite($fasfile,"
");
fwrite($fasfile,'include "../onlineoff.php"');
fwrite($fasfile,"
");
fwrite($fasfile,"?>");
fclose($fasfile);

// select session range

copy("../account.txt","{$username}/selc.php");
$fasfile = fopen("{$username}/selc.php","w");
fwrite($fasfile,"<?php");
fwrite($fasfile,"
");
fwrite($fasfile,'$user = ');
fwrite($fasfile,"'");
fwrite($fasfile,$fetchid );
fwrite($fasfile,"'");
fwrite($fasfile,";");
fwrite($fasfile,"
");
fwrite($fasfile,'include "../selecara.php"');
fwrite($fasfile,"
");
fwrite($fasfile,"?>");
fclose($fasfile);

}

// select online seesion range

copy("../account.txt","{$username}/onse.php");
$fasfile = fopen("{$username}/onse.php","w");
fwrite($fasfile,"<?php");
fwrite($fasfile,"
");
fwrite($fasfile,'$user = ');
fwrite($fasfile,"'");
fwrite($fasfile,$fetchid );
fwrite($fasfile,"'");
fwrite($fasfile,";");
fwrite($fasfile,"
");
fwrite($fasfile,'include "../onlinelef.php"');
fwrite($fasfile,"
");
fwrite($fasfile,"?>");
fclose($fasfile);

// select load first 

copy("../account.txt","{$username}/load.php");
$fasfile = fopen("{$username}/load.php","w");
fwrite($fasfile,"<?php");
fwrite($fasfile,"
");
fwrite($fasfile,'$user = ');
fwrite($fasfile,"'");
fwrite($fasfile,$fetchid );
fwrite($fasfile,"'");
fwrite($fasfile,";");
fwrite($fasfile,"
");
fwrite($fasfile,'include "../loadfirst.php"');
fwrite($fasfile,"
");
fwrite($fasfile,"?>");
fclose($fasfile);

// select load second

copy("../account.txt","{$username}/poad.php");
$fasfile = fopen("{$username}/poad.php","w");
fwrite($fasfile,"<?php");
fwrite($fasfile,"
");
fwrite($fasfile,'$user = ');
fwrite($fasfile,"'");
fwrite($fasfile,$fetchid );
fwrite($fasfile,"'");
fwrite($fasfile,";");
fwrite($fasfile,"
");
fwrite($fasfile,'include "../loadsec.php"');
fwrite($fasfile,"
");
fwrite($fasfile,"?>");
fclose($fasfile);


		$_SESSION['cerange'] = $username;
		echo '
		<script>
        $(document).ready(function(){
	       $("#signbtclick").removeAttr("disabled");
	       $("#signbtclick").removeAttr("readonly");
           $(".button_info input").val("");
		});
        </script>
		';
}
}else{
		foreach($error as $er){
			echo $er;
			echo '
			<script>
            $(document).ready(function(){
	            $("#signbtclick").removeAttr("disabled");
				$("#signbtclick").removeAttr("readonly");
            });
            </script>
			';
		}
		
	}

}

?>







