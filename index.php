<?php

require 'app/start.php';

$listings = $db->query("
	SELECT id, title, label
	FROM listings
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';

