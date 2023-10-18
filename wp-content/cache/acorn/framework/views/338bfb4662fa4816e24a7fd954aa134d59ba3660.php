<div class="search-container filter-input">
	<h6>Search</h6>
	<div class="input-container">
		<label for="<?php echo e($searchId); ?>">
			<input type="text" name="s" placeholder="Search" id="<?php echo e($searchId); ?>">
		</label>
		<?php echo $__env->make('partials.search-button', ['attr' => 'type="submit"', 'extra_class' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/forms/filter/search.blade.php ENDPATH**/ ?>