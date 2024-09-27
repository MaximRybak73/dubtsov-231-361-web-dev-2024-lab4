<?php
$title = "RybolovClub73";
$current_page = 'login';
include "headerForAutent.html";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF-8 />
    <link href="style.css " rel="stylesheet" type="text/css" />
    <link href="images/icon.webp" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Macondo:regular" rel="stylesheet" />
    <title>
        <?php echo $title ?>
    </title>
</head>

<body>
    <form action="login.php" method="POST">
        <label for="user_name">Введите логин:</label>
        <input type="text" name="user_name" placeholder="login" maxlength="15" id="user_name"><br><br>

        <label for="password">Введите пароль:</label>
        <input type="password" name="password" placeholder="password" id="password"><br><br>

        <label for="checkbox">Запомнить меня:</label>
        <input type="checkbox" name="remember_me" id="checkbox"><br><br>

        <input type="submit" value="Войти">
    </form>
    <?php include "footer.html"; ?>
</body>

</html>