


<?php 
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) 
{
    $headers = 'From: Julia Kondratenko\r\n' .
                'Reply-To: juliet.kondratenko@gmail.com\r\n' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новое сообщение с сайта";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Имя: ".$_POST['name'];
    $letter .="\nEmail: ".$_POST['email'];
    $letter .="\nСообщение: ".$_POST['message'];
    
    if (mail("juliet.kondratenko@gmail.com", $theme, $letter, $headers)){
      header("Location: /thankyou.html");
    } else {
      header("Location:");
    }  
              
} else {
  header("Location:");
}
?>