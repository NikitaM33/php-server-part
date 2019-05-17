<?php

	if ($_POST['contact_f']) {
		// captcha_valid();
		email_valid();

		if ( strlen($_POST['message']) < 1 or strlen($_POST['message']) > 10000 )
			message('Длина сообщения должна составлять 1 - 100 символов');
		mail('constantin.dmitriewitch@yandex.ru', 'Обращение в службу поддержки', 'E-mail отправителя: <b>'.$_POST['email'].'</b><p>'.htmlspecialchars($_POST['message']).'</p>');
		message('Сообщение отправлено');

	}

?>