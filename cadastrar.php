<?php

$username = $_POST['username'];

$password = $_POST['password'];

$con = new PDO("mysql:host=localhost;dbname=bancoprojeto", "root", "");

$stmt = $con->prepare("INSERT INTO pessoas(id, usuario, senha) VALUES('$id','$username','$passaword')");

	$stmt->execute();
?>