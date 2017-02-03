<?php
require_once('../path.php');
$page_name = "services";
?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 Bada Gabriel. This project is created by Boemax. Modify it under the terms provided by us
-->
<html  lang="en" class="no-js">

    <?php include INCPATH . '/head.php'; ?>

    <body>

        <?php include INCPATH . '/header.php'; ?>
          
        <!--========== PROMO BLOCK ==========-->
        <section class="s-video-v2__bg" data-vidbg-bg="mp4: include/media/mp4_video.mp4, webm: include/media/webm_video.webm, poster: include/media/fallback.jpg" data-vidbg-options="loop: true, muted: true, overlay: false">
            <div class="container g-position--overlay g-text-center--xs">
                <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                    <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-font-size-90--lg g-color--white">At ZIPEST,</h1>
                    <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">It is cheapest and the fullest.</h2>
                </div>
            </div>
        </section>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Mockup -->
        <div class="container g-margin-t-o-150--xs">
            <div class="center-block s-mockup-v1">
                <img class="img-responsive" src="../img/mockups/devices-01.png" alt="ZIPEST Gas">
            </div>
        </div>
        <!-- End Mockup -->

        <!-- Products -->
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row g-margin-b-30--xs">
                <div class="col-sm-4">
                    <div class="g-margin-t-20--md g-margin-b-40--xs">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">OUR PRODUCTS & SERVICES</p>
                        <h2 class="g-font-size-32--xs g-font-size-36--md">Services</h2>
                        <p>We offer the following services at <br> ZIPEST Ventures Limited.</p>
                    </div>
                </div>

                <div class="col-sm-8">
                    <!-- Portfolio Gallery -->
                    <div id="js__grid-portfolio-gallery" class="s-portfolio__paginations-v1 cbp">
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item motion graphic">
                            <div class="s-portfolio__img-effect">
                                <img src="../img/970x647/03.jpg" alt="zipest cooking gas">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h3 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Cooking GAs</h3>
                                    <p class="g-color--white-opacity">by ZIPEST</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item logos graphic">
                            <div class="s-portfolio__img-effect">
                                <img src="../img/970x647/04.jpg" alt="zipest oil">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Lubricants</h4>
                                    <p class="g-color--white-opacity">by ZIPEST</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item logos motion">
                            <div class="s-portfolio__img-effect">
                                <img src="../img/970x647/05.jpg" alt="zipest ice">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Ice Block</h4>
                                    <p class="g-color--white-opacity">by ZIPEST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Gallery -->
                </div>
            </div>
        </div>
        <!-- End products -->
       
        <!--========== END PAGE CONTENT ==========-->
        
        <?php include INCPATH . '/footer.php'; ?>
        
        <?php include INCPATH . '/scripts.php'; ?>

    </body>
</html>


