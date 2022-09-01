<?php  $page_title = "Godson Pius"; require_once "inc/page_header.php"; require_once "admin/config/dbconfig.php"; 

if (isset($_POST['request_button'])) { 
    $response = work_request($_POST);

    if ($response === true) {
        $request_status = "sent";
    } else {
        $request_status = "failed";
    }
} 

?>
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
        <div class="home-area intro-section flex-bc padding-b-large" data-ckav-smd="flex-cc padding-b-0">
            <div class="container-fluid zindex-1 intro-element">

                <div class="row">
                    <div class="col-md-12 offset-md-0">
                        
                        <!-- INTRO TEXT -->
                        <div class="intro-text typo-light align-center" data-ckav-smd="align-center">
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
                            data-carousel-touchdrag="false">
                                <div class="owl-carousel">
                                    
                                    <!-- ITEM -->
                                    <div class="item">
                                        <div class="inneritem">
                                            <h2 class="heading xlarge bold-900 text-upper" data-ckav-smd="large">I'm a Gospel Artist</h2>
                                        </div>
                                    </div>
                                    
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
                            <p class="heading-sub width-px-700 margin-auto" data-ckav-smd="width-100 mini">
                                My name is Godson Pius, i'm a gospel artist, developer and graphics designer. I am the founder and CEO of <a href="https://worldbraintechnology.com" class="text-white">World Brain Technology Ltd.</a>
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
                <b data-bgholder="overlay" class="full-wh zindex-2" data-radial-gradient="rgba(0,0,0, 0.2)|rgba(0,0,0, 0.9)"></b>

               <!-- BACKGROUND IMAGE -->
                <b data-bgholder="background-image" class="full-wh bg-cover bg-cc zindex-1" data-bg-image="images/bg-me.jpg"></b>
                
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

            <!-- My services -->
            <?php require_once "inc/services.php"; ?>

            <!-- My Portfolio -->
            <?php require_once "inc/portfolio.php"; ?>

            <!-- My Contact -->
            <?php require_once "inc/contact.php"; ?>

            <!-- My Socials -->
            <?php require_once "inc/social.php"; ?>

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
                    <a class="c-text" href="https://worldbraintechnology.com" target="_blank">Godson Pius - World Brain Technology Ltd.</a> © <script>document.write(new Date().getFullYear());</script>
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

                    <form action="" class="form-widget form-control-op-02" method="post">
                        <div class="field-wrp">

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

                        <input type="submit" class="button radius-6 solid color-button-default width-100 margin-0" name="request_button" value="Submit">
                        
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
        <!-- ************** END : BLOG SINGLE **************  -->

    </div>
    <?php require_once "inc/video-footer.php"; ?>


    <?php
    if (isset($request_status) && $request_status === "sent") { ?>
        <script>
            swal("Request Sent", "Your request have been sent! Godson will respond to you shortly...", "success");
        </script>
    <?php } ?>

    <?php
    if (isset($request_status) && $request_status === "failed") { ?>
        <script>
            swal("Ooops!!", "Failed to send! Please check your inputs or connection and try again!", "error");
        </script>
    <?php } ?>

    <?php
    if (isset($contact_status) && $contact_status === "sent") { ?>
        <script>
            swal("Message Sent", "Your message have been sent! Godson will respond to you shortly thanks...", "success");
        </script>
    <?php } ?>

    <?php
    if (isset($contact_status) && $contact_status === "failed") { ?>
        <script>
            swal("Ooops!!", "Failed to send! Please check your inputs or connection and try again!", "error");
        </script>
    <?php } ?>