<?php

    $fetch_all_projects = fetch_all("projects", "id");
    
    if ($fetch_all_projects) {
        $projects = $fetch_all_projects;
    }

 ?>
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
                        <div class="section-heading-wrapper align-center margin-b-60 width-px-700 margin-auto typo-light" data-ckav-smd="width-100">
                            <h2 class="heading-section text-upper default bold-900 animated" data-anim-in="fadeInUp" data-ckav-smd="medium">Recent Projects</h2>
                            <p class="heading-section-sub small margin-b-0 animated" data-anim-in="fadeInUp|0.1" data-ckav-smd="mini">
                                Here you can view my amazing projects.
                            </p>
                        </div>
                        
                        <div class="portfolio-widget grid-portfolio portfolio-row grid-03" data-zoom-gallery="yes" data-ckav-md="grid-02" data-ckav-sm="grid-01">

                            <?php // Start looping through the project table...
                                if (isset($projects)) {
                                    foreach ($projects as $project) {
                                        extract($project); ?>

                                            <div class="portfolio-col animated mb-2" data-anim-in="fadeInUp|0.1">
                                                <figure class="hover-box hover-box-01">
                                                    
                                                    <!-- OVERLAY -->
                                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                                        <div class="info-text text-center">
                                                            <a href="admin/ProjectImages/<?= $project_image; ?>" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                                            <a href="<?= $project_url; ?>" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?= $project_title; ?></h3>
                                                            <p class="mr-0 fs12 op-08"><?= $project_desc; ?></p>
                                                        </div>
                                                    </div>
                    
                                                    <!-- IMAGE -->
                                                    <img src="admin/ProjectImages/<?= $project_image; ?>" alt="portfolio image">
                    
                                                </figure>
                                            </div>

                            <?php } } ?> <!-- End of loop -->
    
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : PORTFOLIO SECTION =======  -->