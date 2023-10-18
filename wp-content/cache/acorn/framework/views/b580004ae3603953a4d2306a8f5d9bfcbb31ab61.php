<div class="container-fluid card-grid-container ajax-container" ajax-config="<?php echo e($ajaxConfig); ?>"
    card-modal-config="<?php echo e($cardModalConfig); ?>" connected-filters="<?php echo e(json_encode($connectedFilters)); ?>"
    fr-status="<?php echo e(empty($posts) ? 'no-results-found' : (!$hasMore ? 'no-more-results' : '')); ?>">
    <div class="result-content ajax-content">
        <?php if (isset($component)) { $__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d = $component; } ?>
<?php $component = App\View\Components\Spinner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Spinner::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d)): ?>
<?php $component = $__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d; ?>
<?php unset($__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d); ?>
<?php endif; ?>
        <div class="cards-container cards-inner <?php echo e(count($posts) < 4 ? 'columns-' . count($posts) : 'columns-4'); ?>">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $card; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="load-btn-container wysiwyg-content">
            <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => ''.e(empty($loadMoreText) ? 'View More' : $loadMoreText).'','type' => 'external_url','externalUrl' => 'javascript:void(0)','style' => 'secondary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CtaButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['arrow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e)): ?>
<?php $component = $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e; ?>
<?php unset($__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e); ?>
<?php endif; ?>
        </div>
        <?php if($loadMoreUrl && count($posts) > 0): ?>
            <div class="redirect-button">
                <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => $loadMoreText,'type' => 'external_url','style' => 'secondary','externalUrl' => $loadMoreUrl,'newTab' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            </div>
        <?php endif; ?>
        <?php if($showNoResult): ?>
            <div class="no-results-found-container wysiwyg-content">
                <h4>No results found.</h4>
                <p>Please update your search filters and try again.</p>
            </div>
        <?php endif; ?>

        <div class="ajax-running-container wysiwyg-content">
            <?php if (isset($component)) { $__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d = $component; } ?>
<?php $component = App\View\Components\Spinner::resolve(['type' => 'circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Spinner::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d)): ?>
<?php $component = $__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d; ?>
<?php unset($__componentOriginala3d009c76209a1b0afa72a2a2493add4e842527d); ?>
<?php endif; ?>
        </div>
    </div>
    <?php if(in_array($postType[0], ['camp', 'team-member', 'after-school-program', 'childhood-education'])): ?>
        <?php if (isset($component)) { $__componentOriginal9a56e73b50aadc61c09dd3196b5501b01eb4a144 = $component; } ?>
<?php $component = App\View\Components\CardModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CardModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a56e73b50aadc61c09dd3196b5501b01eb4a144)): ?>
<?php $component = $__componentOriginal9a56e73b50aadc61c09dd3196b5501b01eb4a144; ?>
<?php unset($__componentOriginal9a56e73b50aadc61c09dd3196b5501b01eb4a144); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/card-grid.blade.php ENDPATH**/ ?>