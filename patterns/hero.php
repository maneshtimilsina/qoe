<?php
/**
 * Title: Hero
 * Slug: qoe/hero
 * Categories: qoe
 * Keywords: hero, banner
 *
 * @package Qoe
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"base"} -->
<p class="has-text-align-left has-base-font-size"><?php esc_html_e( 'Best in Town', 'qoe' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'GIFTS, COSMETICS,', 'qoe' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'FOOTWEAR &amp; CLOTHING', 'qoe' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|xx-small"} -->
<div style="height:var(--wp--preset--spacing--xx-small)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php esc_html_e( 'SHOP NOW', 'qoe' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
