<div class="module card-grid-with-filter-module <?php echo e($block->classes); ?>"
    <?php if(isset($block->block->anchor)): ?> id="<?php echo e($block->block->anchor); ?>" <?php endif; ?>>
    <?php echo $__env->make('components.grid-heading-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(in_array('post', $blockData['post_type'])): ?>
        <?php if (isset($component)) { $__componentOriginala5dda2b1bf435740eae4dfe29aa4d15edf1d11d6 = $component; } ?>
<?php $component = App\View\Components\CardGridFilter::resolve(['filterId' => $filterId,'filters' => $frontendFilters,'includeSearch' => true,'blockData' => $blockData] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-grid-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CardGridFilter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5dda2b1bf435740eae4dfe29aa4d15edf1d11d6)): ?>
<?php $component = $__componentOriginala5dda2b1bf435740eae4dfe29aa4d15edf1d11d6; ?>
<?php unset($__componentOriginala5dda2b1bf435740eae4dfe29aa4d15edf1d11d6); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginale560427acaf037025395d035896c9908cee5918a = $component; } ?>
<?php $component = App\View\Components\CardGrid::resolve(['postsPerPage' => $postsPerPage,'connectedFilters' => [$filterId],'loadMoreText' => $loadMoreText,'blockData' => $blockData,'showNoResult' => in_array('post', $blockData['post_type'])] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CardGrid::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale560427acaf037025395d035896c9908cee5918a)): ?>
<?php $component = $__componentOriginale560427acaf037025395d035896c9908cee5918a; ?>
<?php unset($__componentOriginale560427acaf037025395d035896c9908cee5918a); ?>
<?php endif; ?>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/blocks/fr-page-builder-module-card-grid.blade.php ENDPATH**/ ?>