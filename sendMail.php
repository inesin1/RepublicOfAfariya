<?php
//Имя
$name = $_POST['username'];

//Тема
$subject = $_POST['subject'];

// Сообщение
$message = $_POST['message'];

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
mail('republica-of-afaria@yandex.ru', $subject, $name.'\r\n\r\n'.$message);
?>