<?php if($show_stay_connected): ?>
  <?php if (isset($component)) { $__componentOriginal131d4b3d99a398772ac4538239e90f76a55e938b = $component; } ?>
<?php $component = App\View\Components\StayConnected::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stay-connected'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StayConnected::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal131d4b3d99a398772ac4538239e90f76a55e938b)): ?>
<?php $component = $__componentOriginal131d4b3d99a398772ac4538239e90f76a55e938b; ?>
<?php unset($__componentOriginal131d4b3d99a398772ac4538239e90f76a55e938b); ?>
<?php endif; ?>
<?php endif; ?>
<footer class="content-info">
  <div class="waveWrapper waveAnimation">
  <div class="wave"></div>
  </div>
    <div class="container">
        <div class="footer-header">
            <div class="footer-logo">
                <?php if(isset($logo) && isset($logo['url'])): ?>
                    <img src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['alt']); ?>" loading="lazy">
                <?php endif; ?>
            </div>
            <div class="tagline">
                <?php echo $tagline; ?>

            </div>
        </div>
        <div class="footer-content">
            <div class="footer-left footer-column navbar">
              <?php if(has_nav_menu('footer_navigation')): ?>
                <?php echo wp_nav_menu($footerNavigation); ?>

              <?php endif; ?>
            </div>
            <div class="footer-right footer-column">
                <label><?php echo e($subscribe_label?: 'Subscribe for updates'); ?></label>
                <div class="subscribe-conatiner">
                  <?php if($subscribe_form_shortcode): ?>
                  <?php echo do_shortcode($subscribe_form_shortcode) ?>
                  <?php endif; ?>
                </div>
                <label><?php echo e($follow_us_label?: 'Follow Us'); ?></label>
                <?php if($social_links): ?>
									<?php if (isset($component)) { $__componentOriginal355b43d127242619ccb1c95a680b7b9a3dcbf358 = $component; } ?>
<?php $component = App\View\Components\SocialLinks::resolve(['data' => $social_links] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('social-links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SocialLinks::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal355b43d127242619ccb1c95a680b7b9a3dcbf358)): ?>
<?php $component = $__componentOriginal355b43d127242619ccb1c95a680b7b9a3dcbf358; ?>
<?php unset($__componentOriginal355b43d127242619ccb1c95a680b7b9a3dcbf358); ?>
<?php endif; ?>
								<?php endif; ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copy-right-text wysiwyg-content">
              <p class="copy-r sm">&copy; <?php echo e($copyright_text); ?></p>
            </div>
            <div class="footer-page-links">
              <?php $__empty_1 = true; $__currentLoopData = $page_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a class="sm" href="<?php echo e(get_the_permalink($pageId)); ?>" alt="Page link"><?php echo e(get_the_title($pageId)); ?></a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<div id="app-sizer"></div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/sections/footer.blade.php ENDPATH**/ ?>