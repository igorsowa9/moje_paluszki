<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "kontakt.php":
			$CURRENT_PAGE = "Kontakt"; 
			$PAGE_TITLE = "Kontakt do nas";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>