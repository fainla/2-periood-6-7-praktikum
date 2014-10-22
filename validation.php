<?php
	//KOntrolliba kas lehele satuti get päringuga või postituse tagajärjel
	
	$isSubmitted = isset($_POST["submit"]);
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$age = $_POST["age"];
		$food = $_POST["food"];
		$email = $_POST["email"];
	}
	$min= 2;
	$max= 20;
	//kasutjanimi, min max väärtuste kontroll
	if (!isset($username) || $username == "") {
		$usernameMessage= '<div class= "form_message form_error"> Palun sisesta kasutajanimi</div>';
		
	} elseif (strlen($username) < $min) {
		$usernameMessage= '<div class= "form_message form_error"> Kasutajanimi peab olema ' . $min . ' tähemärki pikk</div>';
	}  elseif (strlen($username) > $max) {
		$usernameMessage= '<div class= "form_message form_error"> Kasutajanimi ei tohi olla üle ' . $max . ' tähemärgi pikk</div>';
	}
	else {
		$usernameMessage='<div class= "form_message form_notice"> Kasutajanimi sobis </div>';

	}
	//vanuse andmetüübi kontroll
	if (isset($age) and !is_numeric($age)) {
		$ageMessage= '<div class= "form_message form_error"> Vanus peab olema numbriline väärtus </div>';
	} else {
		$ageMessage= '<div class= "form_message form_notice"> Vanus sobis </div>';
	}
	//rühma kuuluvuse kontroll
		$foods = array("kapsas", "porgand", "mais");
		if (isset ($food) and in_array(strtolower($food), $foods))
		{
		$foodMessage= '<div class= "form_message form_notice"> Söök on valikus </div>';
	} else {
		
		$foodMessage= '<div class= "form_message form_error"> Sööki pole valikus</div>';
	}

		if (isset($email) and preg_match("/@/", $email))
		{
		$emailMessage= '<div class= "form_message form_notice"> E-mail sobis </div>';
	} else {
		
		$emailMessage= '<div class= "form_message form_error"> E-mail on vale </div>';
	}
?>