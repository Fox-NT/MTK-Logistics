<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "";

//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-590284734";

//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone
);

//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
    echo "Отправлено";
} else {
    echo "Ошибка";
}

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);

// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
$fromMail = 'manager@mtk-logistics.ru';
$fromName = 'MTK Logistics';

// Сюда введите Ваш email
$emailTo = 'manager@mtk-logistics.ru';
$subject = 'Заявка на обратный звонок с сайта MTK Logistics';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// тело письма
$body = "Получена заявка на обратный звонок с сайта MTK Logistics \nИмя: $name \nТелефон: $phone \n";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое
if (strlen($phone) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}


?>