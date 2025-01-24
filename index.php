<?php

include ("connectdb/index.php");

if(isset($_SESSION['ceuser'])){

$emconferm = $info['config'];

if($emconferm == "true"){

// when user make session and config

$headerinset = "true";

include "indexfun/inset.php";

} else {

// when user make session but not config

$headeroffset = "true";

include "indexfun/offsetcon.php";

}

} else {

// when the user is not make session

$headerofflog = "true";

include "indexfun/offlog.php";

}

?>
