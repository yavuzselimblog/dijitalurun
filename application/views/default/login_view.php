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
                <h2 class="page-title">Üye Giriş</h2>
                <ul class="page-list">
                    <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                    <li>Üye Giriş</li>
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
            <h2>Giriş Formu</h2>
            <p>Lütfen kayıt esnasında kullandığınız bilgiler ile giriş yapınız...</p>
            <form method="POST" class="contact-form-wrap" id="loginform" onsubmit="return false;">

                
                <div class="single-input-wrap input-group">
                    <label for="inp-0email">E-posta Adresiniz</label>
                    <input name="email" id="inp-0email" type="email" class="form-control" placeholder="E-posta Adresiniz">
                </div>
                <div class="single-input-wrap input-group">
                    <label for="inp-2">Şifreniz</label>
                    <input name="pass" id="inp-2" type="password" class="form-control"
                        placeholder="Şifreniz">
                   
                </div>
                <div class="single-input-wrap input-group">
                    <a href="<?php echo base_url('loginpage/passwordrecovery');?>">Şifremi Unuttum</a>
                </div>
                
                <button onclick="loginbutton();" id="logbutton" class="btn btn-base w-100">GİRİŞ YAPIN</button>

                <hr />
                <a href="<?php echo base_url('loginpage/register');?>">Hesabınız yok mu? Kayıt olmak için tıklayınız.</a>

            </form>
        </div>
    </div>
</div>
</div>
</section>
<!-- policy-page end -->
<?php $this->load->view('default/inc/footer_view');?>