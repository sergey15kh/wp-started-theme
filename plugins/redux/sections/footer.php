<?php
defined( 'ABSPATH' ) || exit;

Redux::set_section(
  $opt_name,
  array(
    'title'            => esc_html__( 'Footer', 'sproject' ),
    'desc'             => esc_html__( 'Configure the appearance and content of the site footer.', 'sproject' ),
    'id'               => 'footer-settings',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => array(
      array(
        'id'           => 'footer_logo',
        'type'         => 'media',
        'url'          => true,
        'title'        => esc_html__( 'Footer Logo', 'sproject' ),
        'compiler'     => 'true',
        'desc'         => esc_html__( 'Upload your company logo to display in the footer.', 'sproject' ),
        'subtitle'     => esc_html__( 'Recommended dimensions: 148x50px. Accepted formats: SVG, PNG.', 'sproject' ),
        'preview_size' => 'full',
      ),
      array(
        'id'       => 'sproject_company_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Company Overview', 'sproject' ),
        'subtitle' => esc_html__( 'Provide a short description of your company to be displayed in the footer.', 'sproject' ),
        'desc'     => esc_html__( 'This text should briefly summarize your company’s purpose or mission.', 'sproject' ),
      ),
      array(
        'id'       => 'sproject_copyright_text',
        'type'     => 'text',
        'title'    => esc_html__( 'Copyright Notice', 'sproject' ),
        'subtitle' => esc_html__( 'Specify the copyright text to be displayed at the bottom of the footer.', 'sproject' ),
        'desc'     => esc_html__( 'Typically includes the company name and year.', 'sproject' ),
      ),
      array(
        'id'       => 'footer-social',
        'type'     => 'sortable',
        'title'    => esc_html__( 'Social Media Links', 'sproject' ),
        'subtitle' => esc_html__( 'Manage and reorder your social media icons.', 'sproject' ),
        'desc'     => esc_html__( 'Drag and drop to rearrange the order in which social media icons appear.', 'sproject' ),
        'label'    => true,
        'options'  => array(
          'Instagram'   => 'Instagram Profile',
          'X (Twitter)' => 'Twitter (X) Profile',
          'Facebook'    => 'Facebook Page',
          'Youtube'     => 'YouTube Channel',
          'Linkedin'    => 'LinkedIn Profile',
        ),
      ),
    ),
  )
);
