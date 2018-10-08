<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "paluszki.php":
			$CURRENT_PAGE = "Paluszki"; 
			$PAGE_TITLE = "Paluszki Tatrzanskie - Nasze Paluszki";
			break;
		case "onas.php":
			$CURRENT_PAGE = "O nas"; 
			$PAGE_TITLE = "Paluszki Tatrzanskie - O nas";
			break;
		case "kontakt.php":
			$CURRENT_PAGE = "Kontakt"; 
			$PAGE_TITLE = "Paluszki Tatrzanskie - Kontakt do nas";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Paluszki Tatrzanskie Traker-Plus Chrzanow";
	}
	$HEAD_DESCRIPTION = "Paluszki Tatrzańskie to grupa produktów firmy Traker Plus z Chrzanowa. Oferujemy paluszki w sześciu smakach. Nasze produkty są najwyższej jakości.";
	$KEY_WORDS = "paluszki, tatrzanskie, chrzanow, sowa";
?>