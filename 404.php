<?php
  //find header.php
  get_header(); ?>

 
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

    <?php 
    //chemin pour récupérer le chemin du répertoire Theme
     $urlTheme = get_template_directory_uri();
  
    ?>

    <img src="<?php echo $urlTheme."/image/404.gif"?>">
 
 
    <?php 
    //get footer from footer.php
    get_footer(); ?>