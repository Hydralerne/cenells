<?php

include ("../connectdb/index.php");

?>



<?php

if(isset($_POST['geturlshare'])){

$url = addslashes(htmlspecialchars(strip_tags(html_entity_decode(trim($_POST['urlere'])))));

function curl_get_contents($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

$str = curl_get_contents($url);


function getTitle($str) {
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $str, $match) ? $match[1] : null;
    return $title;
}

$webtitle = getTitle($str);

$html = $str;
preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i',$html, $matches );
$first = $matches[ 1 ][ 1 ];

ini_set('memory_limit', '512M');

function image_get_contents($first){
  $chm = curl_init($first);
  curl_setopt($chm, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($chm, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($chm, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($chm, CURLOPT_SSL_VERIFYHOST, 0);
  $datam = curl_exec($chm);
  curl_close($chm);
  return $datam;
}

//Get the file
$content = image_get_contents($first);

$imgname = 'CEIMG_'.$id.''.round(microtime(true)).'_'.date("YmdHis").'.png';		

copy("../account.txt","../upload/share/images/$imgname");

//Store in the filesystem.
$fp = fopen("../upload/share/images/$imgname", "w");
fwrite($fp, $content);
$finish = fclose($fp);
$imagecheck = getimagesize("../upload/share/images/$imgname");
if(empty($imagecheck)){
unlink("../upload/share/images/$imgname");
$parse = parse_url($url);
$imagetow = 'http://'.$parse['host'].'/'.$first.'';	
function image_cehole_contents($imagetow)
{
  $chck = curl_init($imagetow);
  curl_setopt($chck, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($chck, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($chck, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($chck, CURLOPT_SSL_VERIFYHOST, 0);
  $datack = curl_exec($chck);
  curl_close($chck);
  return $datack;
}

//Get the file
$contenter = image_cehole_contents($imagetow);

copy("../account.txt","../upload/share/images/$imgname");

//Store in the filesystem.
$fper = fopen("../upload/share/images/$imgname", "w");
fwrite($fper, $contenter);
$finisher = fclose($fper);

}
if(empty($imgname)){
unlink("../upload/share/images/$imgname");
}else {
$imagesrc = "../upload/share/images/$imgname";
}

$tags = get_meta_tags($url);
$author = $tags['author'];
$description = $tags['description'];

if(!empty($webtitle)){
	echo "<div class='webtitle_src'><h3>$webtitle</h3></div>";
}else {
	echo "<div class='link_ertoyu'><p>".substr($url,0,50)."</p></div>";
}
if(!empty($imagesrc)){
	echo "<div class='share_imagegetsrc_div'><img src='$imagesrc' /></div>";
}else {}
$parsede = parse_url($url);
if(!empty($parsede['host'])){
	echo "<div class='hostshar_div'><p>".$parsede['host']."</p></div>";
}else {}
if(!empty($description)){
	echo "<div class='metashar_description'><p>$description</p></div>";
}else {
preg_match_all('/<h1>(.*?)<\/h1>/s', $str, $matches);
//HTML array in $matches[1]
echo($matches[1]);
}
if(!empty($author)){
	echo "<div class='authormeta_share'><p>$author</p></div>";
}else {}
}

?>


