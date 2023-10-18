<div class="fr-hero hero <?php echo e($block->classes); ?>">
    <?php echo $__env->make('components.responsive-acf-image', [
        'image' => $background_image,
        'class' => 'hero-bg-image desktop',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.responsive-acf-image', [
        'image' => $background_image_mobile,
        'class' => 'hero-bg-image mobile',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 content-col wysiwyg-content">
                    <?php echo $content; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/hero.blade.php ENDPATH**/ ?>