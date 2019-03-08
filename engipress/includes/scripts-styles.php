<?phpfunction engipress_theme_script_init() {if (! is_admin() ) :	wp_register_script( 'jqueryfunctions', eng_theme_url() .'/includes/js/jqueryfunctions.js', 'jquery', false, true );	wp_enqueue_script( 'jqueryfunctions');		/* Engipress Stylesheets */	wp_register_style( 'color-bg', eng_theme_url() . '/css/color-bg.css' );	wp_enqueue_style( 'color-bg');	wp_register_style( 'layout', eng_theme_url() . '/css/layout.css' );	wp_enqueue_style( 'layout');	wp_register_style( 'text', eng_theme_url() . '/css/text.css' );	wp_enqueue_style( 'text');		/* Fonts */	wp_register_style( 'font-oswald', 'http://fonts.googleapis.com/css?family=Oswald' );	wp_enqueue_style( 'font-oswald' );	wp_register_style( 'font-roboto', 'http://fonts.googleapis.com/css?family=Roboto' );	wp_enqueue_style( 'font-roboto' );	wp_register_style( 'font-fjallaone', 'http://fonts.googleapis.com/css?family=Fjalla+One' );	wp_enqueue_style( 'font-fjallaone' );	wp_register_style( 'font-librefranklin', 'http://fonts.googleapis.com/css?family=Libre+Franklin' );	wp_enqueue_style( 'font-librefranklin' );	endif;	if ( is_admin() ) :	wp_register_script( 'jqueryadminfunctions', eng_theme_url() .'/includes/js/jqueryadminfunctions.js', 'jquery', false, true );	wp_enqueue_script( 'jqueryadminfunctions');	endif;}add_action('wp_enqueue_scripts', 'engipress_theme_script_init');?>