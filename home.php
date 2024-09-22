<?php include("header.html");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $FIO = $_POST['FIO']; /* получить значение из поля с именем FIO */
    $email = $_POST['Email'];
    $message = $_POST['message'];
    $category = $_POST['category'];
    $state = isset($_POST['state']) ? $_POST['state'] : '';

    echo '<p> Здравствуйте, ' . $FIO . '!</p>'; //выводим ФИО
    if ($category == 'Предложение') { //проверяем тип обращения
        echo '<p>Спасибо за ваше предложение:</p>';
        echo '<textarea>' . $message . '</textarea>';//вывод текста сообщения
    } else {
        echo '<p>Мы рассмотрим Вашу жалобу:</p>';
        echo '<textarea>' . $message . '</textarea>';
    }

    if (isset($_POST['attachment']) & $_POST['attachment'] != '')
        echo '<p>Вы приложили следующий файл: ' . $_POST['attachment'] . "</p>";

        echo '<br><a class="btn" href="index.php?FIO=' . urlencode($FIO) . '&Email=' . urlencode($email) . '&state=' . urlencode($state) . '">Заполнить снова</a>';
}
include('footer.html');
?>
</body>

</html>