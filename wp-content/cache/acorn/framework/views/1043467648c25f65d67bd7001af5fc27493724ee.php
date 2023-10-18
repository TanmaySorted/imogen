<?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main id="main" class="main">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
    <aside class="sidebar">
      <?php echo $__env->yieldContent('sidebar'); ?>
    </aside>
  <?php endif; ?>

<?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/layouts/app.blade.php ENDPATH**/ ?>