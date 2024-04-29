<div class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#dkt_main_menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo-h1" href="<?php echo base_url();?>">
                    <img width="170" height="50" src="<?php echo base_url('uploads/'.$setting->site_logo);?>" alt="<?php echo $setting->site_baslik;?>">
                    </a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="btn btn-base" href="#">Sign Up</a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav menu-open">
                        <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                        <li><a href="<?php echo base_url('products');?>">Ürünlerimiz</a></li>
                        <li><a href="<?php echo base_url('blogs');?>">Blog</a></li>
                        <li><a href="<?php echo base_url('pages/contact');?>">Bize Ulaşın</a></li>
                        
                        <?php if(!@ss('userlogin')){?>
                        <li><a href="<?php echo base_url('loginpage');?>">Giriş/Kayıt</a></li>
                        <?php }else{ ?>

                        <li class="menu-item-has-children current-menu-item">
                            <a href="#"><i class="far fa-user"></i> <?php echo @ss('username');?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('profile');?>">Profilim</a></li>
                                <li><a href="javascript:void(0);" onclick="return logout();">Çıkış Yap</a></li>
                            </ul>
                        </li>

                        <?php } ?>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        
                        <li><a class="search" href="#"><img src="<?php echo base_url();?>/default/assets/img/icon/1.png" alt="icon"></a></li>
                        <li class="menu-bar dropdown-menu-btn"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>