<?php
/**
 * Title: Latest Products
 * Slug: qoe/latest-products
 * Categories: qoe
 * Keywords: products, latest, woocommerce
 *
 * @package Qoe
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"var:preset|spacing|xx-large"} -->
<div style="height:var(--wp--preset--spacing--xx-large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"className":"is-style-left-aligned"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-left-aligned"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color"><?php esc_html_e( 'New In Store', 'qoe' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|medium"} -->
<div style="height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/product-new {"rows":1,"align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|xx-large"} -->
<div style="height:var(--wp--preset--spacing--xx-large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
