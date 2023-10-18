<div class="container">
  <article <?php (post_class()); ?>>
    <header>
      <h3 class="entry-title">
        <?php echo $title; ?>

      </h3>   
    </header>
    <div class="post-meta-data">
      <?php echo $__env->make('partials.entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php if (isset($component)) { $__componentOriginal9d4f7aaeb424966ff600ac8a846d2a10ca7ac3c2 = $component; } ?>
<?php $component = App\View\Components\ShareButton::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ShareButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d4f7aaeb424966ff600ac8a846d2a10ca7ac3c2)): ?>
<?php $component = $__componentOriginal9d4f7aaeb424966ff600ac8a846d2a10ca7ac3c2; ?>
<?php unset($__componentOriginal9d4f7aaeb424966ff600ac8a846d2a10ca7ac3c2); ?>
<?php endif; ?>
    </div>
    <div class="entry-content">
      <?php (the_content()); ?>
    </div>
    
    <?php echo $__env->make('partials.entry-author-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <footer>
      <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

    </footer>
  </article>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/partials/content-single.blade.php ENDPATH**/ ?>