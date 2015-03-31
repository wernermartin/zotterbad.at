<?php

if ($_POST["submit"]) {

	$name = $_POST['InputName'];
	$email = $_POST['InputEmail'];
	$message = $_POST['InputMessage'];
	$human = intval($_POST['InputReal']);

	$from = 'Kontakt Formular - www.zotterbad.at';
	$headers = 'From: webmaster@zotterbad.at' . "\r\n" .
    'Reply-To: webmaster@zotterbad.at' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$to = 'hello@martinwerner.at'; 
	$subject = 'Nachricht von www.zotterbad.at';
	 
	$body = "Von: $name\n E-Mail: $email\n Nachricht:\n $message";

	if (!$_POST['InputName']) {
	    $errName = 'Bitte geben Sie einen Namen ein.';
	}

	if (!$_POST['InputMessage']) {
	    $errName = 'Bitte geben Sie eine Nachricht ein.';
	}

	if (!$_POST['InputEmail'] || !filter_var($_POST['InputEmail'], FILTER_VALIDATE_EMAIL)) {
	    $errEmail = 'Email Adresse nicht im korrekten Format.';
	}

	if ($human !== 7) {
	    $errHuman = 'Antispam nicht korrekt.';
	}

	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	    if (mail ($to, $subject, $body, $headers)) {
	        $result='<div class="alert alert-success">Danke vielmals für die Kontaktaufnahme.</div>';
	    } else {
	        $result='<div class="alert alert-danger">Leider ist ein Fehler aufgetreten. Versuchen Sie es bitte erneut.</div>';
	    }
	}
}

?>