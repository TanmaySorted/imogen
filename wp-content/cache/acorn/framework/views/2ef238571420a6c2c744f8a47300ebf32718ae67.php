<div class="social-wrapper">
	<?php $__empty_1 = true; $__currentLoopData = $social_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<a class="alt-btn" href="<?php echo e($l['url']?: '#'); ?>" target="_blank" title="<?php echo e($l['type'] ? 'Follow us on ' . $l['type']['label'] : ''); ?>" aria-label="<?php echo e($l['type'] ? 'Follow us on ' . $l['type']['label'] : ''); ?>">
			<?php if($l['type']): ?>
				<img src="<?php echo e(asset('images/'.$l['type']['value']).'-tr.svg'); ?>" alt="<?php echo e($l['type'] ? 'Follow us on ' . $l['type']['label'] : ''); ?>" loading="lazy">
			<?php endif; ?>
		</a>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<?php endif; ?>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/social-links.blade.php ENDPATH**/ ?>