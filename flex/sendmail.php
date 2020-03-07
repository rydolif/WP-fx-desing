<?php
	$SITE_TITLE = 'Flex';
	$SITE_DESCR = '';

	if ( isset($_POST) ) {
		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));
		$mail = htmlspecialchars(trim($_POST['email']));
		$comment = isset($_POST['comment']) ? htmlspecialchars(trim($_POST['comment'])) : '';
		$namepl = htmlspecialchars(trim($_POST['namepl']));
		$phonepl = htmlspecialchars(trim($_POST['phonepl']));
		$mailpl = htmlspecialchars(trim($_POST['emailpl']));
		$commentpl = isset($_POST['commentpl']) ? htmlspecialchars(trim($_POST['commentpl'])) : '';

		$subject = $_POST['subject'] ? htmlspecialchars(trim($_POST['subject'])) : '';

		$to = 'flexdesign.sales@gmail.com';

		$headers = "From: $SITE_TITLE \r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";


		$data = '<h1>'.$subject."</h1>";

	//---------------ru-----------------
		if ( $name != '' ) {
			$data .= 'Имя: '.$name."<br>";
		}

		if ( $phone != '' ) {
			$data .= 'Телефон: '.$phone."<br>";
		}
		
		if ( $mail != '' ) {
			$data .= 'Почта: '.$mail."<br>";
		}
		
		if ( $comment != '' ) {
			$data .= 'Запрос: '.$comment."<br>";
		}


	//---------------pl-----------------
		if ( $namepl != '' ) {
			$data .= 'Имя: '.$namepl."<br>";
		}

		if ( $phonepl != '' ) {
			$data .= 'Телефон: '.$phonepl."<br>";
		}
		
		if ( $mailpl != '' ) {
			$data .= 'Почта: '.$mailpl."<br>";
		}
		
		if ( $commentpl != '' ) {
			$data .= 'Запрос: '.$commentpl."<br>";
		}
		
		

		$message = "<div style='background:#ccc;border-radius:10px;padding:20px;'>
				".$data."
				<br>\n
				<hr>\n
				<br>\n
				<small>это сообщение было отправлено с сайта ".$SITE_TITLE." - ".$SITE_DESCR.", отвечать на него не надо</small>\n</div>";
		$send = mail($to, $subject, $message, $headers);

		if ( $send ) {
			echo '';
		} else {
				echo '<div class="error">Ошибка отправки формы</div>';
		}

	}
	else {
			echo '<div class="error">Ошибка, данные формы не переданы.</div>';
	}
	die();
?>