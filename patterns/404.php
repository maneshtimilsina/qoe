<?php
/**
 * Title: A 404 page
 * Slug: qoe/404
 * Inserter: no
 *
 * @package Qoe
 */

?>

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|xx-large"} -->
<div style="height:var(--wp--preset--spacing--xx-large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%","layout":{"wideSize":"100%"}} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><strong><?php esc_html_e( '404', 'qoe' ); ?></strong></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><strong><?php esc_html_e( 'Oops! Page not found', 'qoe' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Sorry but the page you are looking for could not be found. It might have been deleted, renamed, or is temporarily unavailable. You can search the site below, or return to the front page.', 'qoe' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","placeholder":"Search...","width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","textColor":"white"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|large"} -->
<div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/" rel="/"><?php esc_html_e( 'Go to Home', 'qoe' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|xx-large"} -->
<div style="height:var(--wp--preset--spacing--xx-large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->
