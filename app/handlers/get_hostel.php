<?php
header('Content-Type: text/html; charset=UTF-8');
$error = false;
$name = '';
$phone = '';
$position = '';

$utm_medium = '';
$utm_source = '';
$utm_campaign = '';
$utm_term = '';
$utm_content = '';
$cm_title = '';


//Город и область посетителя
include("./detect.php");
$place[0] = occurrenceCity();
$place[1] = occurrenceRegion();

//ip посетителя
$ip   = getIp();

//taking info about date

$timestamp = date("Y-m-d H:i:s");

//utm-метки
$utm_medium = trim($_POST['utm_medium']);
if(empty($utm_medium) || ($utm_medium != strip_tags($utm_medium))){
    $error = true;
} else {
    $utm_medium = htmlspecialchars($utm_medium, ENT_QUOTES);
}

$utm_source = trim($_POST['utm_source']);
if(empty($utm_source) || ($utm_source != strip_tags($utm_source))){
    $error = true;
} else {
    $utm_source = htmlspecialchars($utm_source, ENT_QUOTES);
}

$utm_campaign = trim($_POST['utm_campaign']);
if(empty($utm_campaign) || ($utm_campaign != strip_tags($utm_campaign))){
    $error = true;
} else {
    $utm_campaign = htmlspecialchars($utm_campaign, ENT_QUOTES);
}

$utm_term = trim($_POST['utm_term']);
if(empty($utm_term) || ($utm_term != strip_tags($utm_term))){
    $error = true;
} else {
    $utm_term = htmlspecialchars($utm_term, ENT_QUOTES);
}

$utm_content = trim($_POST['utm_content']);
if(empty($utm_content) || ($utm_content != strip_tags($utm_content))){
    $error = true;
} else {
    $utm_content = htmlspecialchars($utm_content, ENT_QUOTES);
}

$cm_title = trim($_POST['cm_title']);
if(empty($cm_title) || ($cm_title != strip_tags($cm_title))){
    $error = true;
} else {
    $cm_title = htmlspecialchars($cm_title, ENT_QUOTES);
}

//taking the data from form

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
if(!empty($_POST['position'])) {
    $position = htmlspecialchars(trim($_POST['position']), ENT_QUOTES);
    if(empty($position)){
        $error = true;
    }
} else {
    $error = true;
}
//preparing mail
if(!$error) {
    $from = '';
    $subject = '[Hostel Fusion] Подбор хостела';

    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "Content-Transfer-Encoding: 8bit\n";
    $from = '=?utf-8?B?'. base64_encode($from).'?=';
    $headers .= "From: ".$from." <hostel-fusion.ru>\n"; 
    $subject = '=?utf-8?B?'. base64_encode($subject).'?=';

    $content = "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'>" .
        "<tr style='background: #eee;'><td><strong>Время заявки:</strong> </td><td>".$timestamp."</td></tr>" .
        "<tr><td><strong>Имя посетителя:</strong> </td><td>".$name."</td></tr>\n\n" .
        "<tr><td><strong>Телефон посетителя:</strong> </td><td>".$phone."</td></tr>\n\n" .
        "<tr><td><strong>IP посетителя:</strong> </td><td>".$ip."</td></tr>\n\n" .
        "<tr><td><strong>Область посетителя:</strong> </td><td>".$place[1]."</td></tr>\n\n" .
        "<tr><td><strong>Город посетителя:</strong> </td><td>".$place[0]."</td></tr>\n\n" .
        "<tr><td><strong>Форма:</strong> </td><td>".$position."</td></tr>\n\n" .
        "<tr><td><strong>Канал кампании (utm_medium):</strong> </td><td>".$utm_medium."</td></tr>\n\n".
        "<tr><td><strong>Источник кампании (utm_source):</strong> </td><td>".$utm_source."</td></tr>\n\n".
        "<tr><td><strong>Название кампании (utm_campaign):</strong> </td><td>".$utm_campaign."</td></tr>\n\n".
        "<tr><td><strong>Ключевое слово кампании (utm_term):</strong> </td><td>".$utm_term."</td></tr>\n\n".
        "<tr><td><strong>Содержание кампании (utm_content):</strong> </td><td>".$utm_content."</td></tr>\n\n".
        "<tr><td><strong>cm_title:</strong> </td><td>".$cm_title."</td></tr>\n\n".
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
	        //mail("hostelfusion@mail.ru", $subject, $content, $headers);  
	        //mail("wordpress@hostelfusion.ru", $subject, $content, $headers);  
	        //mail("noreply@hostelfusion.ru", $subject, $content, $headers);  
	       //mail("thriller.mgh@gmail.com", $subject, $content, $headers);   
            echo json_encode($content);
        }
        else{
            echo json_encode("По всей видимости вы бот:) Вы смогли заполнить скрытые поля, созданные для бота.");
        }
}  else {
    echo json_encode($error);
}
?>

