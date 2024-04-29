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
                            <h2 class="page-title">Siparişiniz Alındı</h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li>Siparişiniz Alındı</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- error-page area start -->
    <section class="error-page-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">


                    <div class="error-inner text-center">
                        <img src="<?php echo base_url('uploads/success.png');?>" alt="success" width="200" height="200">
                        <h2>Siparişiniz başarıyla tamamlandı</h2>
                        <p>Siparişinizi aldık en kısa sürede siparişinizi tamamlayıp tarafınıza bilgi vereceğiz. Bizi tercih ettiğiniz için teşekkür ederiz.
                         Havale/EFT siparişleriniz için lütfen aşağıda yer alan banka adreslerimizden birine sipariş ücretini iletiniz...    
                        </span></p>
                        <a class="btn btn-base mb-4" href="#">Siparişlerime Git</a>
                    </div>
                    <?php if($banks){ ?>
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Banka Adı</th>
                                    <th>Banka Hesap No</th>
                                    <th>Banka Şube</th>
                                    <th>Banka IBAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   foreach($banks as $bank){
                                     ?>
                                        <tr>
                                            <td><?php echo $bank->bankaadi;?></td>
                                            <td><?php echo $bank->bankahesap;?></td>
                                            <td><?php echo $bank->bankasube;?></td>
                                            <td><?php echo $bank->bankaiban;?></td>
                                        </tr>
                                     <?php 
                                   }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <?php } ?>
                  
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- error-page area end -->
    <?php $this->load->view('default/inc/footer_view');?>
