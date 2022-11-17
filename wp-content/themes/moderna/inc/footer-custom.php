<?php 

function mytheme_customize_register( $wp_customize ) {
	//All our sections, settings, and controls will be added here
	$wp_customize->add_section( 'footer' , array(
		'title'      => ( 'Footer Setting' ),
		'priority'   => 10,
	) );
	
	//footer1
	//name
	$wp_customize->add_setting( 'fb-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'fb-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer First:'),
        'section' => 'footer'
	) ) ;

	//link

	$wp_customize->add_setting( 'fblink-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'fblink-setting' , array(
		'id'=> 'fblinkid',
        'label' => ( 'Footer First Link:'),
        'section' => 'footer'
	) ) ;


	
	//footer2
	//name
	$wp_customize->add_setting( 'twitter-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'twitter-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Second:'),
        'section' => 'footer'
	) ) ;

	//link

	$wp_customize->add_setting( 'twitterlink-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'twitterlink-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Second Link:'),
        'section' => 'footer'
	) ) ;

	
	//footer3
	//name
	$wp_customize->add_setting( 'linkin-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'linkin-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Third:'),
        'section' => 'footer'
	) ) ;

	//link

	$wp_customize->add_setting( 'linkinlink-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'linkinlink-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Third Link:'),
        'section' => 'footer'
	) ) ;
	
//footer4
	//name
	$wp_customize->add_setting( 'pinterest-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'pinterest-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Forth:'),
        'section' => 'footer'
	) ) ;

	//link

	$wp_customize->add_setting( 'pinterestlink-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'pinterestlink-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Forth Link:'),
        'section' => 'footer'
	) ) ;

//footer5
	//name
	$wp_customize->add_setting( 'google-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'google-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Fifth:'),
        'section' => 'footer'
	) ) ;

	//link

	$wp_customize->add_setting( 'googlelink-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'googlelink-setting' , array(
		'id'=> 'id',
        'label' => ( 'Footer Fifth Link:'),
        'section' => 'footer'
	) ) ;






//footer text 1
	
	$wp_customize->add_setting( 'footer-text1' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'footer-text1' , array(
		'id'=> 'id',
        'label' => ( 'Footer First Text:'),
        'section' => 'footer'
	) ) ;


 }
 add_action( 'customize_register', 'mytheme_customize_register' );

 function map_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'map' , array(
		'title'      => ( 'Map Setting' ),
		'priority'   => 10,
	) );

	$wp_customize->add_setting( 'map-setting' , array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => '',
		'sanitize_js_callback' => '', // Basically to_json.
	) );
	
	$wp_customize->add_control( 'map-setting' , array(
		'id'=> 'id',
        'label' => ( 'Map link:'),
        'section' => 'map'
	) ) ;
	

 }
 add_action( 'customize_register', 'map_customize_register' );
 ?>