<?php
define ( "DB_SERVER_NAME", "localhost" );
define ( "DB_USER_NAME", "root" );
define ( "DB_PASSWORD", "" );
define ( "DB_NAME", "elarabi" );
define ( "TABLE_AVAILABLE_APPOINTMENTS", "availableappointments" );
define ( "APPOINTMENT_DAYS", serialize(array(
	"monday" => "",
	"tuesday" => "",
	"wednesday" => "",
	"thursday" => "",
	"friday" => "",
	"saturday" => "",
	"sunday" => "",
)));
define("MAIL_HOST", "smtp.gmail.com");
define("MAIL_USERNAME", "chetanadharavathu@gmail.com");
define("MAIL_PASSWORD", "marvels29!");
define("MAIL_SMTP_SECURE", "tls");
define("MAIL_PORT", "587");
define("MAIL_FROM", "chetanadharavathu@gmail.com");
define("MAIL_FROM_NAME", "Chetana Dharavathu");
define("SUBJECT_FEEDBACK", "User feedback from telarabi.com");
define("THANKS_FEEDBACK", "Thank you for your valuable feedback");
define("ERROR_FEEDBACK", "Some error while sending feedback");
?>