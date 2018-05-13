<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST{'message'};


$email_message = "
Новая заявка!

Имя: ".$name."
Email: ".$email."
Сообщения: ".$message."


";

mail ("juliet.kondratenko@gmail.com" , "Новая заявка", $email_message);?>
