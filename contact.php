<?php include('meta.php'); ?>
<?php include('header.php'); ?>
			<!--Animation new-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>AOS.init();	</script>
	<!--Animation new-->
 
        <!-- Header Area End Here -->           <!-- Slider Area Start Here --> 
     <section class="inner-page-banner bg-common mg-t--95" data-bg-image="assets/banners/new/webbanner.png" style="linear-gradient(rgba(0, 0, 0, 0.85), rgba(17, 42, 51, 0.53)), no-repeat!important; background-position: center !important;">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area" data-aos="fade-down" data-aos-duration="3000">
                            <ul>
                                <li>
                                    <a href="index-2.html">Home</a>
                                </li>
                                <li>Connect with us</li>
                            </ul>
                            <h1>Connect with us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- Slider Area End Here --> 

         <!-- Contact Page Area Start Here --> 
        <section class="contact-page-wrap-layout1">
            <div class="container">
                <div class="contact-page-box-layout1">
                    <!-- <div class="google-map-area">
                        <div id="googleMap" style="width:100%; height:540px; border-radius: 4px;"></div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="3000">
                            <div class="contact-list">
                                <div class="heading-layout5 mg-b-30">
                                    <h2>Connect with us</h2>
                                </div>
                                <div class="media">
                                    <img src="assets/telephone.png" alt="">
                                    <div class="media-body">
                                        <h3 class="mrb-0">Support Numbers</h3>
                                        <ul> 
                                            <li>+91 9997081448<br>+91 9873939893</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="assets/location.png" alt="">
                                    <div class="media-body">
                                        <h3 class="mrb-0">Address</h3>
                                        <ul>
                                            <li>(1) Delhi:-214 Ground Floor <br>
                                                Kalyan Vihar, Delhi 110009
                                               
                                            </li> <br>
                                            <li>(2) Meerut:- Gali No 4B , New sainik vihar ,<br> Meerut City (UP).
                                               
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="assets/plane.png" alt="">
                                    <div class="media-body">
                                        <h3 class="mrb-0">E-Mail</h3>
                                        <ul> 
                                            <li>hr@arifortech.com</li>
                                            <li>arifortech@gmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="3000">
                            <div class="contact-form-box-layout1">
                                <div class="heading-layout5 mg-b-30">
                                    <h2>Ask your query</h2>
                                </div>
                                <form class="contact-form-box" id="contact-forms" name="contact-form" method="post" action="https://weblabsolutions.in/process.php" autocomplete="off">
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
                                        <p id="capp2" style="background: linear-gradient(to bottom, #666699 11%, #669999 100%); user-select: none;padding:7px; text-transform:none;color:#fff;border-radius:3px;text-align:center;" >yOJ8EBw0</p>
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
        <!-- Contact Page Area End Here --> 
     <?php include('footer.php'); ?>
    
    <script>
 $("#submit").click(function(){
         //  var keyCode = e.which ? e.which : e.keyCode
       var name = $('#name').val();
              if(name == ''){
                  $('#name').focus();
       $(".errorname").css("display", "inline");
       } else { $(".errorname").css("display", "none");
       }
       $("#name").keyup(function(){
  $(".errorname").css("display", "none");
});

var message = $('#message').val().length;
              if(message <= 20){
                  $('#message').focus();
       $(".errormessage").css("display", "inline");
       } else { $(".errormessage").css("display", "none");
       }
       $("#message").keyup(function(){
  $(".errormessage").css("display", "none");
});
var subject = $('#subject').val();
              if(subject == ''){
                  $('#subject').focus();
       $(".errorsubject").css("display", "inline");
       } else { $(".errorsubject").css("display", "none");
       }
       $("#subject").keyup(function(){
  $(".errorsubject").css("display", "none");
});

 var comemail = $('#email').val();
              if((comemail == '')||(IsEmail(comemail)==false)){
                  $('#email').focus();
       $(".erroremail").css("display", "inline");
       } else { $(".erroremail").css("display", "none");
       }
       $("#email").keyup(function(){
  $(".erroremail").css("display", "none");
});
 
 
//var concontact = $('#contact').val();
var conlen=$('#phone').val().length;
 if(conlen==10){
 
     $(".errorphone").css("display", "none");
     return true;
 } else {
     $(".errorphone").css("display", "inline");
     return false;
     
 }
 function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }


       });

  var capcheck = 'yOJ8EBw0';
  
  function recaptcha2(){
      var newcap = makeid();
      $('#capp2').html(newcap);
      capcheck = newcap;
  }

  function sub2(){
  var cap = $('#captchainput2').val();
  if(cap == ''){
    alert('Captcha Required');
    return false;
  }
  else if(cap == capcheck){
    return true;
  }else{
    alert('Incorrect Captcha');
    return false;
  }
}
function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 8; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
</script>
