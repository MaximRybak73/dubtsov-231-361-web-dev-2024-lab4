<?php
$title = "RybolovClub73";
$current_page = 'login';
include "headerForAutent.html";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $correct_user_name = 'admin';
    $correct_password = '1234';

    // Проверка на совпадение введенных данных с установленными
    if ($user_name === $correct_user_name && $password === $correct_password) {
        echo '<p>Авторизация прошла успешно!</p>';
    } else {
        echo '<p>Ошибка: неправильный логин или пароль.</p>';
    }
}

include "footer.html";
?>
