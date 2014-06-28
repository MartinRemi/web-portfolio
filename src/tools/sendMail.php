<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	$to = 'martinremi60@gmail.com';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $email";
	$ok = mail($to, $subject, $content, $headers);
	header('Content-type: application/json'); echo $ok ? json_encode(array("status" => true)) : json_encode("status" => false));
?>
