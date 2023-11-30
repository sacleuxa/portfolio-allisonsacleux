<?php
  //find header.php
  get_header(); ?>



<?php 
    //chemin pour récupérer le chemin du répertoire Theme
     $urlTheme = get_template_directory_uri();
  
    ?>

      
<section class="about__aboutpage">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="imgbox">
                    <img class="frame" src="<?php echo $urlTheme."/image/allisoncouch.jpg"?>">
                </div>
                <div class="aboutme__paragraph">
                    <div class="col-12">
                    <p>
                        <?php $post = get_post(91) ?>
                        <?php echo $post->post_content ?>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <?php 
    //get footer from footer.php
    get_footer(); ?>