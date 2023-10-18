<div class="card-filter-component">
	<form action="javascript:void(0);" method="get" class="filter-form" id="<?php echo e($filterId); ?>" form-elements="<?php echo e(json_encode(array_values($formElements))); ?>">
		<div class="filter-input-col taxonomy-filters">
			<div class="filter-container">
				<?php $__currentLoopData = $taxonomyFilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($filter === 'programs'): ?>
						<?php echo $__env->make('forms.filter.select-with-group', ['filter' => $filter, 'options' => $options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php else: ?>
						<?php echo $__env->make('forms.filter.select', ['filter' => $filter, 'options' => $options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php if($includeSearch): ?>
					<?php echo $__env->make('forms.filter.search', [], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endif; ?>
			</div>
		</div>
	</form>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/card-grid-filter.blade.php ENDPATH**/ ?>