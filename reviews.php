<?php

include_once "configDB.php";

$usernamerev = mysqli_real_escape_string($conn, $_POST['usernamerev']);
$textrev = mysqli_real_escape_string($conn, $_POST['textrev']);
$daterev = mysqli_real_escape_string($conn, date("d.m.Y"));

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '';
$recaptcha_response = $_POST['recaptcha_response'];

$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha);

if ($recaptcha->score >= 0.5) {
    if (!empty($usernamerev) && !empty($textrev)) {
        if (mb_strlen($textrev, 'utf-8') <= 355) {
            $random_id = rand(time(), 10000000);
            $sql = mysqli_query($conn, "INSERT INTO reviews (id, username, review, date) VALUES ({$random_id}, '{$usernamerev}', '{$textrev}', '{$daterev}')");

            if ($sql) {
                echo 'Данные успешно добавлены в базу.';
            } else {
                echo 'Произошла ошибка: ' . mysqli_error($link) . '';
            }
        } else {
            echo 'Длина отзыва не может быть более 350 символов';
        }

    } else {
        echo 'Заполнены не все поля';
    }

} else {
    echo 'Вы бот';
}



?>