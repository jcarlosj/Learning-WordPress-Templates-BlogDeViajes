<?php

  /* Agregamos la funcion que nos permitirá hacer uso de una hoja de estilos */
  function blogdeviajes_styles() {
    # Implementación Normalize
    wp_enqueue_style(
      'normalize',
      get_stylesheet_directory_uri() .'/css/normalize.css'
    );
    # Implementación Archivo de Estilos Principal
    wp_enqueue_style( 'style', get_stylesheet_uri() );        # Por defecto tomará el archivo con el nombre 'style.css' como el archivo principal del sitio
  }
  add_action( 'wp_enqueue_scripts', 'blogdeviajes_styles' );  # Hook
?>
