<?php 
/*
Plugin Name: Quote Pattern Example Plugin
*/

register_block_pattern(
	'my-plugin/my-quote-pattern',
	array(
		'title'       => __( 'Quote with Avatar', 'my-plugin' ),
		'categories'  => array( 'text' ),
		'description' => _x( 'A big quote with an avatar".', 'Block pattern description', 'my-plugin' ),
		'content'     => '<!-- wp:group --><div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:separator {"className":"is-style-default"} --><hr class="wp-block-separator is-style-default"/><!-- /wp:separator --><!-- wp:image {"align":"center","id":553,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://blockpatterndesigns.mystagingwebsite.com/wp-content/uploads/2021/02/StockSnap_HQR8BJFZID-1.jpg" alt="" class="wp-image-553" width="150" height="150"/></figure></div><!-- /wp:image --><!-- wp:quote {"align":"center","className":"is-style-large"} --><blockquote class="wp-block-quote has-text-align-center is-style-large"><p>"Contributing makes me feel like I\'m being useful to the planet."</p><cite>— Anna Wong, <em>Volunteer</em></cite></blockquote><!-- /wp:quote --><!-- wp:separator {"className":"is-style-default"} --><hr class="wp-block-separator is-style-default"/><!-- /wp:separator --></div></div><!-- /wp:group -->',
	)
);

?>