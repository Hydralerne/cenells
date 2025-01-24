<?php

include ("../connectdb/index.php");

?>

<?php

if(isset($_FILES['userImage'])){

	
		$img_name = $_FILES['userImage']['name'];
		$img_size = $_FILES['userImage']['size'];
		$img_tmp = $_FILES['userImage']['tmp_name'];
		$img_type = $_FILES['userImage']['type'];   
        $tmp = explode('.',$_FILES['userImage']['name']);
	    $img_basename = substr($img_name, 0, strripos($img_name, '.')); 
	    $img_ext = substr($img_name, strripos($img_name, '.')); 
        $temp = explode(".", $img_name);
        $filename = round(microtime(true)) . '.' . end($temp);		
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
		$array = array('mp3','m4a','ogg','wav','acc','wma','m4r','aiff','amr','act','raw','dsd','ape');
		
if(in_array($ext,$array)){

$upload = move_uploaded_file($img_tmp,'../upload/posts/audio/'.$filename.'');
echo '<input type="hidden" id="audiofilenameval" value="'.$filename.'" />';
echo '
<script>
$("#hideaudioview_mani").attr("src","../upload/posts/audio/'.$filename.'");
</script>
';
}


}

?>