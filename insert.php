<?php
session_start();
include ("conectarea.php");
$username=$_POST['username'];
$parola=$_POST['parola'];
$email=$_POST['email'];
$query="INSERT INTO conturi ( username, parola, email) VALUES ('$username','$parola','$email')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_error($conexiune));
} 
else {
header('Location: index1.html');
}
mysqli_close($conexiune);
?>