    <!-- Footer -->
            <footer class="page-footer font-small indigo">
                <img class="section--bg r0" src="assets/footer-bg.png" alt="bg" />
                <div class="footer-top-wrap-layout1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-box-layout1">
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="img/color.png" alt="logo" /></a>
                                    </div>
                                    <div class="page-footer__details">
                                        <p>
                                            <span>(1) Delhi:-214 Ground Floor Kalyan Vihar,<br> Delhi 110009.  </span><br>
                                            
                                            <span>(2) Meerut:- Gali No 4B , New sainik vihar ,<br> Meerut City (UP).</span>
                                        </p>
                                        <p>
                                            <strong>Phone :</strong>
                                            <a href="tel:+91 9651748530">+91 9997081448 </a>
                                            
                                        </p>
                                        <p>
                                            <strong>Email :</strong>
                                            <a href="mailto:hr@arifortech.com">hr@arifortech.com</a><br>
                                            <a href="mailto:arifortech@gmail.com">arifortech@gmail.com</a>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 top-30 top-md-0">
                                <h6 class="page-footer__title title--white">Main menu</h6>

                                <div class="row col-md-12">
                                    <div class="col-md-3 col-xs-12 p-a0">
                                        <ul class="page-footer__menu list--reset">
                                            <li><a href="about.php">About us</a></li>
                                           
                                            <li><a href="clients.php">Clients</a></li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-md-5 col-xs-12 mob-pad-0">
                                        <ul class="page-footer__menu list--reset">
                                            <li><a href="web-development.php">Web Development</a></li>
                                            <li><a href="uiux-design.php">UI/UX Designing</a></li>

                                            <li><a href="digital-marketing.php">Digital Marketing</a></li>
                                            <li><a href="mobileapp-development.php">Mobile App Development</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-xs-12 p-a0 mob-pad-btm">
                                        <ul class="page-footer__menu list--reset">
                                            <li><a href="website-maintenance.php">Website Maintenance</a></li>
                                            <li><a href="api-integration.php">API Integration</a></li>
                                            <li><a href="web-hosting.php">Web Hosting</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 top-30 top-lg-0">
                                <h6 class="page-footer__title title--white">Stay tuned for our latest news</h6>
                                <div class="flex-center">
                                    <div class="footer-box-layout1 mb-3 mt-1">
                                        <ul class="footer-social">
                                            <li>
                                                <a href="https://www.facebook.com/ARIFORTECH SOLUTION PVT LTD/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/ARIFORTECH SOLUTION PVT LTD/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/ARIFORTECH SOLUTION PVT LTD/" target="_blank"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/ARIFORTECH SOLUTION PVT LTD" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="footer-bottom-wrap-layout1">
                    <div class="copyright">Copyright © 2020, All Rights Reserved. <a href="#" target="_blank">ARIFORTECH SOLUTION PVT LTD.</a></div>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>

        <!-- jquery-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- Plugins js -->
        <!--  <script src="js/plugins.js"></script> -->
        <!-- Popper js -->
        <!-- <script src="js/popper.min.js"></script> -->
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Nivo Slider js -->
        <script src="vendor/slider/js/jquery.nivo.slider.js"></script>
        <script src="vendor/slider/home.js"></script>
        <!-- Owl Carousel js -->
        <script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
        <!-- Validator js -->
        <!-- <script src="js/validator.min.js"></script> -->
        <!-- Magnific Popup js -->
        <!--  <script src="js/jquery.magnific-popup.min.js"></script> -->
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Main js -->
        <script src="js/main.js"></script>
    </body>

</html>

<script>
    $("#servicesubmit").click(function () {
        var service = $("#services").val();
        //alert(service);
        if (service == "") {
            $("#services").focus();
            $(".errorservice").css("display", "inline");
        } else {
            $(".errorservice").css("display", "none");
        }
        $("#services").keyup(function () {
            $(".errorservice").css("display", "none");
        });

        //  var keyCode = e.which ? e.which : e.keyCode
        var name = $("#name").val();
        if (name == "") {
            $("#name").focus();
            $(".errorname").css("display", "inline");
        } else {
            $(".errorname").css("display", "none");
        }
        $("#name").keyup(function () {
            $(".errorname").css("display", "none");
        });

        var comemail = $("#email").val();
        if (comemail == "" || IsEmail(comemail) == false) {
            $("#email").focus();
            $(".erroremail").css("display", "inline");
        } else {
            $(".erroremail").css("display", "none");
        }
        $("#email").keyup(function () {
            $(".erroremail").css("display", "none");
        });

        //var concontact = $('#contact').val();
        var conlen = $("#phone").val().length;
        if (conlen == 10) {
            $(".errorphone").css("display", "none");
            return true;
        } else {
            $(".errorphone").css("display", "inline");
            return false;
        }

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    });
</script>
