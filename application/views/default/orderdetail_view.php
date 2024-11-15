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
                            <h2 class="page-title">Sipariş Detayı</h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li><a href="#">Sipariş Detayı</a></li>
                               
                              
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
                            <div class="card">
                            <div class="card-header">
                            Sipariş Detayı
                            <strong><?php echo sdate($order->siptarih,true);?></strong> 
                            <span class="float-right"> <strong>Durum:</strong> <?php echo $order->sipdurum;?></span>

                            </div>
                            <div class="card-body">
                            <div class="row mb-4">
                            <div class="col-sm-6">
                            <h6 class="mb-3">Satıcı:</h6>
                            <div>
                            <strong><?php echo $setting->site_baslik;?></strong>
                            </div>
                            <div><?php echo $setting->adres;?></div>
                            <div>E-posta: <?php echo $setting->mail;?></div>
                            <div>Telefon: <?php echo $setting->tel;?></div>
                            </div>

                            <div class="col-sm-6">
                            <h6 class="mb-3">Alıcı:</h6>
                            <div>
                            <strong><?php echo $user->uye_adi.' '.$user->uye_soyadi;?></strong>
                            </div>
                            <div>Dijital Ürün</div>
                            <div>E-posta: <?php echo $user->uye_mail;?></div>
                            <div>Telefon: <?php echo $user->uye_tel;?></div>
                            </div>



                            </div>

                            <div class="table-responsive-sm">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                            <th>Resim</th>
                            <th>Ürün Adı</th>

                            <th class="right">Fiyat</th>
                            <th class="center">Adet</th>
                            <th class="right">Toplam</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo base_url('./uploads/'.$product->urun_resim);?>" width="80" height="80" alt="Dijital ürün" /></td>
                                    <td><?php echo $product->urun_adi;?></td>
                                    <td><?php echo $product->urun_fiyat.'₺';?></td>
                                    <td>1</td>
                                    <td><?php echo $product->urun_fiyat.'₺';?></td>
                                </tr>
                            </tbody>
                            </table>
                            </div>

                            <div class="row">
                            <div class="col-lg-6 col-sm-5">
                                <?php if($order->sipdurum == 'tamamlandi'){ ?>
                                    <h4>Sipariş Detayı</h4>
                                    <?php  if(!$order->siparissonrasi){ ?>
                                        <p><b>Ürünü indirme linkiniz:</b><a target="_blank" href='<?php echo $product->urun_indirmelink;?>'><?php echo $product->urun_indirmelink;?></a></p>
                                    <?php }else{ ?>
                                        <?php echo $order->siparissonrasi;?>
                                    <?php } ?>
                                <?php } ?>
                            </div>

                            <div class="col-lg-5 col-sm-5 ml-auto">
                            <table class="table table-clear">
                            <tbody>
                            <tr>
                            <td class="left">
                            <strong>Toplam</strong>
                            </td>
                            <td class="right">
                            <strong><?php echo $order->siptutar;?>₺</strong>
                            </td>
                            </tr>
                            </tbody>
                            </table>

                            </div>

                            </div>

                            </div>
                            </div>


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