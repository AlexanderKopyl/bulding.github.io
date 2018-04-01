<?php

$name = $_POST["name"];
$email = $_POST["email"];
$adress = $_POST["adress"];
$tel = $_POST["tel"];
$mailheaders = "Content-type: text/html; charset=UTF-8 \r\n";
$mailheaders .= "From: fire.co.ua <no-reply@fire.co.ua>";
$mailheaders .= "Reply-To: fire.co.ua";
$adminEmail = "anast.nosal@gmail.com";
$text = "<p>Ваше имя :". $_POST['name']. "</p><p> Ваш Телефон: ".$_POST['tel']. " </p><p>Ваш Email: ".$_POST['email']. "</p><p>Ваш Adress:" .$_POST['adress']."</p><br><p>Вы зарегистрировались на обратный звонк , через время вас наберут</p>";
$textForAdmin = "<p>Имя Пользователя :". $_POST['name']. "</p><p>Телефон пользователя: ".$_POST['tel']. " </p><p>Email пользователя: ".$_POST['email']. "</p><p>Adress пользователя:" .$_POST['adress']."</p><br><p>Свяжитесь с клиентом для выяснения нюансов</p>";
mail($email,"Form Test site",$text,$mailheaders);
mail($adminEmail,"Form Test site",$textForAdmin,$mailheaders);
header('Location:index.html');
exit;


?>
