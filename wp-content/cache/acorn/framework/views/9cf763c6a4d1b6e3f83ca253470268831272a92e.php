<div class="fr-card card-type-<?php echo e($post_type); ?>" post-id="<?php echo e($card_data['post_id']); ?>">
    <div class="card-inner">
        <?php if(!empty($card_data['featured_image'])): ?>
            <div class="featured-image <?php echo e($card_data['is_empty_featured_image'] ? 'default' : ''); ?>">
                <img src="<?php echo e($card_data['featured_image']['url']); ?>" loading="lazy" alt="Featured">
            </div>
        <?php endif; ?>
        <div class="card-content">
            <div class="wysiwyg-content">
                <div class="card-header">
                    <a href="<?php echo e($card_data['permalink']); ?>" class="card-link">
                        <h5 class="card-title" fr-truncate-lines="3" title="<?php echo e($card_data['title']); ?>">
                            <?php echo $card_data['title']; ?>

                        </h5>
                    </a>
                </div>
                <div class="card-body">
                    <?php if($post_type === 'after-school-program' || $post_type === 'childhood-education'): ?>
                        <p class="location sm">
                            <?php echo e($card_data['location']); ?>

                            <?php if(!empty($card_data['school_website'])): ?>
                                <a class="website sm" href="<?php echo e($card_data['school_website']['url']); ?>" alt="Website"
                                    target="<?php echo e($card_data['school_website']['target']); ?>"><?php echo e($card_data['school_website']['title']); ?></a>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                    <?php if(in_array($post_type, ['camp', 'post'])): ?>
                        <p class="excerpt sm" fr-truncate-lines="4" title="<?php echo $card_data['title']; ?>">
                            <?php echo $card_data['description']; ?></p>
                    <?php endif; ?>
                    <?php if($post_type === 'team-member'): ?>
                        <p class="role sm">
                            <?php echo e($card_data['role']); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($card_data['registration_link']) || (!empty($card_data['action_cta']) && $post_type === 'post')): ?>
                <div class="card-footer">
                    <?php if(!empty($card_data['registration_link'])): ?>
                        <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => ''.$post_type === 'after-school-program' ? 'Schedule & Registration' : 'Information & Registration'.'','type' => 'external_url','externalUrl' => $card_data['registration_link'],'style' => 'primary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if(!empty($card_data['action_cta']) && $post_type === 'post'): ?>
                        <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => $card_data['action_cta']['title'] ?: 'Learn More','externalUrl' => $card_data['action_cta']['url'],'type' => 'external_url','style' => $card_data['action_cta']['style'] ?: 'primary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/card.blade.php ENDPATH**/ ?>