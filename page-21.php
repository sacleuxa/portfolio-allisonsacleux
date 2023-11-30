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
        <div class="col-12 col-md-6 text-center">
          <div class="h1__contact">
            <p><?php $post = get_post(106) ?>
              <?php echo $post->post_content ?> </p>
          </div>
          <div class="phone__contact">
            <i class="bi bi-telephone-inbound"></i>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="imgbox">
            <img src="<?php echo $urlTheme."/image/webdeveloper-allison.jpg"?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="mainsection contactform"> <!--
  <form action="formhandler.php" method="post">
  
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="row">

              <div class="col-sm-12 col-md-6 mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input required type="text" class="form-control" id="firstname" aria-describedby="NameHelp"
                  placeholder="First Name">
              </div>

              <div class="col-sm-12 col-md-6 mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                  placeholder="Last Name">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-6 mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                  placeholder="Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>

              <div class="col-sm-12 col-md-6 mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" placeholder="555-556-1234">
              </div>
            </div>

            <div class="mb-3">
            <label for="message" class="form-label">Message</label>
              <textarea class="form-control" aria-label="With textarea"
                placeholder="Please write your message"></textarea>
            </div>

          <button class="btn btn-primary btn_custom" onclick="verifmss()">Send message</button> -->
            <?php the_content() ?> 
          </form>
         
        </div>
      </div>
    </div>
  </section>
 
    <?php 
    //get footer from footer.php
    get_footer(); ?>