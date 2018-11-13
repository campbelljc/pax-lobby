<?php

$ver = $_GET["version"];
$_SESSION['ver'] = $ver;

$res = file_get_contents('http://172.245.37.101/host.php?version='.$ver);
echo $res;

?>