<?php
// Estilos CSS
function dl_enqueue_style() {
	$theme_data = wp_get_theme();
	/* Registrar estilos */
	wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get( '1.0' ));
	wp_register_style('main', get_parent_theme_file_uri('/css/style.css'), null, $theme_data->get( '1.0' ));
	/* llamar estilos */
	wp_enqueue_style( 'bootstrap_css' );
	wp_enqueue_style( 'main' );
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

// Definimos la función
function script_bootstrap() {
// El primer paso es usar wp_register_script para registrar el script que queremos cargar. Fíjense que aquí sí usamos *get_template_directory_uri()*
wp_register_script( 'script', get_template_directory_uri() . '/js/jquery.js', array( 'jquery'), '1.0.0', false );
wp_register_script( 'script-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery'), '1.0.0', false );

// Una vez que registramos el script debemos colocarlo en la cola de WordPress
wp_enqueue_script( 'script' );
wp_enqueue_script( 'script-bootstrap' );
}

// Agregamos la función a la lista de cargas de WordPress.
add_action( 'wp_enqueue_scripts', 'script_bootstrap' );



?>