<div class="module wysiwyg-module <?php echo e($block->classes); ?> <?php echo e($bottom_spacing); ?>"
    <?php if(isset($block->block->anchor)): ?> id="<?php echo e($block->block->anchor); ?>" <?php endif; ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="col wysiwyg-content">
                <?php echo $content; ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/fr-page-builder-module-wysiwyg.blade.php ENDPATH**/ ?>