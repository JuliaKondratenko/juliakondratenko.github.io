<?php

/* Code by David McKeown - craftedbydavid.com */
/* Editable entries are bellow */

// $send_to = "juliet.kondratenko@gmail.com";
// $send_subject = "Ajax form ";



/*Be careful when editing below this line */

// $f_name = cleanupentries($_POST["name"]);
// $f_email = cleanupentries($_POST["email"]);
// $f_message = cleanupentries($_POST["message"]);
// $from_ip = $_SERVER['REMOTE_ADDR'];
// $from_browser = $_SERVER['HTTP_USER_AGENT'];

// function cleanupentries($entry) {
// 	$entry = trim($entry);
// 	$entry = stripslashes($entry);
// 	$entry = htmlspecialchars($entry);

// 	return $entry;
// }

// $message = "This email was submitted on " . date('m-d-Y') .
// "\n\nName: " . $f_name .
// "\n\nE-Mail: " . $f_email .
// "\n\nMessage: \n" . $f_message .
// "\n\n\nTechnical Details:\n" . $from_ip . "\n" . $from_browser;

// $send_subject .= " - {$f_name}";

// $headers = "From: " . $f_email . "\r\n" .
//     "Reply-To: " . $f_email . "\r\n" .
//     "X-Mailer: PHP/" . phpversion();

// if (!$f_email) {
// 	echo "no email";
// 	exit;
// }else if (!$f_name){
// 	echo "no name";
// 	exit;
// }else{
// 	if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
// 		mail($send_to, $send_subject, $message, $headers);
// 		echo "true";
// 	}else{
// 		echo "invalid email";
// 		exit;
// 	}
// }

?>

<?php
$to = "juliet.kondratenko@gmail.com"; // емайл получателя данных из формы 
$tema = "Форма обратной связи на PHP"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>
