<?php
require_once 'connection.php';

var_dump($_GET);
var_dump($_POST);
$a = '-';
$city1 = $_POST['city1'];
$city2 = $_POST['city2'];
$direction =$city1.$a.$city2;
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$time = $_POST['time'];
$class = $_POST['class'];
$date = $year.$a.$month.$a.$day;
$kolpass = $_POST['pass'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$otchestvo = $_POST['otchestvo'];
$phone = $_POST['phone'];
mysqli_query($ns_handler,"INSERT INTO `bus_station`.`passenger` (`name`, `surname`, `otchestvo`, `phone`, `class`, `kolichestvo`, `direction`, `data`, `time`)
                                                         VALUES ('$name', '$surname', '$otchestvo', '$phone', '$class', '$kolpass', '$direction', '$date', '$time')");

?>