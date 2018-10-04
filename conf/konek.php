<?php
$kon = null;

try {
	$kon = new PDO("mysql:host=localhost;dbname=test","sapa","melbu");
} catch (PDOException $e) {
	echo $e->getMessage();
}
