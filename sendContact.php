<?php

	$from = "ro_alex@consultingarsi.com";
	$from_name = "Consulting Arsi";
	$subject = "Contacto";

	$to = $_POST['email'];

	// collect data
	$body = "";
	foreach($_POST as $key => $val)
	{
		if($key != 'captcha')
			$body .= ucfirst($key).": ".$val."\r\n";
	}

	// construct MIME PLAIN Email headers
	$header = "MIME-Version: 1.0\n";
	$header .= "Content-type: text/plain; charset=utf-8\n";
	$header .= "From: $from_name <$from>\r\nReply-To: $from_name <$from>\r\nReturn-Path: <$from>\r\n";

	// send email
	$mail_sent = mail($from, $subject, $body, $header);
?>
