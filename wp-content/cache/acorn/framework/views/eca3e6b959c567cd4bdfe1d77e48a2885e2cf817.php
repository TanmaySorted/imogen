<header class="banner fr-header ">
    <nav class="navbar navbar-expand-xl">
        <div class="container outer">
            <div class="container brand-container">
                <a class="brand" href="<?php echo e(home_url('/')); ?>">
                    <?php if($logo && is_array($logo)): ?>
                        <img class="header-logo" src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['alt']); ?>" loading="lazy">
                    <?php else: ?>
                        <?php echo $siteName; ?>

                    <?php endif; ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#headerMenuContent" aria-controls="headerMenuContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img class="menu-icon" src="<?= \Roots\asset('images/bars.svg'); ?>" loading="lazy" />
                        <img class="close-icon" src="<?= \Roots\asset('images/close.svg'); ?>" loading="lazy" />
                    </span>
                </button>
            </div>
            <div class="container collapse navbar-collapse" id="headerMenuContent">
                <?php if(has_nav_menu('primary_navigation')): ?>
                    <?php echo wp_nav_menu($primaryNavigation); ?>

                <?php endif; ?>
                <div class="right-cta-container">
                    <?php if($contact_us_page): ?>
                        <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => 'Contact Us','type' => 'external_url','style' => 'secondary','externalUrl' => $contact_us_page,'newTab' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e)): ?>
<?php $component = $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e; ?>
<?php unset($__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if($donate_cta): ?>
                        <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => $donate_cta['label'],'type' => $donate_cta['cta_type'],'postId' => $donate_cta['post_id'],'style' => $donate_cta['style'],'externalUrl' => $donate_cta['external_url'],'newTab' => $donate_cta['new_tab']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e)): ?>
<?php $component = $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e; ?>
<?php unset($__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/sections/header.blade.php ENDPATH**/ ?>