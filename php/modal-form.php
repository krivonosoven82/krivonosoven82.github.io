<?php
	$resepient = 'besaevaleksandr@gmail.com';
	$sitename = 'Action Studio Mix';
	$name = trim($_POST['name']);
	$phone = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$messageShow = "Name: $name \nPhone: $phone \nEmail: $email";
	$pagetitle = "new order to site \"$sitename\"";
	mail($recepient, $pagetitle, $messageShow, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
 ?>
