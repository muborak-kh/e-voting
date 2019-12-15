<?php
	require_once 'rb.php';
	require_once 'recaptcha/recaptchalib.php';
	R::setup('mysql:host=localhost;dbname=election', 'root', '');
	session_start();
?>
