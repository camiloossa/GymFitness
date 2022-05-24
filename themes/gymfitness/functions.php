<?php

    // Cuando el tema es activado
    function gymfitness_setup() {
        // para habilitar imagenes destacadas
        add_theme_support('post-thumbnails');

        // Agregar imagenes de tamaño personalizado
        add_image_size('square', 350, 350, true);
        add_image_size('portrait', 350, 724, true);
        add_image_size('cajas', 400, 375, true);
        add_image_size('mediano', 700, 400, true); 
        add_image_size('blog', 966, 644, true);
        
    }

    add_action('after_setup_theme', 'gymfitness_setup');

    // Menus de Navegacion, agregar mas utilizando el arreglo
    function gymfitness_menu(){
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'gymfitness')
        ));
    }

    add_action( 'init', 'gymfitness_menu');

    //Scripts y Styles
    function gymfitness_scripts_styles() {
        //Cargando Normalize.css
        wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');

        //Carga de la fuentes de google fonts
        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;0,700;1,900&family=Staatliches&display=swap', array(), '1.0.0');       

        // Cargando css slicknav que es para el menu hamburguesa
        wp_enqueue_style('slicknavCSS', get_template_directory_uri().'/css/slicknav.min.css', array(), '1.0.0');

        //Hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

        // Carga de los scripts de JavaScript
        wp_enqueue_script('slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);


    }

    // Para que wordpress escuche y agruege hojas de estilo y scripts
    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

    
 

?>