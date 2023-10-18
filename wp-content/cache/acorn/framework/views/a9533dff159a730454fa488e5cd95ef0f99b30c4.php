<div class="taxonomy-filter filter-input">
    <h6><?php echo e(($taxonomyFilterLabels[$filter]?:'')); ?></h6>
    <select class="bs-multiselect <?php echo e(count($options) === 0 ? 'empty' : ''); ?>" name="<?php echo e($filter); ?>" multiple multiselect-config='{"numberDisplayed":1}'>
        <option value="" class="default"><?php echo e(($filterDefaultLabels[$filter]?:'All')); ?></option>

        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($option['key']); ?>" <?php echo e(in_array($option['key'], isset($defaultFilters[$filter])?$defaultFilters[$filter]:[])?'selected':''); ?>><?php echo e($option['value']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/forms/filter/select.blade.php ENDPATH**/ ?>