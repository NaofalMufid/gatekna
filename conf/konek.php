<?php
$kon = null;

try {
	$kon = new PDO("mysql:host=localhost;dbname=test","root","");
	//var_dump($kon);
} catch (PDOException $e) {
	var_dump($e->getMessage());
}