<div
    class="module layout-module <?php echo e($block->classes); ?> layout-<?php echo e($layouts); ?> <?php echo e($is_flipped ? 'flipped' : ''); ?> <?php echo e($bottom_spacing); ?>">
    <?php if($block->preview): ?>
        <div fr-column-inserter style="display: <?php echo e(in_array($layouts, array_keys($choices)) ? 'none' : ''); ?>">
            <p>Select a layout to start, layout:</p>
            <div class="btn-group" role="group" aria-label="Select a layout to start editing.">
                <?php $__currentLoopData = $choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="radio" class="btn-check" name="btnradio" value="<?php echo e($i); ?>"
                        id="lay-<?php echo e($block->block->id); ?>-<?php echo e($i); ?>" autocomplete="off"
                        <?php echo e($i === $layouts ? 'checked="true"' : ''); ?>>
                    <label class="btn btn-outline-primary" for="lay-<?php echo e($block->block->id); ?>-<?php echo e($i); ?>">
                        <b class="btn-group-b" style="background-image:url(<?= \Roots\asset('images/column_' . $i . '.svg'); ?>);"></b>
                        <span>
                            <?php echo e($val); ?>

                        </span>
                    </label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="container-fluid" <?php echo $max_width; ?>>
        <div class="row">
            <InnerBlocks orientation="horizontal" allowedBlocks='<?php echo e($allowed_blocks); ?>' />
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/fr-page-builder-module-free-range-columns.blade.php ENDPATH**/ ?>