<div class="fr-share-button">
	<h6 class="share-txt">Share:</h6>
	<div class="share-dialog">
		<?php if($links && is_array($links)): ?>
			<ul class="social-sharing-links">
				<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<a class="share-btn <?php echo e($l['class']); ?>" href="<?php echo e($l['url']); ?>" title="<?php echo e($l['text']); ?>" target="_blank">
						<span class="icon-span <?php echo e($l['class']); ?>-span">
							<img src="<?= \Roots\asset('images/' . $l['class'] . '.svg'); ?>" loading="lazy" alt="<?php echo e($l['class']); ?> icon">
						</span>
						<?php if($l['class'] === 'link-share'): ?>
								<span class="link-btn-copied">Link copied!</span>
							<?php endif; ?>
							
						</a>
					</li>
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
			</ul>
		<?php endif; ?>
	</div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/share-button.blade.php ENDPATH**/ ?>