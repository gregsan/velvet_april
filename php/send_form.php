<?php
header("Content-type: text/html; charset=utf-8");

if($_POST['subject'] == '' OR $_POST['mess'] == '' OR $_POST['address'] == '' )
	{
	echo "<span id='error' class='alert alert-danger'>Заявка заполнена неверно</span>";	
	}	
else
	{		
	$headers  = "Content-type: text/plain; charset=utf-8 \r\n";
	$headers .= "From: Site Velvet <noreply@velvetapril.ru>\r\n"; 
	$to  = "<gregorysan92@gmail.com>";
	$subject = "Заявка с сайта Velvet April";
	$message = "Имя заказчика: ".$_POST['subject']."\r\n Сообщение: ".$_POST['mess']."\r\n Адресс заказчика: ".$_POST['address'];
	
	mail($to, $subject, $message, $headers); 
	
	echo "<span id='success' class='alert alert-success'>Ваша заявка отправлена. Спасибо!</span>";		
	}

