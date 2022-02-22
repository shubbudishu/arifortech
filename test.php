<?php include('meta.php'); ?>
<?php include('header.php'); ?>
        <!-- Header Area End Here -->
        <!-- Slider Area Start Here -->
 <!-- Header Area End Here -->           <!-- Slider Area Start Here --> 
        <section class="inner-page-banner bg-common mg-t--95" data-bg-image="" style="background-image:url('assets/inner-ban.jpg');background-position: center !important;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <ul>
                                <li>
                                    <a href="index-2.html">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                            <h1>Get In Touch</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <style type="text/css">
            .inner-page-banner.bg-common.mg-t--95 {
    background-image: url("assets/inner-ban.jpg");
}
.inner-page-banner.bg-common.mg-t--95 {
    background-image: url("assets/inner-ban.jpg") !important;
}
        </style>
         <!-- Contact Page Area Start Here --> 
        <section class="contact-page-wrap-layout1">
            <div class="container">
                <div class="contact-page-box-layout1">
                    <!-- <div class="google-map-area">
                        <div id="googleMap" style="width:100%; height:540px; border-radius: 4px;"></div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-list">
                                <div class="heading-layout5 mg-b-30">
                                    <h2>Get in Touch</h2>
                                </div>
                                <div class="media">
                                    <img src="assets/telephone.png" alt="">
                                    <div class="media-body">
                                        <h3 class="mrb-0">Support Numbers</h3>
                                        <ul> 
                                            <li>Sales: +91 9885360007</li>
                                            <!-- <li>Support: +91 9704624696</li> -->
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="assets/location.png" alt="">
                                    <div class="media-body">
                                        <h3 class="mrb-0">Address</h3>
                                        <ul>
                                            <li>4th Floor, Plot No:8, Vedaanika Place,<br>
                                                Road No:12, Banjara Hills,<br>
                                                Hyderabad, Telangana 500034.
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="assets/plane.png" alt="">
                                    <div class="media-body">
                                        <h3 class="mrb-0">E-Mail</h3>
                                        <ul> 
                                            <li>info@weblabsolutions.in</li>
                                            <li>sales@weblabsolutions.in</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form-box-layout1">
                                <div class="heading-layout5 mg-b-30">
                                    <h2>Drop us a line</h2>
                                </div>
                                <form class="contact-form-box" id="contact-forms" name="contact-form" method="post"  autocomplete="off">
                                    <div class="row gutters-15">
                                        <div class="col-lg-6 col-12 form-group">
                                            <label>Name *</label>
                                            <input type="text" placeholder="" class="form-control" name="name" id="name" data-error="Name field is required" required>
                                            <span class="errorname" style="color: red; display: none">*Required Field (Name)</span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-lg-6 col-12 form-group">
                                            <label>E-Mail *</label>
                                            <input type="email" placeholder="" class="form-control" name="email" id="email" data-error="email field is required" required>
                                            <span class="erroremail" style="color: red; display: none">*Required Field (Valid Email)</span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <label>Phone *</label>
                                            <input type="text" placeholder="" pattern="^\d{10}$"  minlength="10" maxlength="10" class="form-control" name="phone" id="phone" data-error="Phone field is required" required>
                                           <span class="errorphone" style="color: red; display: none">*Required Field (Valid Phone Nuber)</span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <label>Subject *</label>
                                            <input type="text" placeholder="" class="form-control" name="subject" id="subject" data-error="Subject field is required" required>
                                             <span class="errorsubject" style="color: red; display: none">*Required Field (Subject)</span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Type Your Comment *</label>
                                            <textarea placeholder="" class="textarea form-control" name="message" id="message" minlength="20" rows="1" cols="20" 
                                            data-error="Message field is required" required></textarea>
                                            <span class="errormessage" style="color: red; display: none">*Required Field (Message bitween 20 to 200 Characters)</span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-7">
                                        <input type="text" id="captchainput2" placeholder="Enter Captcha" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                        <p id="capp2" style="background: linear-gradient(to right, #0482a8, #026080);user-select: none;padding:7px; text-transform:none;color:#fff;border-radius:3px;text-align:center;" >yOJ8EBw0</p>
                                        </div>
                                        <div class="col-md-1">
                                        <i class="fa fa-refresh" onclick="return recaptcha2()" style="color:#037198; cursor:pointer; " aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12 form-group">
                                           <!--  <button type="submit" class="custom-button-main">Send a Message</button> -->
                                           <input type="submit" onclick="return sub2()" class="custom-button-main m-t20" id="submit" name="submit" Value="Submit">
                                          <!--  <a href="#" class="custom-button-main m-t20">Submit <i class="fas fa-arrow-circle-right"></i></a>-->
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <?php include('footer.php'); ?>