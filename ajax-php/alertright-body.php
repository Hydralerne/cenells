<div class="rightext_noti_5545">
<?php
if(!empty($headertext)){
echo '<h3 title="'.strip_tags($headertext).'"><p>'.strip_tags($headertext).'</p></h3>';
}else {}
if(!empty($date)){
	
    $periods = array("ثانية", "دقيقة", "ساعة", "يوم", "اسبوع", "شهر", "سنة", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);

// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "منذ";
    } else {
        $difference = $unix_date - $now;
        $tense = "منذ";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "";
    }
    $finaldate = "{$tense} $difference $periods[$j]";
    echo '<h5>'.$finaldate.'</h5>';

}else {}
?>
</div>
<?php
if(!empty($headertext) && empty($post_img) && empty($post_aud)){
	echo '<img id="text_post_87" draggable="false" src="../img/profile/write-post.png" />';
}else {
if(!empty($post_img) && empty($post_aud)){
echo '<img id="image_post_87" draggable="false" src="../upload/posts/images/sml/'.$post_img.'" />';
}else {
if(!empty($post_aud) && empty($post_img)){
?>
<svg xmlns="http://www.w3.org/2000/svg" class="audiobackground_notif" viewBox="0 0 75 75">
<g id="g1"><polygon id="polygon1" points="39.389,13.769 22.235,28.606 6,28.606 6,47.699 21.989,47.699 39.389,62.75 39.389,13.769" style="stroke:#ffffff;stroke-width:5;stroke-linejoin:round;fill:#ffffff;"/>
<path id="path1" d="M 48.128,49.03 C 50.057,45.934 51.19,42.291 51.19,38.377 C 51.19,34.399 50.026,30.703 48.043,27.577" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path2" d="M 55.082,20.537 C 58.777,25.523 60.966,31.694 60.966,38.377 C 60.966,44.998 58.815,51.115 55.178,56.076" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
<path id="path1" d="M 61.71,62.611 C 66.977,55.945 70.128,47.531 70.128,38.378 C 70.128,29.161 66.936,20.696 61.609,14.01" style="fill:none;stroke:#ffffff;stroke-width:5;stroke-linecap:round"/>
</g>
</svg>
<?php
}else {}
}
}
?>
