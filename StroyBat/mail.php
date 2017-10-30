<?php
	//Принимаем постовые данные
	$whatever=$_POST['whatever'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$user_message=$_POST['user_message'];
	//Тут указываем на какой ящик посылать письмо
	$to = "mr.poidenko@gmail.com";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Заявка с сайта";
	// Сообщение письма
	$message = "
		Форма которую заполнил User: ".htmlspecialchars($whatever)."<br>
		Имя пользователя: ".htmlspecialchars($username)."<br>
		Email: ".htmlspecialchars($email)."<br>
		Message: ".htmlspecialchars($user_message);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: project15 <putin@project15.ua>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: /');
	exit();
?>