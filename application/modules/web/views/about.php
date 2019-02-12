<section class="page-title-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h1 class="page-title"><?php echo $this->lang->line('about us'); ?> <?php echo $settings->school_name; ?></h1></div>
        </div>
    </div>
</section>
<section class="messageContainer pd-b" id="message-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="go-heading go-lined">
          <h3 class="title-section1"><?php echo $about->page_name;?></h3>
        </div>
        
         <div class="row">
          <div class="col-md-6">
              <div class="about-img"> 
                <img src="<?php echo UPLOAD_PATH; ?>/page/<?php echo $about->page_image; ?>">
                <!-- <h4><?php echo $about->page_title; ?></h4> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="aboutContent">
              <div class="about-desc">
                  <h3>WELCOME TO Origin</h3>      
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>
              <div class="our-history">
                <h3>Our History</h3>
              </div>
                <p>
                <?php echo htmlspecialchars_decode(stripslashes($about->page_description)); ?>
                </p>
            </div>
          </div>
          
         
         </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="go-content-area pd-all about-content aboutus-wrap">
    <div class="container">
         <div class="row">
            <div class="col-lg-12"><h1><?php echo $this->lang->line('about us'); ?> <?php echo 'About '.$settings->school_name; ?></h1></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php echo $about->page_description; ?>
                <div class="about_us_page">
                <div class="row">
                    <h3>Why Choose Us?</h3>
                    <div class="list-style">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                          <ul>
                            <li>Years of Experience</li>
                            <li>Fully Insured</li>
                            <li>Cost Control Experts</li>
                            <li>100% Satisfaction Guarantee</li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                          <ul>
                            <li>Free Consultation</li>
                            <li>Satisfied Customers</li>
                            <li>Project Management</li>
                            <li>Affordable Pricing</li>
                          </ul>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid img-thumbnail" src="<?php echo UPLOAD_PATH; ?>/page/<?php echo $about->page_image; ?>" alt="">
            </div>      
        </div>
    </div>
</section> -->