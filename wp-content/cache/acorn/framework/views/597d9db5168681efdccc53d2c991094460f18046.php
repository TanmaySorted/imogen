<button class="search-btn <?php echo e(isset($extra_class) ? $extra_class : ''); ?> <?php echo e(isset($has_dropdown) && $has_dropdown ? 'has-search-dropdown' : ''); ?>" <?php echo isset($attr) ? $attr : ''; ?>>
	<?php if(isset($has_dropdown) && $has_dropdown): ?>
		<img class="search-icon" src="<?= \Roots\asset('images/search.svg'); ?>" loading="lazy"/>
		<img class="close-icon" src="<?= \Roots\asset('images/close.svg'); ?>" loading="lazy"/>
	<?php endif; ?>
</button><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/partials/search-button.blade.php ENDPATH**/ ?>