<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'bus_station');

$ns_handler = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$ns_handler) {
    die('Не удается подключиться к базе данных!');
}
/*
$a = 'ddddd';
$b = 'wwwww';
$ab = $a.$b;
echo $ab;*/
?>


