<?php

if(isset($_POST['subturn'])){
$postst = addslashes(htmlspecialchars(strip_tags(trim($_POST['text']))));
function nl2p($postst) {
    $arr = explode("\n",$postst);
    $out = '';
    $count = count($arr);
    $i = 0;

    for (; $i<$count; $i++) {
        if( strlen(trim($arr[$i])) > 0 ) {
            $out .= '<p>'.trim($arr[$i]).'</p>';
        }
    }
    return $out;
}

$postst = nl2p($postst);
include "emotions.php";
echo $postst;
}

?>