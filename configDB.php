<?php
$ip = 'localhost';
$conn = mysqli_connect($ip, $db_user, $db_pass, $db);

if(!$conn) {
    echo 'Database connected' . mysqli_connect_error();
}
?>