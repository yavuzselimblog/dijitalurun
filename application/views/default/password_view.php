<?php $this->load->view('default/inc/header_view');?>
  

    <!-- dkt-sitebar-menu start-->
    <?php $this->load->view('default/inc/sidebar_view');?>
    <!-- dkt-sitebar-menu end-->

    <!-- navbar start -->
    <?php $this->load->view('default/inc/menu_view');?>
    <!-- navbar end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-area" style="background-image:url('<?php echo base_url();?>/default/assets/img/breadcrumb/1.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title text-center">
                            <h2 class="page-title">Şifremi Değiştir</h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li><a href="#">Şifremi Değiştir</a></li>
                               
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- product-details area start -->
    <section class="product-details pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-product-wrap mb-4">
                        <div class="single-product-details">
                            <h4><a href="#">Şifremi Değiştir</a></h4>
                            <p class="mb-4">Şifre Güncelleme Formu</p>

                            <form class="contact-form-wrap" id="passform" onsubmit="return false;">
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input  type="password" class="form-control" name="pass1" placeholder="Yeni şifreniz">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input  type="password" class="form-control" name="pass2" placeholder="Yeni şifreniz tekrar">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit-area text-center">
                                     <button type="submit" id="sendbutton" onclick="passwordupdate();" class="btn btn-base">Şifremi Güncelle</button>
                                </div>
                                
                             

                            </div>
                        </form>


                        </div>
                    </div>

                    
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area">
                        <div class="widget widget-cart">
                            <div class="widget-cart-inner text-center">
                              
                                <ul>
                                    <li><a href="<?php echo base_url('orders');?>"><i class="fa fa-shopping-cart"></i>Siparişlerim</a></li>
                                    <li><a href="<?php echo base_url('profile');?>"><i class="fa fa-eye"></i>Profilim</a></li>
                                    <li><a href="<?php echo base_url('password');?>"><i class="fa fa-lock"></i>Şifremi Değiştir</a></li>
                                </ul>
                                <a href="javascript:void(0);" onclick="return logout();" class="btn btn-base">Çıkış Yap</a>
                            </div>
                        </div>
                     

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details area end -->

    <!-- product-slider area end -->
    <?php $this->load->view('default/inc/footer_view');?>