<?php

$name = "";
$surname = "";
$email = "";
$password = "";

if( isset($_POST['name']) ){

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	echo $name."</br>";
	echo $surname."</br>";
	echo $email."</br>";
	echo $password."</br>";

}

?>