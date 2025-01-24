
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
        $imgname = round(microtime(true)) . '.' . end($temp);		

		$array = array('image/png','image/jpeg','image/JPG','image/gif','image/bmp','image/wbmp');
		
if(in_array($img_type,$array)){
	$finalimg = $imgname;
	$uploadimg = move_uploaded_file($img_tmp,"../upload/range/images/".$imgname);
}


if(isset($uploadimg)){
echo '
<img src="../../upload/range/images/'.$finalimg.'" id="chat_erto_opar" />
<input type="hidden" id="ggback_ret" value="'.$finalimg.'" />
';
}


}



?>