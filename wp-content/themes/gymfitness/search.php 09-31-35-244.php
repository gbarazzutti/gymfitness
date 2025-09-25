<?php 
  get_header();
?>
   
  <main>
    <section class="contenedor seccion">
    <h3><?php printf( __( 'Resultados para: %s', 'tempera' ), '<span class="text-primary">' . get_search_query() . '</span>' ); ?></h3>
      <?php 
        gymfitness_search_results()
      ?>      
    </section>
  </main>
    
<?php 
  get_footer();
?>