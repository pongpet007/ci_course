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
                            <a href="<?=base_url()?>"><img src="<?=base_url() ?>assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
<<<<<<< HEAD
                                    <li><a href="index.html">
                        <?php echo lang("home"); ?>
                                    </a></li>
                                    <li><a href="shop.html">
                        <?php echo lang("shop"); ?>
                                    </a></li>
                                    <li><a href="about.html">
                        <?php echo lang("about"); ?>
                                    </a></li>
                                    <li><a href="contact.html">
                        <?php echo lang("contact"); ?>
=======
                                    <li><a href="<?=base_url()?>">
                        <? echo lang("home")  ?>
                                    </a></li>
                                    <li><a href="<?=base_url("Home/Products")?>">
                        <? echo lang("shop")  ?>
                                    </a></li>
                                    <li><a href="<?=base_url("Home/Aboutus")?>">
                        <? echo lang("about")  ?>
                                    </a></li>
                                    <li><a href="<?=base_url("Home/Contactus")?>">
                        <? echo lang("contact")  ?>
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
                                    </a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
<style type="text/css">
    .lang a{
        color : black;
    }
    .lang a:hover{
        color: orange;
    }
</style>                        
                        <div class="header-right">
                            <ul>
                                <li class="lang">
<<<<<<< HEAD
                                    <?php if($lang=='TH'){ ?>
                                        <a href="<?php echo base_url("SwitchLanguage/changeTo/EN"); ?>">
                                            change to <img src="<?=base_url("assets/GB.png")?>">
                                        </a>
                                    <?php }else{ ?>
                                        <a href="<?php echo base_url("SwitchLanguage/changeTo/TH"); ?>">
                                        เปลี่ยนภาษา <img src="<?=base_url("assets/TH.png")?>">
                                        </a>
                                    <?php } ?>
=======
       
        <?php 

        if($lang=='TH'){ ?> 
            <a href="javascript: changelange('EN');">
                change to  <img src="<?=base_url("assets/GB.png")?>">
            </a>
        <?php }else{ ?>
            <a href="javascript: changelange('TH');">
                เปลี่ยนภาษา <img src="<?=base_url("assets/TH.png")?>">
            </a>
        <?php } ?>
       
>>>>>>> 2e03fc296159b1f04f5aeb9670595fda4b9909fd
                                </li>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                                <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                                <li><a href="<?=base_url("WebCart") ?>"><span class="flaticon-shopping-cart" style="padding-right:0px;"></span> <b style="font-size:11px;">(<?=$this->cart->total_items() ?>)</b> </a> </li>
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