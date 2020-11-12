<?php
session_start();
include 'conectarea.php';
if ( !isset($_POST['username'], $_POST['parola']) ) {
	die ('Fill all rows!');
}
if ($stmt = $conexiune->prepare('SELECT id, parola FROM conturi WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
}
$stmt->store_result();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $parola);
	$stmt->fetch();
	if ($_POST['parola'] === $parola) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: home.php');
	} else {
		echo 'Incorect password!';
	}
} else {
	echo 'Incorect username!';
}
$stmt->close();
?>