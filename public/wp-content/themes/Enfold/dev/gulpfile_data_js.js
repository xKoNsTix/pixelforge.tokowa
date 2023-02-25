/*
 * JS directories and files to minimize
 *
 * @since 5.2
 */

const foldersJS = {
			'default':				'../js/',
			'aviapopup':			'../js/aviapopup/',
			'waypoints':			'../js/waypoints/',
			'framework':			'../framework/js/',
			'framework_cond':		'../framework/js/conditional_load/',
			'config-gutenberg':		'../config-gutenberg/js/',
			'config-leaflet_maps':	'../config-leaflet-maps/js/',
			'config-rank_math':		'../config-rank-math/',
			'config-woocommerce':	'../config-woocommerce/',
			'config-yoast_seo':		'../config-wordpress-seo/',
			'config-wpml':			'../config-wpml/',
			'config-alb-assets':	'../config-templatebuilder/avia-template-builder/assets/js/'
		};

const filegroupsJS = {

			'default': [
							'avia-compat',
							'avia',
							'avia-snippet-hamburger-menu',
							'shortcodes',
							'avia-snippet-parallax',
							'avia-snippet-lightbox',
							'avia-snippet-megamenu',
							'avia-snippet-sidebarmenu',
							'avia-snippet-sticky-header',
							'avia-snippet-footer-effects',
							'avia-snippet-site-preloader',
							'avia-snippet-widget',
							'avia-snippet-cookieconsent'
						],

			'aviapopup': [ 'jquery.magnific-popup' ],

			'waypoints': [ 'waypoints' ],

			'framework': [
							'avia_advanced_form_elements',
							'avia_colorpicker',
							'avia_media',
							'avia_media_advanced',
							'avia_media_wp35',
							'avia_mega_menu',
							'avia_option_pages',
							'avia_sidebar'
						],

			'framework_cond': [
							'avia_conditional_mega_menu',
							'avia_facebook_front',
							'avia_google_maps_front',
							'avia_google_maps_api',
							'avia_google_maps_widget_admin',
							'avia_google_recaptcha_front',
							'avia_google_recaptcha_api',
						],

			'config-gutenberg':		[
							'avia_gutenberg',
							'avia_blocks_front'
						],

			'config-leaflet_maps':	[ 'avia-leaflet-maps' ],
			'config-rank_math':		[ 'rank-math-mod' ],
			'config-woocommerce':	[ 'woocommerce-mod' ],
			'config-yoast_seo':		[ 'wpseo-mod' ],
			'config-wpml':			[ 'wpml-mod' ],

			'config-alb-assets': [
							'avia-admin-preview',
							'avia-analytics',
							'avia-builder',
							'avia-element-behavior',
							'avia-modal',
							'avia-custom-elements',
							'avia-history',
							'avia-tooltip',
							'avia-media',
							'avia-tab-section',
							'avia-tab-toggle',
							'avia-table',
							'avia-template-saving',
							'avia-tinymce-buttons-4',
							'avia-tinymce-buttons',
							'avia-tinymce-linebreak'
						]
		};

const modulesJS = {

			'audio-player':				[ 'audio-player' ],
			'chart':					[ 'chart-js', 'chart' ],
			'contact':					[ 'contact' ],
			'countdown':				[ 'countdown' ],
			'gallery':					[ 'gallery' ],
			'gallery_horizontal':		[ 'gallery_horizontal' ],
			'headline_rotator':			[ 'headline_rotator' ],
			'icon_circles':				[ 'icon_circles' ],
			'icongrid':					[ 'icongrid' ],
			'iconlist':					[ 'iconlist' ],
			'image_hotspots':			[ 'image_hotspots' ],
			'magazine':					[ 'magazine' ],
			'masonry_entries':			[ 'masonry_entries' ],
			'menu':						[ 'menu' ],
			'notification':				[ 'notification' ],
			'numbers':					[ 'numbers' ],
			'portfolio':				[ 'portfolio' ],
			'progressbar':				[ 'progressbar' ],
			'slideshow':				[ 'slideshow', 'slideshow-video' ],
			'slideshow_accordion':		[ 'slideshow_accordion' ],
			'slideshow_fullscreen':		[ 'slideshow_fullscreen' ],
			'slideshow_layerslider':	[ 'slideshow_layerslider' ],
			'tab_section':				[ 'tab_section' ],
			'tabs':						[ 'tabs' ],
			'testimonials':				[ 'testimonials' ],
			'timeline':					[ 'timeline' ],
			'toggles':					[ 'toggles' ],
			'video':					[ 'video' ]
		};

exports.foldersJS = foldersJS;
exports.filegroupsJS = filegroupsJS;
exports.modulesJS = modulesJS;

