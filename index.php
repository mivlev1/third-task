<?php
// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8');

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    if (!empty($_GET['save'])) {
        // Если есть параметр save, то выводим сообщение пользователю.
        print('Спасибо, результаты сохранены.');
    }
    // Включаем содержимое файла form.php.
    include('form.php');
    // Завершаем работу скрипта.
    exit();
}
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.

// Проверяем ошибки.
$errors = FALSE;
if (empty($_POST['name-field'])) {
    print('Заполните имя.<br/>');
    $errors = TRUE;
}
if (empty($_POST['email-field'])) {
    print('Заполните email.<br/>');
    $errors = TRUE;
}
if (empty($_POST['data'])) {
    print('Заполните дату.<br/>');
    $errors = TRUE;
}
/*if (empty($_POST['radio-gender'])) {
    print('Выберите пол.<br/>');
    $errors = TRUE;
}
if (empty($_POST['radio-kon'])) {
    print('Выберите кол-во конечностей.<br/>');
    $errors = TRUE;
}
if (empty($_POST['select'])) {
    print('Выберите кол-во конечностей.<br/>');
    $errors = TRUE;
}*/
if (empty($_POST['check'])) {
    print('Вы не согласны с пользовательским соглашением.<br/>');
    $errors = TRUE;
}
// *************
// Тут необходимо проверить правильность заполнения всех остальных полей.
// *************

if ($errors) {
    // При наличии ошибок завершаем работу скрипта.
    exit();
}

//Объявляем переменные
$id=rand(0,999);
$name = $_POST['name-field'];
$email = $_POST['email-field'];
$dat = $_POST['date'];
$gender = $_POST['radio-gender'];
$kon = $_POST['radio-kon'];
$checkz = $_POST['checkz'];

$power = implode(",",$_POST['power']);
// Сохранение в базу данных.

$user = 'u41731';
$pass = '7439940';
$db = new PDO('mysql:host=localhost;dbname=u41731', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

// Подготовленный запрос. Не именованные метки.
try{
    $stmt = $db->prepare("INSERT INTO application SET name = ?, email=?, dat=?, gender=?, kon=?, checkz=?");
    $stmt -> execute([$_POST['name-field'], $_POST['email-field'], date('Y-m-d', strtotime($_POST['date'])), $_POST['radio-gender'], $_POST['radio-kon'], $_POST['ch']]);
    $stmt2 = $db->prepare("INSERT INTO super SET id = ?, power = ?");
    $stmt2 -> execute([$id,$power]);
}
catch(PDOException $e) {
    print('Error : ' . $e->getMessage());
    exit();
}

