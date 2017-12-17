  <footer>
    <div class="container">
      <div class="row">

        <div class="col-sm-8">
          <div class="row">
            <?php dynamic_sidebar( 'footer_widget' ); ?>
          </div>  <!-- .row -->
        </div>  <!-- .col-sm-8 -->

        <div class="col-sm-4">
          <div class="row">
            <h3>Redes Sociales</h3>
            <?php
              wp_nav_menu(
                array(
                  'theme_location'  => 'menu_redes_sociales',
                  'container'       => 'div',
                  'container_id'    => 'menu-redes-sociales',
                  'container_class' => 'menu',
                  'menu_id'         => 'social-networks',
                  'menu_class'      => 'menu-items',
                  'depth'           => 1,       # Profundidad o nivel a imprimir
                  'link_before'     => '<span class="sr-only">',
                  'link_after'      => '</span>',
                  'fallback_cb'     => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'       # Lo que va rodear a todos los items de menu
                )
              );
            ?>
          </div>  <!-- .row -->
        </div>  <!-- .col-sm-4 -->

      </div>  <!-- .row -->
    </div>  <!-- .container -->
    <p class="footer-info">Blog de Viajes <?php echo date( 'Y' ); ?> </p>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
