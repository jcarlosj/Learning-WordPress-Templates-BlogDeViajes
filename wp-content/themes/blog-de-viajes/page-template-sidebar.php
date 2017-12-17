<?php
  /*
   * Template Name: Página con SideBar
   */
  get_header();
?>
  <section class="container-fluid content">
    <div class="row">
      <?php # Standart Loop WP_Query
        while( have_posts() ):
          the_post();
      ?>

        <div class="col-sm-8 page-content">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
              Contenido
            </div>  <!-- .col-sm-10 .col-sm-offset-2 -->
          </div>  <!-- .row -->
        </div>  <!-- .col-sm-8 .page-content -->

      <?php endwhile; ?>

      <div class="col-sm-4 sidebar">
        SideBar
      </div>  <!-- .col-sm-4 .sidebar -->

    </div>
  </section>  <!-- .container-fluid .content -->
<?php
  get_footer();
?>
