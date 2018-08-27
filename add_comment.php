<?php
	include 'config.php';

	$date = date('d.m.Y H:i');

	$nl = strlen($_POST['name']);
	$tl = strlen($_POST['text']);
	$ml = strlen($_POST['mail']);
	$id_article = $_GET['id_article'];

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$text = $_POST['text'];

	if($nl<0 or $nl>60 or $ml<0 or $ml>60 or $tl<0 or $tl>500 or $_POST['nr']!='nerobot')
	{$validate = false;}
	else{$validate = true;}

	if($validate) {

		mysqli_query($con, "INSERT INTO `comments`(`id_article`, `name`, `mail`, `text`, `date_add`, `public`) VALUES ('{$id_article}', '{$name}', '{$mail}', '{$text}', '{$date}', '0')");
		echo '<font color="green">Комментарий добавлен!</font>';
			}
			else {
				echo '<font color="red">Заполните правильно поля</font>';
			}