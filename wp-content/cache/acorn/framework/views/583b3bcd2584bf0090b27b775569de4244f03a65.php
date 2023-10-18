<?php
$show_author = get_field('show_author', get_the_ID())?:false;
?>
<?php if($show_author): ?>
  <div class="hr"></div>
  <div class="byline author vcard" >    
    <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn">    
      <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>

      </a>
      <div class="auth-detail">
      <h5>
        <?php echo e(get_the_author_meta('first_name')); ?> &nbsp;<?php echo e(get_the_author_meta('last_name')); ?></h5>
        <p>
        <?php echo get_the_author_meta('description'); ?>

        </p>
    </div> 
  </div>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/imogen/wp-content/themes/fr-starter-theme/resources/views/partials/entry-author-meta.blade.php ENDPATH**/ ?>