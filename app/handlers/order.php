<?php
header('Content-Type: text/html; charset=UTF-8');
$error = false;
$room = '';
$hostel = '';
$in = '';
$out = '';
$guests = '';
$name = '';
$phone = '';

//Город и область посетителя
include("./detect.php");
$place[0] = occurrenceCity();
$place[1] = occurrenceRegion();

//ip посетителя
$ip   = getIp();

//taking info about date

$timestamp = date("Y-m-d H:i:s");

//taking the data from form

if(!empty($_POST['room'])) {
    $room = htmlspecialchars(trim($_POST['room']), ENT_QUOTES);
    if(empty($room)){
        $error = true;
    }
} else {
    $error = true;
}

if(!empty($_POST['hostel'])) {
    $hostel = htmlspecialchars(trim($_POST['hostel']), ENT_QUOTES);
    if(empty($hostel)){
        $error = true;
    }
} else {
    $error = true;
}

if(!empty($_POST['in'])) {
    $in = htmlspecialchars(trim($_POST['in']), ENT_QUOTES);
    if(empty($in)){
        $error = true;
    }
} else {
    $error = true;
}

if(!empty($_POST['out'])) {
    $out = htmlspecialchars(trim($_POST['out']), ENT_QUOTES);
    if(empty($out)){
        $error = true;
    }
} else {
    $error = true;
}

if(!empty($_POST['guests'])) {
    $guests = htmlspecialchars(trim($_POST['guests']), ENT_QUOTES);
    if(empty($guests)){
        $error = true;
    }
} else {
    $error = true;
}

if(!empty($_POST['name'])) {
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES);
    if(empty($name)){
        $error = true;
    }
} else {
    $error = true;
}
if(!empty($_POST['phone'])) {
    $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES);
    if(empty($phone)){
        $error = true;
    }
} else {
    $error = true;
}
//preparing mail
if(!$error) {
    $from = '';
    $subject = '[Hostel Fusion] Новая бронь номера ';

    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "Content-Transfer-Encoding: 8bit\n";
    $from = '=?utf-8?B?'. base64_encode($from).'?=';
    $headers .= "From: ".$from." <hostel-fusion.ru>\n"; 
    $subject = '=?utf-8?B?'. base64_encode($subject).'?=';

    $content = "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'>" .
        "<tr style='background: #eee;'><td><strong>Время заявки:</strong> </td><td>".$timestamp."</td></tr>" .
        "<tr><td><strong>Тип номера:</strong> </td><td>".$room."</td></tr>\n\n" .
        "<tr><td><strong>Хостел:</strong> </td><td>".$hostel."</td></tr>\n\n" .
        "<tr><td><strong>Дата заезда:</strong> </td><td>".$in."</td></tr>\n\n" .
        "<tr><td><strong>Дата отъезда:</strong> </td><td>".$out."</td></tr>\n\n" .
        "<tr><td><strong>Кол-во гостей:</strong> </td><td>".$guests."</td></tr>\n\n" .
        "<tr><td><strong>Имя посетителя:</strong> </td><td>".$name."</td></tr>\n\n" .
        "<tr><td><strong>Телефон посетителя:</strong> </td><td>".$phone."</td></tr>\n\n" .
        "<tr><td><strong>IP посетителя:</strong> </td><td>".$ip."</td></tr>\n\n" .
        "<tr><td><strong>Область посетителя:</strong> </td><td>".$place[1]."</td></tr>\n\n" .
        "<tr><td><strong>Город посетителя:</strong> </td><td>".$place[0]."</td></tr>\n\n" .
        "</table></body></html>\n\n";


    /**
     * check on robots
     * @input String fields
     * @return 0
     */

    function botShallNotPass( $fields = array() ){
        $checkOnBot = 0;
        foreach( $fields as $field ){
            if ( isset($_POST["$field"]) )
            {
                if ( $_POST["$field"] != "" ){
                    $checkOnBot = 1;
                }
            }
        }
        return $checkOnBot;
    }

    $fieldsarray = array("mail");
    $checker = botShallNotPass($fieldsarray);
    if ( $checker != 1 ){
        mail("derkach94@gmail.com", $subject, $content, $headers);  
        echo json_encode($content);
    }
    else{
        echo json_encode("По всей видимости вы бот:) Вы смогли заполнить скрытые поля, созданные для бота.");
    }
}  else {
    echo json_encode($error);
}
?>
