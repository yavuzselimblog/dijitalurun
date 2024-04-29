
    <!-- footer area start -->
    <footer class="footer-area pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_contact">
                        <h4 class="widget-title">Bize Ulaşın</h4>
                        <div class="media">
                            <div class="thumb">
                                <img width="20" height="25" src="<?php echo base_url();?>/default/assets/img/footer/1.png" alt="<?php echo $setting->site_baslik;?>">
                            </div>
                            <div class="media-body">
                                <p><?php echo $setting->adres;?></p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="thumb mt-0">
                                <img width="20" height="20" src="<?php echo base_url();?>/default/assets/img/footer/2.png" alt="<?php echo $setting->site_baslik;?>">
                            </div>
                            <div class="media-body">
                                <p class="m-0"><?php echo $setting->mail;?></p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="thumb mt-0">
                                <img width="22" height="27"  src="<?php echo base_url();?>/default/assets/img/footer/3.png" alt="<?php echo $setting->site_baslik;?>">
                            </div>
                            <div class="media-body">
                                <p class="m-0"><?php echo $setting->tel;?></p>
                            </div>
                        </div>
                        <ul class="social-area">
                            <?php if($social){
                                foreach($social as $soc){
                                    ?>
                                    <li><a target="_blank" rel="nofollow" title="<?php echo $soc->sosbaslik;?>" href="<?php echo $soc->soslink;?>"><?php echo $soc->sosikon;?></a></li>
                                    <?php 
                                }
                            }
                            ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">Kurumsal</h4>
                        <?php if($pages){?>
                        <ul>
                            <?php foreach($pages as $page){ ?>
                            <li><a href="<?php echo base_url('page/'.$page->sayfasef);?>"><?php echo $page->sayfaadi;?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget widget_products">
                        <h4 class="widget-title">Popüler Ürünler</h4>
                        <?php if($popular){ ?>
                        <ul>
                            <?php foreach($popular as $pop){ ?>
                            <li><a href="<?php echo base_url('products/detail/'.$pop->urun_sef.'/'.$pop->urun_kodu);?>"><?php echo $pop->urun_adi;?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget widget_news">
                        <h4 class="widget-title">Popüler Yazılar</h4>
                       
                        <?php if($popblog){ ?>
                      
                            <?php foreach($popblog as $pblog){ ?>
                                <div class="widget-news-wrap">
                                    <div class="date"><?php echo sdate($pblog->blogtarih,true);?></div>
                                    <p><a href="<?php echo base_url('blog/'.$pblog->blogsef);?>"><?php echo $pblog->blogbaslik;?></a></p>
                                </div>
                            <?php } ?>
                    
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom-->
        <div class="container">
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><?php echo $setting->site_footer;?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="<?php echo base_url();?>/default/assets/js/vendor.js"></script>
    <!-- main js <?php echo base_url();?>/default/ -->
    <script src="<?php echo base_url();?>/default/assets/js/main.js"></script>
    <script src="<?php echo base_url();?>/default/assets/js/custom.js?v=<?php echo time();?>"></script>
    <script src="<?php echo base_url();?>/default/assets/sweetalert/sweetalert2.min.js"></script>
</body>

</html>