<?php

add_action( 'customize_register', 'customizer_init' );

function customizer_init( WP_Customize_Manager $wp_customize ){

	$transport = 'postMessage';
	
	$arr = ["navbar1_text", "navbar2_text", "navbar3_text", "navbar4_text", "features", "feature1", "feature2", "feature3", "feature4", "feature5", "why", "why-answer", "what", "what-answer", "credits", "mobile_section1", "mobile_section2", "mobile_section3", "mobile_section4", "mobile_section5", "test"];
    
	if( $section = 'display_options' ){

		$wp_customize->add_section( $section, [
			'title'     => 'Текст',
			'priority'  => 200,                   // приоритет расположения
			'description' => 'Тексты сайта', // описание не обязательное
		] );

		foreach ($arr as $val){
			$wp_customize->add_setting( $val, [
				'default'            => $val,
				'transport'          => $transport,
				'type'               => 'theme_mod'
			] );
	
			$wp_customize->add_control( $val, [
				'section'  => 'display_options', // id секции
				'label'    => $val,
				'type'     => 'text' // текстовое поле
			] );
		}

	}

}