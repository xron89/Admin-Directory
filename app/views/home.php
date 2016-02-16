<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($listings)): ?>
		<p>No results found.</p>
	<?php else: ?>
		<?php foreach ($listings as $listing): ?>
			<li><a href="<?php echo BASE_URL; ?>/item.php?item=<?php echo $listing['id']; ?>"><?php echo $listing['title']; ?></a></li>
		<?php endforeach; ?>
	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>