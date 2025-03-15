<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section(
  $opt_name,
  array(
    'title'      => esc_html__( 'Header', 'sproject' ),
    'id'         => 'section_header',
    'desc'       => esc_html__( 'Settings for the top of the site, including styles, display of elements and other parameters.', 'sproject' ),
    'subsection' => true,
    'fields'     => array(
      array(
        'id'           => 'header_logo',
        'type'         => 'media',
        'url'          => true,
        'title'        => esc_html__( 'Logo in the site header', 'sproject' ),
        'compiler'     => 'true',
        'desc'         => esc_html__( 'Upload a logo to be displayed on the site.', 'sproject' ),
        'subtitle'     => esc_html__( 'Recommended size: 148x50px. Format: SVG or PNG.', 'sproject' ),
        'preview_size' => 'full',
      ),
    ),
  )
);
// phpcs:enable
