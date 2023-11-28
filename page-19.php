<?php
  //find header.php
  get_header(); ?>
  


<?php 
    //chemin pour récupérer le chemin du répertoire Theme
     $urlTheme = get_template_directory_uri();
  
    ?>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <p> Hi! I'm Allison, a web developer based in France. I enjoy creating seemless user centric experiences for my clients and their audience. 
                </p>
                <a class="btn btn-primary" href="about.html">About me</a>           
             </div>
             <div class="col-12 col-md-6">
                <img src="<?php echo $urlTheme."/image/allisonbarcelona.jpg"?>">
            </div>
        </div>
    </div>
</section>
<section class="competence">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Experience</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li>Bootstrap</li>
                    <li>Github</li>
                    <li>Figma</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="project">
    <div class="container">
        <h2>Title</h2>
                <div class="row">
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $urlTheme."/image/americaferreraheader.png"?>"> 
                    <div class="card-body">
                      <h5 class="card-title">America Ferrera</h5>
                      <p class="card-text">Creating a page for my favorite movie star.</p>
                      <a href="about.html" class="btn btn-primary">About Me</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $urlTheme."/image/invision.png"?>">
                    <div class="card-body">
                      <h5 class="card-title">Creating Reponsive Websites</h5>
                      <p class="card-text">Today's websites demand a mix of coding languages to create the best outcome for client's.</p>
                      <a href="contact.html" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $urlTheme."/image/allezabroad.png"?>">
                    <div class="card-body">
                      <h5 class="card-title">Allez Abroad Websites</h5>
                      <p class="card-text">A local travel agency was in need of a refresh for their website, it was a pleasure to collaborate with them.</p>
                      <a href="https://allezabroad.com/" class="btn btn-primary">Visit Site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

    <?php wp_link_pages(); ?>


    <?php 
    //get footer from footer.php
    get_footer(); ?>