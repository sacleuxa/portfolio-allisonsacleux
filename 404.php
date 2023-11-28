<?php
  //find header.php
  get_header(); ?>

 
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>

 
 
 
    <?php 
    //get footer from footer.php
    get_footer(); ?>