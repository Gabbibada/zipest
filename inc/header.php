<?php
require_once('function.php');
?>

<!--========== HEADER ==========-->
<header class="navbar-fixed-top s-header-v2 js__header-sticky">
    <!-- Navbar -->
    <nav class="s-header__navbar">
        <div class="container g-display-table--lg">
            <!-- Navbar Row -->
            <div class="s-header-v2__navbar-row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="s-header-v2__navbar-col">
                    <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                        <span class="s-header-v2__toggle-icon-bar"></span>
                    </button>
                </div>

                <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                    <!-- Logo -->
                    <div class="s-header-v2__logo">
                        <a href="index.php" class="s-header-v2__logo-link">
                            <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="<?php echo SITEURL . '/' ?>img/logo.png" alt="zipest Logo">
                            <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="<?php echo SITEURL . '/' ?>img/logo-dark.png" alt="zipest Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                        <ul class="s-header-v2__nav">
                            <li class="s-header-v2__nav-item"><a class="s-header-v2__nav-link <?php if("index" === $page_name) echo "-is-active"?>" href="<?php echo SITEURL . '/' ?>index.php">Home</a></li>
                            <li class="s-header-v2__nav-item"><a class="s-header-v2__nav-link <?php if("about" === $page_name) echo "-is-active"?>" href="<?php echo VIEWPATH . '/' ?>about.php">About</a></li>
                            <li class="s-header-v2__nav-item"><a class="s-header-v2__nav-link <?php if("services" === $page_name) echo "-is-active"?>" href="<?php echo VIEWPATH . '/' ?>services.php">Services</a></li>
                            <li class="s-header-v2__nav-item"><a class="s-header-v2__nav-link <?php if("gallery" === $page_name) echo "-is-active"?>" href="<?php echo VIEWPATH . '/' ?>gallery.php">Gallery</a></li>
                            <li class="s-header-v2__nav-item"><a class="s-header-v2__nav-link <?php if("map" === $page_name) echo "-is-active"?>" href="<?php echo VIEWPATH . '/' ?>map.php">Find a Station</a></li>                                    
                            <li class="s-header-v2__nav-item"><a class="s-header-v2__nav-link <?php if("contact" === $page_name) echo "-is-active"?>" href="<?php echo VIEWPATH . '/' ?>contacts.php">Contacts</a></li>

                        </ul>
                    </div>
                    <!-- End Nav Menu -->
                </div>
            </div>
            <!-- End Navbar Row -->
        </div>
    </nav>
    <!-- End Navbar -->
</header>
<!--========== END HEADER ==========-->