 <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?=base_url() ?>assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?=base_url() ?>assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.html">
                        <?=$lang=='TH'?'หน้าแรก':'Home'?>
                                    </a></li>
                                    <li><a href="shop.html">
                        <?=$lang=='TH'?'สินค้าในร้าน':'Shop'?>
                                    </a></li>
                                    <li><a href="about.html">
                        <?=$lang=='TH'?'เกี่ยวกับเรา':'About'?>
                                    </a></li>
                                    <li><a href="contact.html">
                        <?=$lang=='TH'?'ติดต่อเรา':'Contact'?>
                                    </a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <a href="">
                                    <?php if($lang=='TH'){ ?>
                                        <img src="<?=base_url("assets/TH.png")?>">
                                    <?php }else{ ?>
                                        <img src="<?=base_url("assets/GB.png")?>">
                                    <?php } ?>
                                    </a>
                                </li>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                                <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>