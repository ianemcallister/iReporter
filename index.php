<?
session_start();
require("lib.php");
require("api.php");

header("Content-Type: application/json");

//API
switch ($_POST['command']) {
	case "login":
		login($_POST['username'], $_POST['password']); break;
	
	case "register":
		register($_POST['username'], $_POST['password']); break;

	case "upload":
		upload($_SESSION['IdUser'], $_FILES['file'], $_POST['title']); break;
}
exit();
?>