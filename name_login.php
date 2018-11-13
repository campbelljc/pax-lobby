<?php

$name = $_GET["name"];
$_SESSION['name'] = $name;
$password = $_GET["password"];
$_SESSION['password'] = $password;

$res = file_get_contents('http://172.245.37.101/name_login.php?name='.$name.'&password='.$password);
echo $res;

//header('Location: http://172.245.37.101/name_login.php?name='.$name.'&password='.$password);

?>