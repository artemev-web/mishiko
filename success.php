<?php
header("Content-Type: text/html; charset=utf-8");

$refferer = getenv('HTTP_REFERER');
$phone = htmlspecialchars($_POST["phone"]);
$subject = htmlspecialchars($_POST["subject"]);
$name = htmlspecialchars($_POST["name"]); 
$email = htmlspecialchars($_POST["email"]); 
$tema = "Сообщение с сайта";


$message_to_myemail = "<b>Заявка с сайта</b> <br>
	Заявка из формы: \"$subject\" <br>
	<table style='width: 100%;'>
	<tr style='background-color: #f8f8f8;'>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя заявителя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$name</td>
	</tr>
	<tr>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>
			<b>Email заявителя:</b>
		</td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td>
	</tr>
	<tr style='background-color: #f8f8f8;'>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>
			<b>Номер телефона заявителя:</b>
		</td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td>
	</tr>
	</table><br>";

$message_to_myemail .= "Источник (ссылка): $refferer";

$myemail = "dm.minyo@gmail.com"; // e-mail администратора
$headers = 'From: Denis Gavrilov <dm.minyo@gmail.com>' . "\r\n" . 
'MIME-Version: 1.0' . "\r\n".
'Content-type: text/html; charset=utf-8' . "\r\n";

// Отправка письма администратору сайта

mail($myemail, $tema, $message_to_myemail,  $headers, 'dm.minyo@gmail.com');