<div class="fr-col <?php echo e($block->classes); ?>">
  <?php if($block->preview): ?>
      <div class="fr-empty-slot"></div>
  <?php endif; ?>
  <InnerBlocks allowedBlocks='<?php echo e($allowed_blocks); ?>'/>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/fr-column.blade.php ENDPATH**/ ?>