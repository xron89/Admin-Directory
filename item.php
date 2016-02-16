<?php

require 'app/start.php';

if (empty($_GET['item'])) {
	$listing = false;
} else {
	$id = $_GET['item'];

	$listing = $db->prepare("
		SELECT *
		FROM listings
		WHERE id = :id
		LIMIT 1
	");

	$listing->execute(['id' => $id]);

	$listing = $listing->fetch(PDO::FETCH_ASSOC);
}

require VIEW_ROOT . '/templates/item.php';
?>
