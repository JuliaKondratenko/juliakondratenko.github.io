<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("juliet.kondratenko@gmail.com", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
