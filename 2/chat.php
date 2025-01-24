<?php

header('Content-Type: text/html; charset=utf-8');

echo "<h1>";
$password = "e1858483696a02bd319d06f89dd73370";
echo "الباسورد بدون تشفير : ".$password."<br />";
echo "md5 الباسوورد المشفر بالتشفير القصير : ".md5($password)."<br />";
echo "sha1 الباسورد المشفر بالتشفير الطويل : ".sha1($password)."<br />"; 
echo "</h1>";
?>