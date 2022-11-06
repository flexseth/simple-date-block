<?php
/**
 * Plugin Name:       Simple Date Block
 * Plugin URI:        https://github.com/flexseth/simple-date-block
 * Description:       Shows todays date, helpful for news sites, travel sites, personal and portfolio websites, really anywhere that the date is contextually helpful and should be widely visable. Recommended placement is the header.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Seth Miller
 * License:           GNU General Public License v3.0
 * License URI:       https://github.com/flexseth/simple-date-block/blob/main/LICENSE
 * Text Domain:       fp-simple-date-block
 *
 * @package           flex-perception
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function flex_perception_fp_simple_date_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'flex_perception_fp_simple_date_block_block_init' );
