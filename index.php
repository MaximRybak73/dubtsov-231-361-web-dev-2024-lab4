<?php
include("header.html");

$FIO = isset($_GET["FIO"]) ? $_GET["FIO"] :"";
$Email = isset($_GET["Email"]) ? $_GET["Email"] :"";
$state = isset($_GET["state"]) ? $_GET["state"] :"";
?>

<body>
    <form action="home.php" method="POST">
        <label for="FIO">Введите ФИО:</label>
        <input type="text" placeholder="ФИО" id="FIO" name="FIO" value="<?php echo $FIO; ?>"><br><br>

        <label for="Email">Введите Email:</label>
        <input type="text" placeholder="Email" id="Email" name="Email" value="<?php echo $Email; ?>"><br>

        <label>Откуда узнали о нас?</label>
        <label><input type="radio" name="state" value="От друзей" <?php if ($state == 'От друзей') echo 'checked'; ?>> От друзей</label>
        <label><input type="radio" name="state" value="Реклама" <?php if ($state == 'Реклама') echo 'checked'; ?>> Реклама</label><br><br>
        <br>

        <label>Выберите тип обращения:</label>
        <select name="category">
            <option value="">---</option>
            <option value="Жалоба">Жалоба</option>
            <option value="Предложение">Предложение</option>
        </select><br><br>

        <textarea placeholder="Введите текст сообщения:" name="message"></textarea><br><br>

        <input type="file" name="attachment"><br><br>

        <label for="checkbox">Даю согласие на обработку персональных данных:</label>
        <input type="checkbox" name="agreement"><br><br>
        <input type="submit" value="Отправить"class="btn">
    </form>
    <?php include('footer.html');?>
</body>
</html>