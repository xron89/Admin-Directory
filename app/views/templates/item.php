<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (!$listing): ?>
		<p>Whoops! No listing found.</p>
	<?php else: ?>
		<h2><?php echo $listing['title']; ?></h2>
	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>