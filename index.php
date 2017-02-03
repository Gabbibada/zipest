<?php
require_once('path.php');
$page_name = "index";
?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 Bada Gabriel. This project is created by Boemax. Modify it under the terms provided by us
-->
<html  lang="en" class="no-js">
    
    <?php include INCPATH . '/head.php'; ?>
    
    <body>
        
        <?php include INCPATH . '/header.php'; ?>

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php echo SITEURL . '/' ?>img/1920x1080/02.jpg');">
                    <div class="container  g-text-center--xs g-ver-center--xs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-margin-b-50--xs">
                                    <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-60--md g-color--white">At ZIPEST<br>it is cheapest and the fullest</h1>
                                    <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">In other words, ZIPEST Ventures Limited sells her products at very reasonable rates/prices.</p>
                                </div>
                                <a href="about.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('<?php echo SITEURL . '/' ?>img/1920x1080/01.jpg');">
                    <div class="container  g-text-center--xs g-ver-center--xs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-margin-b-50--xs">
                                    <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--white">Excellent<br>Customer Care</h2>
                                    <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">We give high priority to our customers and provide excellent services in meeting their needs.</p>
                                </div>
                                <a href="about.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
        </div>
        <!--========== END SWIPER SLIDER ==========-->        

        <?php include INCPATH . '/scripts.php'; ?>
        
    </body>
</html>


