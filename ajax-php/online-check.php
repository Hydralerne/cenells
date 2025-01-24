<?php

include ("../connectdb/index.php");

?>

<?php

$dateonline =  date("Y-m-d H:i:s");

if(isset($_POST['online'])){
	mysql_query("UPDATE online SET time_end='$dateonline',state='true' WHERE user_id='$id' AND session='online'");
}
?>

