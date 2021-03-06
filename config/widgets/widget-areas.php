<?php
/**
 * Sidebars and widget area runtime configuration
 *
 * @package     kaleidoscope
 * @since       1.0.0
 * @author      camille villard
 * @link        https://camillevillard.io
 * @license     protected by copyright / free for personal use only
 */
namespace kaleidoscope\widgets;

return array(
	'unregister_widget_areas' => array(
		'sidebar',
		'sidebar-alt',
		'header-right',
	),

	'register_widget_areas' => array(
		array(
			'id'          => 'front-page-primary',
			'name'        => __( 'zone primaire', 'ktc' ),
			'description' => __( 'This is the first widget area', 'kaleidoscope' ),
		),

		array(
			'id'          => 'front-page-secondary',
			'name'        => __( 'zone secondaire', 'ktc' ),
			'description' => __( 'This is the second widget area', 'kaleidoscope' ),
		),

	),
);
