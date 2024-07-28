<?php
/**
 * Sidebar 2024 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sidebar 2024
 * @since Sidebar 2024 1.0
 */

/**
 * Register block styles.
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if(!is_plugin_active('rsvpmaker-for-toastmasters/rsvpmaker-for-toastmasters.php'))
	include 'memberoptions/memberoptions.php';

if ( ! function_exists( 'sidebar2024_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Sidebar 2024 1.0
	 * @return void
	 */
	function sidebar2024_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'sidebar2024' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'sidebar2024' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--truemaroon);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'sidebar2024' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'sidebar2024' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'sidebar2024' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--coolgray, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'sidebar2024_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'sidebar2024_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Sidebar 2024 1.0
	 * @return void
	 */
	function sidebar2024_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'sidebar2024-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'sidebar2024_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'sidebar2024_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Sidebar 2024 1.0
	 * @return void
	 */
	function sidebar2024_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);
	}
endif;

add_action( 'init', 'sidebar2024_pattern_categories' );

function toastmost_edit_site_submenu ($wp_admin_bar) {
	if ( current_user_can( 'manage_options' ) ) {
	$args = array(
		'id'     => 'site_editor_navigation',
		'title'  => __( 'Navigation Menus', 'rsvpmaker-for-toastmasters' ),
		'href'   => admin_url( 'site-editor.php?path=%2Fnavigation' ),
		'parent' => 'site-editor',
		'meta'   => array( 'class' => 'site_editor_navigation' ),
	);
	$wp_admin_bar->add_node( $args );
	$args = array(
		'id'     => 'site_editor_headers',
		'title'  => __( 'Headers', 'rsvpmaker-for-toastmasters' ),
		'href'   => admin_url( 'site-editor.php?path=%2Fpatterns&categoryType=wp_template_part&categoryId=header' ),
		'parent' => 'site-editor',
		'meta'   => array( 'class' => 'site_editor_headers' ),
	);
	$wp_admin_bar->add_node( $args );
}
}
add_action( 'admin_bar_menu', 'toastmost_edit_site_submenu', 10, 1 );