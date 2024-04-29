<?php $this->load->view('default/inc/header_view');?>
  

    <!-- dkt-sitebar-menu start-->
    <?php $this->load->view('default/inc/sidebar_view');?>
    <?php $this->load->view('default/inc/menu_view');?>
    <!-- dkt-sitebar-menu end-->

    <!-- breadcrumb start -->
    <div class="breadcrumb-area" style="background-image:url('<?php echo base_url();?>/default/assets/img/breadcrumb/1.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title text-center">
                            <h2 class="page-title">Bize Ulaşın</h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li>Bize Ulaşın</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact-area start -->
    <section class="contact-page-area pd-top-100 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-wrap text-center">
                        <div class="thumb">
                            <img src="<?php echo base_url();?>/default/assets/img/icon/map-marker.png" alt="img">
                        </div>
                        <h4>Adresimiz</h4>
                        <p><?php echo $setting->adres;?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-wrap text-center">
                        <div class="thumb">
                            <img src="<?php echo base_url();?>/default/assets/img/icon/phone-pad.png" alt="img">
                        </div>
                        <h4>İletişim Numaralarımız</h4>
                        <p><b>Telefon :</b> <?php echo $setting->tel;?></p>
                        <p><b>WhatsApp :</b> <?php echo $setting->whatsapp;?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-wrap text-center">
                        <div class="thumb">
                            <img src="<?php echo base_url();?>/default/assets/img/icon/envelope.png" alt="img">
                        </div>
                        <h4>E-posta Adreslerimiz</h4>
                        <p><b>E-mail : </b><?php echo $setting->mail;?></p>
                        <p><b>E-mail : </b><?php echo $setting->mail;?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area start -->

    <!-- blog-page area start -->
    <section class="contact-form-area bg-sky-blue pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="comment-form">
                        <div class="section-title text-center">
                            <h6>Bize Ulaşın</h6>
                            <h3>İletişim Formu</h3>
                        </div>
                        <form class="contact-form-wrap" id="contactform" onsubmit="return false;">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input type="text" class="form-control" name="name" placeholder="Adınız">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-posta Adresiniz">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Konu">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-edit"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input-wrap input-group">
                                        <textarea class="form-control" rows="4" name="message"
                                            placeholder="Mesajınız"></textarea>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-comments"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-area text-center">
                                        <button type="submit" id="sendbutton" onclick="sendmessage();" class="btn btn-base">MESAJ GÖNDERİN</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-page area end -->
    <?php $this->load->view('default/inc/footer_view');?>
