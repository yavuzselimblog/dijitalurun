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
                            <h2 class="page-title">Hata oluştı</h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li>Siparişiniz esnasında hata oluştu</li>
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
                        <img src="<?php echo base_url('uploads/error.png');?>" alt="success" width="200" height="200">
                        <h2>Siparişiniz esnasında hata oluştu</h2>
                        <p>Siparişiniz tamamlanamadı. Lütfen yönetici ile iletişime geçiniz ya da siparişiniz tekrarlayınız...</span></p>
                        <a class="btn btn-base" href="#">Siparişlerime Git</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error-page area end -->
    <?php $this->load->view('default/inc/footer_view');?>
