<div class="fr-content-row <?php echo e($block->classes); ?> <?php echo e($background_color); ?> <?php echo e($show_top_wave); ?> vert-pad-<?php echo e($vertical_padding); ?> vert-stack-<?php echo e($vertically_stack_content); ?>" <?php if(isset($block->block->anchor)): ?> id="<?php echo e($block->block->anchor); ?>" <?php endif; ?>>
	<?php if($background_image || $background_image_mobile): ?>
		<?php if($background_image_size == 'contain'): ?>
			<?php echo $__env->make('components.responsive-acf-image', ['image' => $background_image, 'class' => 'row-bg-image desktop'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php else: ?>
			<?php echo $__env->make('components.bg-image-size-auto', ['image' => $background_image, 'class' => 'hide-on-mobile', 'margins' => $background_image_dimensions], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endif; ?>

		<?php if($background_image_mobile_size == 'contain'): ?>
			<?php echo $__env->make('components.responsive-acf-image', ['image' => $background_image_mobile, 'class' => 'row-bg-image mobile'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php else: ?>
			<?php echo $__env->make('components.bg-image-size-auto', ['image' => $background_image_mobile, 'class' => 'hide-on-desktop', 'margins' => $background_image_dimensions], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endif; ?>

		<?php if($background_color_overlay): ?>
			<div class="row-bg-overlay" <?php echo $background_color_overlay; ?>></div>
		<?php endif; ?>
	<?php endif; ?>
	<div class="container <?php echo e($content_max_width); ?> <?php echo e($custom_max_width_class); ?>" <?php echo $container_atts; ?>>
		<?php if($block->preview): ?>
			<div class="fr-empty-slot empty-slot-content-section">
				<i>Edit “Block Container” settings on <a href="javascript:void(0)" fr-open-sidebar-btn>Sidebar Settings <svg style="background: black; margin-left: 5px;" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill-rule="evenodd" clip-rule="evenodd" fill="white" d="M18 4H6c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-4 14.5H6c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h8v13zm4.5-.5c0 .3-.2.5-.5.5h-2.5v-13H18c.3 0 .5.2.5.5v12z"></path></svg></a> panel. <br>Click the Appender <span class="appender-icon"></span> below to add Content Blocks, or add “Free Range Columns” to create new row structures.</i>
			</div>
		<?php endif; ?>
		<InnerBlocks allowedBlocks='<?php echo e($allowed_blocks); ?>' />
	</div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/block-container.blade.php ENDPATH**/ ?>