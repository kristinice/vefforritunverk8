<?php
// skilum UTF-8 til vafra með header
header('Content-Type: text/html; charset=utf-8');

// krefjumst þess að hafa registration klasann
require('registration.class.php');

// hér verður haldið utan um gögn og athugað hvort gögn séu gild
$registration = new Registration();

// server superglobal er með REQUEST_METHOD sem er HTTP aðferð sem notuð var
$method = $_SERVER['REQUEST_METHOD'];

$nameErr = ""; 												// KHM: skilgreini errorbreytu.
// er verið að post'a formi? Meðhöndlum þá gögn
if ($method === 'POST')
{
	// TODO fylla $registration af gögnum

	// TODO sannreyna gögn og birta skilaboð ef OK, annars villur

	if (empty($_POST["name"])) {							// KHM: ég setti þetta inn.
		$nameErr = "Vantar nafn!";
	} else {
		$name = test_input($_POST["name"]);
	}
}

// púslum saman viðmóti -- hér gæti þurft að hrista eitthvað upp í hlutunum
include('views/header.php');
include('views/form.php');
include('views/footer.php');