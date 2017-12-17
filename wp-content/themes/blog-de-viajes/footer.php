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
          </div>  <!-- .row -->
        </div>  <!-- .col-sm-4 -->

      </div>  <!-- .row -->
    </div>  <!-- .container -->
    <p>Blog de Viajes <?php echo date( 'Y' ); ?> </p>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>
