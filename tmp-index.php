
<?php $page_title = "Godson Pius"; require_once "inc/page_header.php"; ?>
<body class="ckav-body tooltip-light">

    <!--
    ************************************************************
    * PAGE LOADER
    *************************************************************
    -->
    <div id="loader">
        <div class="load-three-bounce">
            <div class="load-child bounce1"></div>
            <div class="load-child bounce2"></div>
            <div class="load-child bounce3"></div>
        </div>
    </div>
    <!-- ************** END : PAGE LOADER **************  -->


    <div class="ckav-body">

        <!-- Both for the nav -->
        <?php require_once "inc/header.php"; ?>

        <!--
        ************************************************************
        * HOME AREA
        *************************************************************
        -->
        <div class="home-area intro-section flex-cc" data-ckav-smd="flex-cc">
            
            <!-- PARTICLE EFFECT -->
            <div class="full-wh full-wh zindex-1">
                <div class="height-100" id="particles-js"></div>
            </div>

            <div class="container-fluid zindex-1 intro-element">

                <div class="row">
                    <div class="col-md-5 offset-md-7">
                        
                        <!-- INTRO TEXT -->
                        <div class="intro-text typo-light" data-ckav-smd="align-center">
                            <h2 class="heading small bold-900 text-upper" data-ckav-smd="small">Godson Pius</h2>

                            <div class="carousel-widget carouselnav-1 light large" data-nc-smd="align-center" 
                            data-carousel-items="1"
                            data-carousel-itemrange="false"
                            data-carousel-autoplay="true" 
                            data-carousel-margin="30" 
                            data-carousel-loop="false"
                            data-carousel-nav="false"
                            data-carousel-dots="false"
                            data-carousel-center="false"
                            data-carousel-heightauto="true"
                            data-carousel-mousedrag="false"
                            data-carousel-touchdrag="true">
                                <div class="owl-carousel">
                                    
                                    <!-- ITEM -->
                                    <div class="item">
                                        <div class="inneritem">
                                            <h2 class="heading xlarge bold-900 text-upper" data-ckav-smd="large">I'm a Developer</h2>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="item">
                                        <div class="inneritem">
                                            <h2 class="heading xlarge bold-900 text-upper" data-ckav-smd="large">I'm a Designer</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <p class="heading-sub width-70" data-ckav-smd="width-100 mini">
                                My name is Godson Pius and i'm a developer / graphics designer. I'm currently working with Aptech Center Education. And i'm the founder of <a href="https://worldbraintechnology.com" class="company_link">World Brain Technology.</a>
                            </p>
                            <a href="#popup-content" class="set-popup button button-xlarge color-button-default color-hov-button-white solid radius-10" data-ckav-smd="button-medium">Let's work</a>
                        </div>

                    </div>
                </div>
                

            </div>

            <!--=================================
            = BACKGROUND HOLDER
            ==================================-->
            <div class="bg-holder zindex-0">
                
                <!-- OVERLAY -->
                <b data-bgholder="overlay" class="full-wh zindex-2" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>
                
                <!-- BACKGROUND IMAGE -->
                <b data-bgholder="background-image" class="full-wh bg-cover bg-cc zindex-1" data-bg-image="images/bg-01.jpg"></b>
                
            </div>
            <!-- ======= END : BACKGROUND HOLDER =======  -->

        </div>
        <!-- ************** END : HOME AREA **************  -->

         <!--
        ************************************************************
        * SOCIAL AREA
        *************************************************************
        -->
        <div class="social-area intro-element">
            <a href="#social" class="section-post button button-icon color-button-white border-op-light-2 radius-full"><i class="icon-share"></i></a>
        </div>
        <!-- ************** END : SOCIAL AREA **************  -->

        <!--
        ************************************************************
        * POP UP WRAPPER
        *************************************************************
        -->
        <div class="popup-area">

            <!--=================================
            = POPUP OVERLAY
            ==================================-->
            <div class="popup-overlay" data-bg-color="rgba(0,0,0,0.8)">

            </div>
            <!-- ======= END : POPUP OVERLAY =======  -->

            <!-- About Me -->
            <?php require_once "inc/about.php"; ?>

            <!-- My musics -->
            <?php require_once "inc/music.php"; ?>

            <?php require_once "inc/services.php"; ?>

            <!--=================================
            = PORTFOLIO SECTION
            ==================================-->
            <div id="portfolio" class="popup-section portfolio-section typo-light">
                
                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#" class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">
                        
                        <div class="portfolio-widget grid-portfolio portfolio-row grid-03" data-zoom-gallery="yes" data-ckav-md="grid-02" data-ckav-sm="grid-01">
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.1">
                                <figure class="hover-box hover-box-01">
                                    
                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-01.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup</h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>
    
                                    <!-- IMAGE -->
                                    <img src="images/grid-portfolio-01.jpg" alt="portfolio image">
    
                                </figure>
                            </div>
    
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.1">
                                <figure class="hover-box hover-box-01">
                                    
                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-02.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup</h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>
    
                                    <!-- IMAGE -->
                                    <img src="images/grid-portfolio-02.jpg" alt="portfolio image">
    
                                </figure>
                            </div>
    
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.2">
                                <figure class="hover-box hover-box-01">
                                    
                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-03.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup</h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>
    
                                    <!-- IMAGE -->
                                    <img src="images/grid-portfolio-03.jpg" alt="portfolio image">
    
                                </figure>
                            </div>
    
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.3">
                                <figure class="hover-box hover-box-01">
                                    
                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-04.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup</h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>
    
                                    <!-- IMAGE -->
                                    <img src="images/grid-portfolio-04.jpg" alt="portfolio image">
    
                                </figure>
                            </div>
    
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.4">
                                <figure class="hover-box hover-box-01">
                                    
                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-05.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup</h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>
    
                                    <!-- IMAGE -->
                                    <img src="images/grid-portfolio-05.jpg" alt="portfolio image">
    
                                </figure>
                            </div>
    
                            <div class="portfolio-col animated" data-anim-in="fadeInUp|0.5">
                                <figure class="hover-box hover-box-01">
                                    
                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="images/grid-portfolio-06.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="#" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="pe-7s-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">PSD Mockup</h3>
                                            <p class="mr-0 fs12 op-08">Lorem ipsum dolor sit amet consectetur</p>
                                        </div>
                                    </div>
    
                                    <!-- IMAGE -->
                                    <img src="images/grid-portfolio-06.jpg" alt="portfolio image">
    
                                </figure>
                            </div>
    
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : PORTFOLIO SECTION =======  -->

            <!--=================================
            = CONTACT SECTION
            ==================================-->
            <div id="contact" class="popup-section contact-section typo-light">
                
                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#" class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">
                        
                        <div class="row gt60 align-items-center">
                            <div class="col-lg-6">
                                <div class="map-wrapper height-px-300 margin-b-40 animated" data-anim-in="fadeInUp">
                                    <iframe class="width-100 height-100 border-none radius-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25173.549759506815!2d144.97705325499777!3d-37.79137058602538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cb954b1ce9%3A0xf187674ba9830e78!2sState+Library+Victoria!5e0!3m2!1sen!2sin!4v1560509152021!5m2!1sen!2sin" allowfullscreen></iframe>
                                </div>

                                <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated" data-anim-in="fadeInUp|0.1" data-ckav-smd="margin-b-30 align-left">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-mail"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content tiny bold-600 margin-b-5">Email</h3>
                                        <p class="margin-b-0">c.kav.art@gmail.com</p>
                                    </div>
                                </div>
    
                                <hr class="border-op-light-2 margin-tb-20">
    
                                <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated" data-anim-in="fadeInUp|0.2" data-ckav-smd="margin-b-30 align-left">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-headphones"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content tiny bold-600 margin-b-5">Phone</h3>
                                        <p class="margin-b-0">+1234-567-890</p>
                                    </div>
                                </div>
    
                                <hr class="border-op-light-2 margin-tb-20">
    
                                <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated" data-anim-in="fadeInUp|0.3" data-ckav-smd="margin-b-30 align-left">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-map-2"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content tiny bold-600 margin-b-5">Address</h3>
                                        <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur sadipscing nonumy ipsum eirmod</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="section-heading-wrapper" data-ckav-smd="align-center margin-t-30">
                                    <h2 class="heading-section text-upper default bold-900 animated" data-anim-in="fadeInRight|0.1" data-ckav-smd="medium margin-b-0">Drop us line</h2>
                                </div>
                                <hr class="color-border-default margin-tb-30 width-px-50 margin-l-0 border-t-2 animated" data-anim-in="fadeInRight|0.2" data-ckav-smd="margin-auto">
                                <form action="form-data/formdata.php" class="form-widget form-control-op-light-02 animated" data-anim-in="fadeInRight|0.2" data-ckav-smd="align-center">
                                    <div class="field-wrp">
                                        <input type="hidden" name="to" value="c.kav.art@gmail.com">
            
                                        <div class="row gt10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control radius-10" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control radius-10" data-label="Email" required="" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input class="form-control radius-10" required="" data-label="Phone" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
                                        </div>
            
                                        <div class="form-group">
                                            <input class="form-control radius-10" data-label="Subject" type="text" name="subject" placeholder="Enter subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control radius-10" data-label="Message" required="" data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="button radius-10 solid color-button-default margin-0"><i class="fa fa-envelope-o"></i> SUBMIT</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : CONTACT SECTION =======  -->

            <!--=================================
            = SOCIAL SECTION
            ==================================-->
            <div id="social" class="popup-section social-section typo-light">
                
                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#" class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col align-center animated" data-anim-in="fadeInUp|0.1" data-ckav-smd="margin-b-30">
                                <a href="#" class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i class="fab fa-facebook-f"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.2" data-ckav-smd="margin-b-30">
                                <a href="#" class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i class="fab fa-twitter"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.3" data-ckav-smd="margin-b-30">
                                <a href="#" class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.4" data-ckav-smd="margin-b-30">
                                <a href="#" class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i class="fab fa-instagram"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.5" data-ckav-smd="margin-b-30">
                                <a href="#" class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i class="fab fa-dribbble"></i></a>
                            </div>

                            <div class="col align-center animated" data-anim-in="fadeInUp|0.6" data-ckav-smd="margin-b-30">
                                <a href="#" class="button button-icon-xlarge color-button-white border-op-light-2 radius-10"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : SOCIAL SECTION =======  -->

        </div>
        <!-- ************** END : POP UP WRAPPER **************  -->

        <!--
        ************************************************************
        * FOOTER
        *************************************************************
        -->
        <div class="footer-area intro-element">
            <div class="container">
                <p class="c-text">                
                    <a class="c-text" href="https://worldbraintechnology.com" target="_blank">Godson Pius - World Brain Technology</a> © <script>document.write(new Date().getFullYear());</script>
                </p>
            </div>
        </div>
        <!-- ************** END : FOOTER **************  -->

        <!--
        ************************************************************
        * PROJECT POPUP
        *************************************************************
        -->
        <div id="popup-content" class="white-popup-block popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0" data-ckav-sm="padding-30 padding-b-0">
                <div class="square-90 iconwrp fs-80 margin-0 color-text-default"><i class="pe-7s-science"></i></div>
                <h2 class="heading-section default bold-900 text-upper mr-0" data-ckav-sm="small">Let's Get It Done</h2>
            </div>
            <div class="pop-body padding-t-20" data-ckav-sm="padding-30 padding-t-30">
                
                <div class="form-block">

                    <form action="form-data/notify-me.php" class="form-widget form-control-op-02" novalidate="novalidate">
                        <div class="field-wrp">
                            <input type="hidden" name="to" value="c.kav.art@gmail.com">

                            <div class="row gt10">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control radius-6" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control radius-6" data-label="Email" required="" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control radius-6" data-label="Project_title" required="" data-msg="Please enter your project description." type="text" name="project_title" placeholder="Enter your Project Title">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control radius-6" required="" data-msg="Please enter what you need me to build for you." name="project_desc"> Describe what you want me to build for you.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="button radius-6 solid color-button-default width-100 margin-0"><i class="fa fa-envelope-o"></i> SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- ************** END : PROJECT POPUP **************  -->

        <!--
        ************************************************************
        * BLOG SINGLE
        *************************************************************
        -->
        <div id="blog-01" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">
        
                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>
                    
                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1" data-bg-image="images/blog-bg-01.jpg"></b>
                    
                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">
                
                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Speed Developement is key</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>


        <div id="blog-02" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">
        
                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>
                    
                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1" data-bg-image="images/blog-bg-02.jpg"></b>
                    
                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">
                
                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Sharp design is create more attraction</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>


        <div id="blog-03" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">
        
                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>
                    
                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1" data-bg-image="images/blog-bg-03.jpg"></b>
                    
                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">
                
                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">After support is most important services</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>



        <div id="blog-04" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">
        
                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>
                    
                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1" data-bg-image="images/blog-bg-04.jpg"></b>
                    
                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">
                
                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Get regular update</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>


        <div id="blog-05" class="white-popup-block single-blog popup-content animate fadeInDown mfp-hide radius-6">
            <div class="pop-header padding-b-0 position-rel height-px-500" data-ckav-sm="padding-30 padding-b-0">
                <div class="bg-holder zindex-0">
        
                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.5)"></b>
                    
                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-tc zindex-1" data-bg-image="images/bg-01.jpg"></b>
                    
                </div>
            </div>
            <div class="pop-body padding-tb-60" data-ckav-sm="padding-30 padding-t-30">
                
                <div class="container align-left">
                    <div class="section-heading-wrapper margin-auto" data-ckav-smd="width-100">
                        <p class="color-text-default bold-600">January 22, 2018 -- <span>LOGOS</span></p>
                        <h2 class="heading-section text-upper small bold-600" data-ckav-smd="small">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ab ipsum consequatur, reiciendis id ad nisi, voluptates aliquid, ex tenetur deleniti! Asperiores, assumenda. Suscipit magnam laboriosam pariatur quo facilis voluptatem. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam quisquam magni architecto sint, a quia dolor eaque ex quasi asperiores officiis quae facilis ipsa aperiam necessitatibus corporis, repellendus est sequi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus non officia amet, atque deserunt voluptatibus tempora laboriosam doloribus sequi totam dicta veniam excepturi quo libero laudantium itaque tempore magni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis ipsum reprehenderit perferendis dicta aut sint, consectetur reiciendis corporis modi illo eaque officia provident doloribus. Quod quisquam distinctio totam repellat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores tempora adipisci, quisquam sunt saepe dignissimos dolorum velit officia ipsa error doloremque dicta fugit quidem earum ullam dolor possimus voluptatum fuga. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni cumque aut nisi. Architecto cum temporibus porro praesentium maxime adipisci necessitatibus quia modi, esse eum saepe, asperiores, corporis doloribus optio!</p>
                    </div>

                    <div class="social-section margin-t-30">
                        <div>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-dark border-op-1"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        <!-- ************** END : BLOG SINGLE **************  -->

    </div>
    
<?php require_once "inc/page_footer.php"; ?>