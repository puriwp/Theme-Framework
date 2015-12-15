<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$thumbnails_uri = fw_get_framework_directory_uri( '/core/components/extensions/manager/static/img/thumbnails' );

$extensions = array(
	'slider' => array(
		'display'     => true,
		'parent'      => 'media',
		'name'        => __( 'Sliders', 'fw' ),
		'description' => __( 'Adds a sliders module to your website from where you\'ll be able to create different built in jQuery sliders for your homepage and rest of the pages.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/sliders.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'fauzie/Unyson-Sliders-Extension',
			),
		),
	),
	'media' => array(
		'display'     => false,
		'parent'      => null,
		'name'        => __( 'Media', 'fw' ),
		'description' => '',
		'thumbnail'   => 'about:blank',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Empty-Extension',
			),
		),
	),
	'population-method' => array(
		'display'     => false,
		'parent'      => 'media',
		'name'        => __( 'Population method', 'fw' ),
		'description' => '',
		'thumbnail'   => 'about:blank',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-PopulationMethods-Extension',
			),
		),
	),
	'styling' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Styling', 'fw' ),
		'description' => __( 'This extension lets you control the website visual style. Starting from predefined styles to changing specific fonts and colors across the website.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/styling.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'puriwp/Framework-Styling',
			),
		),
	),
	'megamenu' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Mega Menu', 'fw' ),
		'description' => __( 'The Mega Menu extension adds a user-friendly drop down menu that will let you easily create highly customized menu configurations.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/mega-menu.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-MegaMenu-Extension',
			),
		),
	),
	'portfolio' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Portfolio', 'fw' ),
		'description' => __( 'This extension will add a fully fledged portfolio module that will let you display your projects using the built in portfolio pages.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/portfolio.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Portfolio-Extension',
			),
		),
	),
	'page-builder' => array(
		'display'     => true,
		'parent'      => 'shortcodes',
		'name'        => __( 'Page Builder', 'fw' ),
		'description' => __( "Let's you easily build countless pages with the help of the drag and drop visual page builder that comes with a lot of already created shortcodes.", 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/page-builder.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-PageBuilder-Extension',
			),
		),
	),
	'shortcodes' => array(
		'display'     => false,
		'parent'      => null,
		'name'        => __( 'Shortcodes', 'fw' ),
		'description' => '',
		'thumbnail'   => 'about:blank',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Shortcodes-Extension',
			),
		),
	),
	'breadcrumbs' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Breadcrumbs', 'fw' ),
		'description' => __( 'Creates a simplified navigation menu for the pages that can be placed anywhere in the theme. This will make navigating the website much easier.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/breadcrumbs.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Breadcrumbs-Extension',
			),
		),
	),
	'seo' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'SEO', 'fw' ),
		'description' => __( 'This extension will enable you to have a fully optimized WordPress website by adding optimized meta titles, keywords and descriptions.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/seo.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-SEO-Extension',
			),
		),
	),
	'sidebars' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Sidebars', 'fw' ),
		'description' => __( 'Brings a new layer of customization freedom to your website by letting you add more than one sidebar to a page, or different sidebars on different pages.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/sidebars.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Sidebars-Extension',
			),
		),
	),
	'feedback' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Feedback', 'fw' ),
		'description' => __( 'Adds the possibility to leave feedback (comments, reviews and rating) about your products, articles, etc. This replaces the default comments system.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/feedback.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Feedback-Extension',
			),
		),
	),
	'backups' => array(
		'display'     => true,
		'parent'      => null,
		'name'        => __( 'Backup & Demo Content', 'fw' ),
		'description' => __( 'This extension lets you create an automated backup schedule, import demo content or even create a demo content archive for migration purposes.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/backups.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'puriwp/Framework-Backup',
			),
		),
	),
	'builder' => array(
		'display'     => false,
		'parent'      => null,
		'name'        => __( 'Builder', 'fw' ),
		'description' => '',
		'thumbnail'   => 'about:blank',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Builder-Extension',
			),
		),
	),
	'forms' => array(
		'display'     => false,
		'parent'      => null,
		'name'        => __( 'Forms', 'fw' ),
		'description' => __( 'This extension adds the possibility to create a contact form. Use the drag & drop form builder to create any contact form you\'ll ever want or need.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/forms.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Forms-Extension',
			),
		),
	),
	'mailer' => array(
		'display'     => false,
		'parent'      => null,
		'name'        => __( 'Mailer', 'fw' ),
		'description' => __( 'This extension will let you set some global email options and it is used by other extensions (like Forms) to send emails.', 'fw' ),
		'thumbnail'   => $thumbnails_uri . '/mailer.jpg',
		'download'    => array(
			'github' => array(
				'user_repo' => 'ThemeFuse/Unyson-Mailer-Extension',
			),
		),
	),
);
