<?php
$room = $_POST['room'];
$hostel = $_POST['hostel'];
$in = $_POST['in'];
$out = $_POST['out'];
$guests = $_POST['guests'];
$name = $_POST['name'];
$phone = $_POST['phone'];

echo //"Ошибка:" . $error . "\n" .
             "Комната:" . $room . "\n" .
             "Хостел:" .  $hostel . "\n" .
             "Заезд:" . $in . "\n" .
             "Выезд:" . $out . "\n" .
             "Гости:" . $guests . "\n" .
             "Имя:" . $name . "\n" .
             "Телефон:" . $phone;
?>
