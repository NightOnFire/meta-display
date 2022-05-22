<?php
/**
 * Plugin Name:       Meta Display
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       meta-display
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_meta_display_block_init() {
	register_block_type( __DIR__ . '/build', [
		'render_callback' => 'render_block_meta_display',
	] );
}
add_action( 'init', 'create_block_meta_display_block_init' );

function render_block_meta_display($block_attributes, $content) {
  $html = [];

  $html[] = '<div class="meta-display-block">';
  $html[] = print_r($block_attributes, true);
  $html[] = '</div>';

  return implode($html);
}