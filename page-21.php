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
            <p> Get in Touch! </p>
          </div>
          <div class="phone__contact">
            <i class="bi bi-telephone-inbound"></i>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="imgbox">
            <img src="<?php echo $urlTheme."/image/allisoncoffee.jpg"?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mainsection contactform">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <form>
            <div class="row">
              <div class="col-sm-12 col-md-6 mb-3">
                <label for="FirstName" class="form-label">First Name</label>
                <input required type="text" class="form-control" id="FirstName" aria-describedby="NameHelp"
                  placeholder="First Name">
                <div id="nameHelp"></div>
              </div>
              <div class="col-sm-12 col-md-6 mb-3">
                <label for="exampleInputLast" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputLast" aria-describedby="lastnameHelp"
                  placeholder="Last Name">
                <div id="lastnameHelp"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-6 mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="col-sm-12 col-md-6 mb-3">
                <label for="exampleInputTelephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="exampleInputTelephone" placeholder="555-556-1234">
              </div>
            </div>
            <div class="mb-3">
              <textarea class="form-control" aria-label="With textarea"
                placeholder="Please write your message"></textarea>
            </div>
            <span class="btn btn-primary" onclick="verifmss()">Send message</span>
          </form>
        </div>
      </div>
    </div>
  </section>
 
    <?php 
    //get footer from footer.php
    get_footer(); ?>