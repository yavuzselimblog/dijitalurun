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
                <h2 class="page-title">Şifremi Unuttum</h2>
                <ul class="page-list">
                    <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                    <li>Şifremi Unuttum</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- breadcrumb end -->

<!-- policy-page start -->
<section class="pd-top-100 pd-bottom-100 bg-sky-blue">
<div class="container">
<div class="row justify-content-center">
    <div class="col-xl-7 col-lg-10 text-center">
        <div class="sign-in-area">
            <h2>Şifremi Unuttum</h2>
            <p>Lütfen kayıt esnasında kullandığınız e-posta adresi ile şifrenizi sıfırlayınız...</p>
            <form method="POST" class="contact-form-wrap" id="recoveryform" onsubmit="return false;">

                
                <div class="single-input-wrap input-group">
                    <label for="inp-0email">E-posta Adresiniz</label>
                    <input name="email" id="inp-0email" type="email" class="form-control" placeholder="E-posta Adresiniz">
                </div>
                
                <button onclick="recbuttons();" id="recbutton" class="btn btn-base w-100">SIFIRLAMA BAĞLANTISINI GÖNDER</button>

                <hr />
                <a href="<?php echo base_url('loginpage');?>">Şifrenizi hatırladıysanız giriş yapabilirsiniz.</a>

            </form>
        </div>
    </div>
</div>
</div>
</section>
<!-- policy-page end -->
<?php $this->load->view('default/inc/footer_view');?>