<?php
  //find header.php
  get_header(); ?>

    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <h3><?php the_title(); ?></h3>
 
    <?php the_content(); ?>
    
    <section class="about__aboutpage">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
                    <div class="imgbox">
                      <img class="img" src="image/allisonbarcelonawhitejacket.jpg">
                    </div>
              <div class="h1__contact">
                <h3> About Me </h3>
              </div>
              <div class="paragraph__aboutme">
                <div class="col-12">
                    <p>Bonjour! I'm Allison, an American expat living in the beautiful town of La Canourgue, France. I'm passionate about technology, design, and creating beautiful and functional websites for my clients.</p>
                    <h3>My Work</h3>
                    <p>I'm a web developer focusing on creating user-friendly and visually appealing websites. I'm also a strong believer in using technology to make a positive impact on the world. 
                        My clients have included small businesses, organizations, and individuals. I'm proud of the work I've done, and I'm always looking for new challenges. </p>
                    <h3>Contact Me</h3>
                    <p>If you're looking for a web developer who can create a beautiful and functional website for your business or organization, I'd love to hear from you. I offer a free consultation to discuss your needs and goals.
                        Thank you for visiting my website!</p>
                </div>
              </div>
              </div>
            </div>
    
    <?php wp_link_pages(); ?>

 
    
    <?php endwhile; ?>
    <?php endif; ?>
 
    <?php 
    //get footer from footer.php
    get_footer(); ?>