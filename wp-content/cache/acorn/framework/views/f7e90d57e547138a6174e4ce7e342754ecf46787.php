<?php if(isset($image) && $image): ?>
	<?php if(isset($parameter_is_id) && $parameter_is_id): ?>
		<?php $img_id = $image ?>
	<?php else: ?>
		<?php $img_id = isset($image['ID']) ? $image['ID'] : false ?>
	<?php endif; ?>
	<?php if(isset($img_id) && $img_id): ?>
		<?php echo wp_get_attachment_image($img_id, isset($size) && $size ? $size : 'full', false, ['class' => isset($class) ? $class : '']); ?>

	<?php else: ?>
		<img src="<?php echo e($image['url']); ?>" class="<?php echo e(isset($class) ? $class : ''); ?>" alt="<?php echo e(isset($image['alt']) ? $image['alt'] : ''); ?>" loading="lazy">
	<?php endif; ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/responsive-acf-image.blade.php ENDPATH**/ ?>