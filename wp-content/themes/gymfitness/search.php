<?php get_header(); ?>
<section class="seccion contenedor">
  <?php
  $s=get_search_query();
  $args = array(
                  's' =>$s
              );
      // The Query
  $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {_e("<h2>Resultados para: <span class='text-primary'>".get_query_var('s')."</span></h2>");
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
          ?>
          <div class="search-results">
            <li class="post-content">
              <?php the_post_thumbnail('thumbnail') ?>
              <div>
                <div class="search-title">
                  <h4><?php the_title(); ?></h4>
                  <a href="<?php the_permalink(); ?>" class="boton boton-primario more">Leer Más</a>
                </div>
                <p><?php the_excerpt(); ?></p>
              </div>
            </li>
          </div>
          <?php
      }
    }else{
      ?>
      <h2 style='font-weight:bold;color:#000'>Sin resultados</h2>
      <div class="alert alert-info">
        <p>Sin resultados para <span class="text-primary no-results"><i>"<?php echo get_query_var('s') ?></i>"</span>. Por favor intente nuevamente con otro criterio de búsqueda.</p>
      </div>
  <?php } ?>
</section>

<?php get_footer(); ?>