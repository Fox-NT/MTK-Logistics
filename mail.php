<?php
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);

// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
$fromMail = 'newtorka@gmail.com';
$fromName = 'TRK Logistics';

// Сюда введите Ваш email
$emailTo = 'foxnt.of@gmail.com';
$subject = 'Форма обратной связи на php';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

// тело письма
$body = "Получено письмо с сайта trklogistics \n Имя: $name\nТелефон: $phone \n";

// сообщение будет отправлено в случае, если поле с номером телефона не пустое
if (strlen($phone) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}
?>