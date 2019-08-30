<?php

/*=============================================
FUNCIÓN PARA AGREGAR ARCHIVOS EXTERNOS CSS Y JAVASCRIPT A LA PLANTILLA
https://developer.wordpress.org/themes/basics/including-css-javascript/
=============================================*/

function blogviajero_archivos() {

	/*=====================================
	ARCHIVOS DE CSS
	======================================*/
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400', array(), '1.1', 'all');
	wp_enqueue_style( 'fontAwesome', 'https://use.fontawesome.com/releases/v5.6.0/css/all.css', array(), '1.1', 'all');
	wp_enqueue_style( 'jdSlider', get_template_directory_uri() . '/css/plugins/jquery.jdSlider.css', array(), '1.1', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');

	/*=====================================
	ARCHIVOS DE JS
	======================================*/
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), 1.1, false);
	wp_enqueue_script( 'popperJs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), 1.1, false);
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), 1.1, false);
	wp_enqueue_script( 'jdSlider', get_template_directory_uri() . '/js/plugins/jquery.jdSlider-latest.js', array(), 1.1, false);
	wp_enqueue_script( 'pagination', get_template_directory_uri() . '/js/plugins/pagination.min.js', array(), 1.1, false);
	wp_enqueue_script( 'superscrollorama', get_template_directory_uri() . '/js/plugins/jquery.superscrollorama.js', array(), 1.1, false);
	wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/plugins/TweenMax.min.js', array(), 1.1, false);
	wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/js/plugins/scrollUP.js', array(), 1.1, false);
	wp_enqueue_script( 'jqueryEasing', get_template_directory_uri() . '/js/plugins/jquery.easing.js', array(), 1.1, false);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'blogviajero_archivos' );

/*=============================================
FUNCIONES PARA AGREGAR AL ADMINISTRADOR
https://developer.wordpress.org/themes/basics/theme-functions/
=============================================*/

function blogviajero_setup() {

	/*=============================================
	FUNCIÓN PARA AGREGAR MENÚ
	=============================================*/
	register_nav_menus( array(
        'header-menu'   => __( 'Header Menu', 'blogviajero' ),
        'social-menu'   => __( 'Social Menu', 'blogviajero' )

    ) );

    /*=============================================
	AGREGAR FILTROS PARA PERSONALIZAR EL MENÚ
	=============================================*/

	add_filter("nav_menu_link_attributes", "agregarClases", 10, 3);

	function agregarClases($atts, $item, $args){

		$class = "nav-link text-white";
		$atts["class"] = $class;
		return $atts;

	}

/*=============================================
	HABILITAR IMÁGENES DESTACADAS
	=============================================*/
	add_theme_support( 'post-thumbnails' );
/*=============================================
    HABILITAR LOGOTIPO DINÁMICO
    =============================================*/
    add_theme_support( 'custom-logo' );
    /*=============================================
    HABILITAR TÍTULOS
    =============================================*/
    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'blogviajero_setup' );

/*=============================================
AGREGAR SIDEBAR PARA WIDGTES
=============================================*/
// https://developer.wordpress.org/themes/functionality/sidebars/

function blogviajero_widgets() {

	register_sidebar( array(
        'name'          => __( 'Widgets Index 1', 'blogviajero' ),
        'id'            => 'widgets-index-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );
 
   register_sidebar( array(
        'name'          => __( 'Widgets Index 2', 'blogviajero' ),
        'id'            => 'widgets-index-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Category 1', 'blogviajero' ),
        'id'            => 'widgets-category-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Category 2', 'blogviajero' ),
        'id'            => 'widgets-category-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

     register_sidebar( array(
        'name'          => __( 'Widgets Article 1', 'blogviajero' ),
        'id'            => 'widgets-article-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Article 2', 'blogviajero' ),
        'id'            => 'widgets-article-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Redes Sociales', 'blogviajero' ),
        'id'            => 'widgets-redes-sociales',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Buscador', 'blogviajero' ),
        'id'            => 'widgets-buscador',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

}

add_action( 'widgets_init', 'blogviajero_widgets' );