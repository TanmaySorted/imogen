<div class="inner-content card-<?php echo e($post_type); ?>">
    <div class="featured-image <?php echo e($is_empty_featured_image ? 'default' : ''); ?>">
        <img src="<?php echo e($featured_image['url']); ?>" loading="lazy" alt="Featured">
    </div>
    <div class="right-content">
        <div class="wysiwyg-content">
            <div class="section">
                <?php if(in_array($post_type, ['camp', 'after-school-program', 'childhood-education'])): ?>
                    <h4 class="title">
                        <?php echo $title; ?>

                    </h4>
                <?php else: ?>
                    <h5 class="title">
                        <?php echo $title; ?>

                    </h5>
                <?php endif; ?>
                <?php if($post_type === 'camp'): ?>
                    <h6 class="theme-color">
                        <?php echo e($subheading); ?>

                    </h6>
                <?php endif; ?>
                <?php if($post_type === 'after-school-program' || $post_type === 'childhood-education'): ?>
                    <h6 class="theme-color">
                        <?php echo e($location); ?>

                    </h6>
                <?php endif; ?>

                <?php if($post_type === 'team-member'): ?>
                    <h6 class="role sm theme-color">
                        <?php echo e($role); ?>

                    </h6>
                <?php endif; ?>
            </div>

            <div class="section">
                <?php if($post_type === 'team-member'): ?>
                    <div class="short-bio">
                        <?php echo $short_bio; ?>

                    </div>
                <?php endif; ?>
                <?php if(in_array($post_type, ['camp', 'after-school-program', 'childhood-education'])): ?>
                    <p class="description section"><?php echo e($description); ?></p>
                    <div class="info-container">
                        <?php $__empty_1 = true; $__currentLoopData = $camp_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php if($info['value'] !== ''): ?>
                                <div class="info-row">
                                    <label class="sm"><?php echo e($info['label']); ?>:</label>
                                    <p class="value sm"><?php echo $info['value']; ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($registration_link) || !empty($contact_us_page)): ?>
                <div class="content-footer">
                    <?php if(!empty($registration_link)): ?>
                        <?php if (isset($component)) { $__componentOriginaladd8e16d6c49b264dabce3ac673f4324e8bdaa8e = $component; } ?>
<?php $component = App\View\Components\CtaButton::resolve(['label' => 'Register','type' => 'external_url','externalUrl' => $registration_link,'style' => 'primary','newTab' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/components/card-modal/modal-body.blade.php ENDPATH**/ ?>