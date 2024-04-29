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
                            <h2 class="page-title"><?php echo $product->urun_adi;?></h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li>Sipariş Tamamla</li>
                              
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
                        <div class="thumb">
                     
                            
                            <img src="<?php echo base_url('uploads/'.$product->urun_resim);?>" alt="<?php echo $product->urun_adi;?>">
                      
                     
                        </div>
                        <div class="single-product-details">
                            <h4><a href="#"><?php echo $product->urun_adi;?></a></h4>
                            <p><?php echo $product->urun_kisa;?></p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">

                    <form action="" id="orderform" method="POST" onsubmit="return false;">
                    <input type="hidden" name="pcode" value="<?php echo $product->urun_kodu;?>"/>
                        <div class="sidebar-area">
                            <div class="widget widget-cart">
                                <div class="widget-cart-inner text-center">
                                    <h3 class="price mb-4"><?php echo $product->urun_fiyat.'₺';?></h3>
                                    <label for="note"><b>Ödeme Yöntemi</b></label>
                                    <ul>
                                        <li></i><input id="eft" type="radio" name="payment" value="eft" /> <label for="eft">Havale/EFT</label</li>
                                        <li></i><input id="card" type="radio" name="payment" value="card" /> <label for="card">Kredi Kartı</label></li>
                                    </ul>

                                    <label for="note"><b>Sipariş Notu</b></label>
                                    <textarea class="form-control mb-4" name="note" id="note" placeholder="Sipariş notunuz varsa iletiniz..."></textarea>
                                    
                                    <button id="savebutton" onclick="ordersave();" type="submit" class="btn btn-base">Satın Al</a>
                                </div>
                            </div>
                        

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>
    <!-- product-details area end -->

    <!-- product-slider area end -->
    <?php $this->load->view('default/inc/footer_view');?>