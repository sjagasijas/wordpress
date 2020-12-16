



<?php 





function wpb_customize_register($wp_customize) {









//Showcase

$wp_customize-> add_section('showcase', array(



 	'title'		=> __('Front Page', 'wpbootstrap'),

 	'description'	=>	sprintf(__('Options for showcase','wpbootstrap')),

 	'priority'	=> 130

));







	////////////////////////////////////////////////////////





	$wp_customize -> add_setting('logo_image',array(



		'default' 	=> 	get_bloginfo('template_directory').'/img/mm.svg',

		'type'		=> 	'theme_mod'

	));





	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_image', array(



		'label' 	=> __('Header Logo Image', 'wpbootstrap'),

		'section'	=> 'showcase',

		'settings'  => 'logo_image',

		'priority'	=>	1	





	 )));



	////////////////////////////////////////////////////////



















	////////////////////////////////////////////////////////





	$wp_customize -> add_setting('left-half-container_image',array(



		'default' 	=> 	get_bloginfo('template_directory').'/img/ExplainerVideo.svg',

		'type'		=> 	'theme_mod'

	));





	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'left-half-container_image', array(



		'label' 	=> __('Left-half-container Image', 'wpbootstrap'),

		'section'	=> 'showcase',

		'settings'  => 'left-half-container_image',

		'priority'	=>	2	





		)));



	////////////////////////////////////////////////////////





	$wp_customize -> add_setting('right-half-container_image',array (



		'default' 	=> 	get_bloginfo('template_directory').'/img/ExplainerVideo-TEXT.svg',

		'type'		=> 	'theme_mod'

	));





	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'right-half-container_image', array(



		'label' 	=> __('Right-half-container_image Image', 'wpbootstrap'),

		'section'	=> 'showcase',

		'settings'  => 'right-half-container_image',

		'priority'	=>	3	





		)));



	////////////////////////////////////////////////////////













	$wp_customize -> add_setting('showcase_heading',array(



		'default' 	=> 	_x('Custom Theme','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('showcase_heading',array(





		'label' 	=> __('Heading', 'wpbootstrap'),

		'section'	=> 'showcase',

		'priority'	=>	4



	));









	////////////////////////////////////////////////////////







	$wp_customize -> add_setting('showcase_text',array(



		'default' 	=> 	_x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('showcase_text',array(





		'label' 	=> __('Text', 'wpbootstrap'),

		'section'	=> 'showcase',

		'priority'	=>	5



	));







	/////////////////////////////////////////////////////



	$wp_customize -> add_setting('btn_url',array(



		'default' 	=> 	_x('http://samuel/modeomedia2018','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));





	$wp_customize->add_control('btn_url',array(



		'label' 	=> __('Button URL', 'wpbootstrap'),

		'section'	=> 'showcase',

		'priority'	=>	6



	));





	/////////////////////////////////////////////////////



	$wp_customize -> add_setting('btn_text',array(



		'default' 	=> 	_x('Read More','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));





	$wp_customize->add_control('btn_text',array(



		'label' 	=> __('Button Text', 'wpbootstrap'),

		'section'	=> 'showcase',

		'priority'	=>	7



	));















//-----------------------------FOOTER---------------------------------



$wp_customize-> add_section('footer', array(



 	'title'		=> __('Footer', 'wpbootstrap'),

 	'description'	=>	sprintf(__('Options for footer','wpbootstrap')),

 	'priority'	=> 130

));







////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link1_text',array(



		'default' 	=> 	_x('Explainer Videos','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link1_text',array(





		'label' 	=> __('Link1', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	1



	));













	////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link1_url',array(



		'default' 	=> 	_x('modeomedia.com','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link1_url',array(





		'label' 	=> __('Link 1 URL', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	1



	));





	/////////////////////////////////////////////////////









		$wp_customize -> add_setting('link2_text',array(



		'default' 	=> 	_x('Illustrations','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link2_text',array(





		'label' 	=> __('Link2', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	2



	));











	////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link2_url',array(



		'default' 	=> 	_x('modeomedia.com/illustrations','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link2_url',array(





		'label' 	=> __('Link 2 URL', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	2



	));





	/////////////////////////////////////////////////////









		$wp_customize -> add_setting('link3_text',array(



		'default' 	=> 	_x('Infographics','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link3_text',array(





		'label' 	=> __('Link3', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	2



	));











	////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link3_url',array(



		'default' 	=> 	_x('modeomedia.com/infographics','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link3_url',array(





		'label' 	=> __('Link 3 URL', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	3



	));





	/////////////////////////////////////////////////////







		$wp_customize -> add_setting('link4_text',array(



		'default' 	=> 	_x('Branding','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link4_text',array(





		'label' 	=> __('Link4', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	4



	));











	////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link4_url',array(



		'default' 	=> 	_x('modeomedia.com/branding','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link4_url',array(





		'label' 	=> __('Link 4 URL', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	4



	));





	/////////////////////////////////////////////////////////





		$wp_customize -> add_setting('link5_text',array(



		'default' 	=> 	_x('Games & Apps','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link5_text',array(





		'label' 	=> __('Link5', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	5



	));











	////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link5_url',array(



		'default' 	=> 	_x('modeomedia.com/Games&Apps','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link5_url',array(





		'label' 	=> __('Link 5 URL', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	5



	));





	/////////////////////////////////////////////////////////





		$wp_customize -> add_setting('link6_text',array(



		'default' 	=> 	_x('3d Designs','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link6_text',array(





		'label' 	=> __('Link6', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	6



	));











	/////////////////////////////////////////////////////////



	$wp_customize -> add_setting('link6_url',array(



		'default' 	=> 	_x('modeomedia.com/3ddesigns','wpbootsrap'),

		'type'		=> 	'theme_mod'

	));



		$wp_customize->add_control('link6_url',array(





		'label' 	=> __('Link 6 URL', 'wpbootstrap'),

		'section'	=> 'footer',

		'priority'	=>	6



	));





	///////////////////////////////////////////////////////////







}









add_action('customize_register', 'wpb_customize_register');





 ?>