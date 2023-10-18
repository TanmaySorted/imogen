<div class="module responsive-image-module <?php echo e($block->classes); ?>" <?php if(isset($block->block->anchor)): ?> id="<?php echo e($block->block->anchor); ?>" <?php endif; ?>>
	<picture>
		<?php if($image_desktop && is_array($image_desktop)): ?>
			<source media="(min-width: 767px)" srcset="<?php echo e(isset($image_desktop['id']) ? wp_get_attachment_image_srcset($image_desktop['id'], 'full') : $image_desktop['url']); ?>">
		<?php endif; ?>
		<?php if($image_mobile && is_array($image_mobile)): ?>
			<source media="(max-width: 768px)" srcset="<?php echo e(isset($image_mobile['id']) ? wp_get_attachment_image_srcset($image_mobile['id'], 'full') : $image_mobile['url']); ?>">
		<?php endif; ?>
		<?php if(($image_desktop && is_array($image_desktop)) || ($image_mobile && is_array($image_mobile))): ?>
			<img class="fr-responsive-image" src="<?php echo e(is_array($image_desktop) && $image_desktop['url']? $image_desktop['url'] : $image_mobile['url']); ?>" alt="<?php echo e(@$image_desktop['alt'] ||  @$image_mobile['alt']); ?>" loading="lazy">
		<?php endif; ?>
	</picture>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/fr-page-builder-module-responsive-image.blade.php ENDPATH**/ ?>