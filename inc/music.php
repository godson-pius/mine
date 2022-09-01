<?php

    $fetch_all_tracks = fetch_all("tracks", "track_id");
    
    if ($fetch_all_tracks) {
        $tracks = $fetch_all_tracks;
    }

 ?>
<!--==================================
 MUSIC SECTION
==================================-->
            <div id="music" class="popup-section blog-section">
                
                <!-- CLOSE BUTTON -->
                <div class="close-section">
                    <a href="#" class="button button-icon color-button-white fs-30 border-op-light-2 radius-full"><i class="pe-7s-close"></i></a>
                </div>

                <div class="inner-section animated" data-anim-in="fadeIn" data-anim-out="fadeOut">
                    <div class="container">
                        
                        <div class="section-heading-wrapper align-center margin-b-60 width-px-700 margin-auto typo-light" data-ckav-smd="width-100">
                            <h2 class="heading-section text-upper default bold-900 animated" data-anim-in="fadeInUp" data-ckav-smd="medium">Recent Music</h2>
                            <p class="heading-section-sub small margin-b-0 animated" data-anim-in="fadeInUp|0.1" data-ckav-smd="mini">
                                Here you can directly download my recent songs. Listen to them with your spirit, open to be blessed.
                            </p>
                        </div>

                        <div class="carousel-widget carouselnav-1 large width-90 margin-auto animated" data-anim-in="fadeIn|0.1" data-ckav-smd="width-100 align-center" 
                        data-carousel-items="1"
                        data-carousel-itemrange="0,1|420,1|600,2|768,3|992,3|1200,3"
                        data-carousel-autoplay="true" 
                        data-carousel-margin="30" 
                        data-carousel-loop="false"
                        data-carousel-nav="true"
                        data-carousel-dots="true"
                        data-carousel-center="false">
                            <div class="owl-carousel">
                                
                                <?php  // Looping through the audios...
                                    if (isset($tracks)) {
                                        foreach ($tracks as $track) {
                                            extract($track); ?>

                                                <!-- ITEM -->
                                                <div class="item">
                                                    <div class="inneritem">

                                                        <div class="image-infobox image-infobox-01 space-default medium align-left color-border-default radius-4 animated fadeInUp" data-animate="fadeInUp|0.2">
                                                            <div class="image flex-bc typo-light align-center" data-bg-image="admin/TrackImages/<?= $track_image; ?>">
                                                                <div class="image-content">
                                                                    <h3 class="imgbox-title heading-content mini bold-700 text-upper"><?= $track_title; ?></h3>
                                                                </div>
                                                                <div class="image-overlay" data-bg-color="rgba(0,0,0,0.5)" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                                                            </div>
                                                            <div class="text bgcolor-white shadow-01 align-center">
                                                                <p>
                                                                    <?= $track_desc; ?>
                                                                </p>
                                                                <audio src="admin/Tracks/<?= $track_path; ?>" controls style="width: 100%"></audio>
                                                                <a href="admin/Tracks/<?= $track_path; ?>" download="" class="button color-button-default button-mini solid radius-10">Download</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                <?php } } ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ======= END : MUSIC SECTION =======  -->