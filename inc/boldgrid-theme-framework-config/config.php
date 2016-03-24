<?php
if ( ! function_exists( 'boldgrid_theme_framework_config' ) ) {
	function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

		// Waiting for all themes to opt in before removing switch.		
		$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

		// Waiting for all themes to opt in before removing switch.
		$boldgrid_framework_configs['temp']['attribution_links'] = true;

		// Waiting for all themes to opt in before removing switch.
		$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;

		// Waiting for all themes to opt in before removing switch.
		$boldgrid_framework_configs['bootstrap-compile'] = true;

		// Turn on the parent theme template engine.
		$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

		// Set Theme Name.
		$boldgrid_framework_configs['theme_name'] = 'prime';

		// This theme doesn't support a background image.
		$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

		// Display Call To Action Widget on all pages.
		$boldgrid_framework_configs['template']['call-to-action'] = 'all-pages';

		// Enable Search Form in Navbar.
		$boldgrid_framework_configs['template']['navbar-search-form'] = true;

		// Remove Container ID that is targetted by navbar-toggle.
		$boldgrid_framework_configs['menu']['prototype']['primary']['container_id'] = 'primary-menu';

		// Remove the container classes that are targetted with navbar-collapse.
		$boldgrid_framework_configs['menu']['prototype']['primary']['container_class'] = 'primary-menu';

		// Default Colors.
		$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array( 
			array(
				'default' => true,
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array( '#000000', '#000000', '#ffffff' )
			)
		);

		// CTA Widget Markup.
		$widget_markup['call-to-action'] = <<<HTML
		<div class="jumbotron">
	      <div class="container">
	        <h1>Welcome to BoldGrid!</h1>
	        <p>This is the parent theme for the BoldGrid Theme Framework.  Unfortunately this theme is not intended to be used as a standalone theme, and a child theme should be used instead.</p>
	        <p><a class="button-primary btn-lg" href="#" role="button">Learn more »</a></p>
	      </div>
	    </div>
HTML;

		// Assign Widget 1 the Call to Action.
		$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
			'title' => 'Call To Action',
			'text' => $widget_markup['call-to-action'],
			'type' => 'visual',
			'filter' => 1,
			'label' => 'black-studio-tinymce'
		);

		// Name Widget Area.
		$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Call To Action';

		// Configs above will override framework defaults.
		return $boldgrid_framework_configs;
	}
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

// Site Title & Logo Controls.
if ( ! function_exists( 'filter_logo_controls' ) ) {
	function filter_logo_controls( $controls ) {
		// Reset Site Title Margin.
		$controls['logo_margin_top']['default'] = '0';
		$controls['logo_margin_bottom']['default'] = '0';
		// Controls above will override framework defaults.
		return $controls;
	}
}
add_filter( 'kirki/fields', 'filter_logo_controls' );