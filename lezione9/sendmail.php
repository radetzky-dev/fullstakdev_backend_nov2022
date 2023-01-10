<?php
const __SENDER_NAME__  = "Paolo";
const __SENDER_EMAIL__ = "testtest.it";
const __RECIPIENT_EMAIL__  = "paolo.roversi@gmail.com";

const LINE_BREAK = "\r\n";

$headers = array(
	'From'     => __SENDER_NAME__ . '<' . __SENDER_EMAIL__ . '>',
	'X-Mailer' => 'PHP/' . phpversion()
);

$subject = "Test Email Subject";

$message = "Hello, "
           . LINE_BREAK . "Some important message."
           . LINE_BREAK . "Greeting.";

$message = wordwrap($message, 70, LINE_BREAK);

$to = __RECIPIENT_EMAIL__;

$mailSendingResult = mail($to, $subject, $message, $headers );

if ($mailSendingResult) {
	echo 'success';
} else {
	echo 'failure';
}