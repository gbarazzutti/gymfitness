<?php 
  get_header();
?>
  <main class="seccion contenedor">
    <h2 class="text-center error">Error</h2>
    <h1 class="text-primary text-center">
      404
    </h1>
    <p class="text-center">¡La página que buscas no existe!</p>
    <div class="contenedor-boton-404">
    <a href="<?php echo site_url('/'); ?>" class="boton boton-primario">Regresar al inicio</a>
      </div>
    </main>
    
    <?php 
      get_footer();
    ?>