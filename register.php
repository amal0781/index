<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Задаем путь к файлу, в который будут сохраняться данные
    $file = 'users.txt';

    // Формируем строку для записи
    $data = "Имя: $name, Email: $email, Пароль: $password\n";

    // Записываем данные в файл
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "Данные успешно сохранены!";
    } else {
        echo "Ошибка при сохранении данных.";

    }

}

?>