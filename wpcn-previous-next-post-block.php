<?php
/**
 * Plugin Name: WPConstructor Previous Next Post Block
 * Plugin URI: https://wpconstructor.com/plugins/wpconstructor-previous-next-post-block/
 * Description: WPConstructor Previous Next Post Block adds a customizable previous and next post navigation block with featured images and post titles for WordPress.
 * Version: 0.1.0
 * Requires at least: 6.0
 * Requires PHP: 7.6
 * Author: WPConstructor
 * Author URI: https://wpconstructor.com
 * License: GPL-3.0-or-later http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: wpcn-previous-next-post-block
 * Domain Path: /languages
 *
 * @package WPConstructor\PreviousNextPostBlock
 */

namespace WPConstructor\PreviousNextPostBlock;

if ( ! defined( 'WPINC' ) ) {
	die();
}

define( 'WPCN_PREVIOUS_NEXT_POST_BLOCK_VERSION', '0.1.0' );
define( 'WPCN_PREVIOUS_NEXT_POST_BLOCK_FILE', __FILE__ );
define( 'WPCN_PREVIOUS_NEXT_POST_BLOCK_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPCN_PREVIOUS_NEXT_POST_BLOCK_URL', plugin_dir_url( __FILE__ ) );


/**
 * Register block.
 */
add_action(
	'init',
	function () {

		wp_register_script(
			'wpcn-previous-next-post-block-editor',
			WPCN_PREVIOUS_NEXT_POST_BLOCK_URL . 'assets/js/editor.js',
			array(
				'wp-blocks',
				'wp-element',
				'wp-i18n',
			),
			WPCN_PREVIOUS_NEXT_POST_BLOCK_VERSION,
			true
		);

		register_block_type(
			'wpcn/previous-next-post',
			array(
				'editor_script'   => 'wpcn-previous-next-post-block-editor',
				'render_callback' => __NAMESPACE__ . '\\render_previous_next_post_block',
			)
		);
	}
);

/**
 * Render block output.
 *
 * @return string
 */
function render_previous_next_post_block() {
	wp_enqueue_style(
		'wpcn-previous-next-post-block'
	);

	$prev_post = get_previous_post();
	$next_post = get_next_post();

	if ( ! $prev_post && ! $next_post ) {
		return '';
	}

	ob_start();

	?>

	<nav class="wpcn-post-navigation-images">

		<?php if ( $prev_post ) : ?>

			<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="wpcn-post-nav-image prev">

				<h3>< Previous Post</h3>	

				<?php
				echo get_the_post_thumbnail(
					$prev_post,
					'large',
					array(
						'class' => 'wpcn-feature-image',
					)
				);
				?>

				<span class="wpcn-post-nav-title">
					<?php echo esc_html( get_the_title( $prev_post ) ); ?>
				</span>

			</a>

		<?php endif; ?>


		<?php if ( $next_post ) : ?>

			<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="wpcn-post-nav-image next">

				<h3>Next Post ></h3>	

				<?php
				echo get_the_post_thumbnail(
					$next_post,
					'large',
					array(
						'class' => 'wpcn-feature-image',
					)
				);
				?>

				<span class="wpcn-post-nav-title">
					<?php echo esc_html( get_the_title( $next_post ) ); ?>
				</span>

			</a>

		<?php endif; ?>

	</nav>

	<?php

	return ob_get_clean();
}


/**
 * Register block styles.
 */
add_action(
	'init',
	function () {

		wp_register_style(
			'wpcn-previous-next-post-block',
			WPCN_PREVIOUS_NEXT_POST_BLOCK_URL . 'assets/css/style.css',
			array(),
			WPCN_PREVIOUS_NEXT_POST_BLOCK_VERSION
		);
	}
);