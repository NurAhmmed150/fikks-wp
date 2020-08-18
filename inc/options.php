<?php include_once( dirname( __FILE__ ) . '/kirki/kirki.php' ); ?>
<?php


function strappress_customize_register( $wp_customize ) {

}
add_action( 'customize_register', 'strappress_customize_register' );

Kirki::add_config( 'fikkawp_theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

Kirki::add_section( 'Background', array(
	'title'      => esc_attr__( 'Background', 'fikkawp' ),
	'priority'   => 50,
	'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'strappress_theme', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'Background',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body',
		],
	],
] );

//footer copyright text

Kirki::add_section( 'footer-text', array(
	'title'      => esc_attr__( 'Footer text', 'fikkawp' ),
	'priority'   => 90,
	'capability' => 'edit_theme_options',
) );
Kirki::add_field( 'theme_config_id', [
	'type'     => 'text',
	'settings' => 'text_setting',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'footer-text',
	'default'  => esc_html__( 'Copyright 2020 Fikka wp.', 'kirki' ),
	'priority' => 10,
] );
//social media  link
Kirki::add_panel( 'social-media-link', array(
    'priority'    => 100,
    'title'       => esc_html__( 'social media  link', 'fikkawp' ),
    'description' => esc_html__( 'My panel description', 'fikkawp' ),
) );
//social media fb link
Kirki::add_section( 'fb-link', array(
	'title'      => esc_attr__( 'fb link', 'fikkawp' ),
    'priority'   => 120,
    'panel'          => 'social-media-link',
	'capability' => 'edit_theme_options',
) );
Kirki::add_field( 'theme_config_id', [
	'type'     => 'link',
	'settings' => 'link_settingfb',
	'label'    => __( 'Link Control', 'kirki' ),
	'section'  => 'fb-link',
	'default'  => 'https://www.facebook.com',
	'priority' => 10,
] );

//social media twitter link
Kirki::add_section( 'twitter-link', array(
	'title'      => esc_attr__( 'twitter link', 'fikkawp' ),
    'priority'   => 100,
    'panel'          => 'social-media-link',
	'capability' => 'edit_theme_options',
) );
Kirki::add_field( 'theme_config_id', [
	'type'     => 'link',
	'settings' => 'link_settingtwitter',
	'label'    => __( 'Link Control', 'kirki' ),
	'section'  => 'twitter-link',
	'default'  => 'https://www.twitter.com',
	'priority' => 10,
] );

//social media fb link
Kirki::add_section( 'instagram-link', array(
	'title'      => esc_attr__( 'instagram link', 'fikkawp' ),
    'priority'   => 110,
    'panel'      => 'social-media-link',
	'capability' => 'edit_theme_options',
) );
Kirki::add_field( 'theme_config_id', [
	'type'     => 'link',
	'settings' => 'link_settinginstagram',
	'label'    => __( 'Link Control', 'kirki' ),
	'section'  => 'instagram-link',
	'default'  => 'https://www.instagram.com',
	'priority' => 10,
] );

//social media fb link
Kirki::add_section( 'linkedin-link', array(
	'title'      => esc_attr__( 'linkedin link', 'fikkawp' ),
    'priority'   => 90,
    'panel'          => 'social-media-link',
	'capability' => 'edit_theme_options',
) );
Kirki::add_field( 'theme_config_id', [
	'type'     => 'link',
	'settings' => 'link_settinglinkedin',
	'label'    => __( 'Link Control', 'kirki' ),
	'section'  => 'linkedin-link',
	'default'  => 'https://www.linkedin.com',
	'priority' => 10,
] );