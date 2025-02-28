<?php
/**
 * Title: Hero Section
 * Slug: eternal-odyssey/hero-section
 * Categories: featured
 */
?>
<!-- wp:cover {"url":"<?php echo get_theme_file_uri('/assets/images/hero.jpg'); ?>","dimRatio":50} -->
<div class="wp-block-cover">
  <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
  <img class="wp-block-cover__image-background" src="<?php echo get_theme_file_uri('/assets/images/hero.jpg'); ?>" alt="Epic Journey" />
  <div class="wp-block-cover__inner-container">
    <!-- wp:heading {"level":1} -->
    <h1>Welcome to Your Eternal Odyssey</h1>
    <!-- /wp:heading -->
  </div>
</div>
<!-- /wp:cover -->
