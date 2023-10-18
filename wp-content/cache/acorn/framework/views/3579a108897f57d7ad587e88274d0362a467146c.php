<div class="modal fade fr-modal card-modal" id="<?php echo e($modalId); ?>" tabindex="-1" aria-labelledby="<?php echo e($modalId); ?>" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<img src="<?= \Roots\asset('images/close.svg'); ?>" alt="Close" loading="lazy">
				</button>
			</div>
			<div class="modal-body">
				<?php if (isset($component)) { $__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d = $component; } ?>
<?php $component = App\View\Components\Spinner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Spinner::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d)): ?>
<?php $component = $__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d; ?>
<?php unset($__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d); ?>
<?php endif; ?>
				<div class="card-content"></div>
			</div>
		</div>
	</div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/card-modal/modal.blade.php ENDPATH**/ ?>