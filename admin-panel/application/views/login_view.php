<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo $setting->site_baslik;?> | Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/src/assets/img/favicon.ico"/>
    <link href="<?php echo base_url();?>/assets/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>/assets/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>/assets/layouts/vertical-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>/assets/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>/assets/src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url();?>/assets/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>/assets/src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>/assets/sweetalert/sweetalert2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                        
                    <div class="auth-cover">
    
                        <div class="position-relative">
    
                            <img src="<?php echo base_url();?>/assets/src/assets/img/auth-cover.svg" alt="auth-img">
    
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Admin Paneli</h2>
                            <p class="text-white px-2"><?php echo $setting->site_baslik;?></p>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <form id="adminloginform" action="" method="POST" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Giriş Formu</h2>
                                    <p>Lütfen sistemde kayıtlı bilgileriniz ile giriş yapınız...</p>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">E-posta Adresiniz</label>
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Şifreniz</label>
                                        <input name="pass" type="password" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button id="loginbuttons" onclick="adminlogin()" class="loginbuttons btn btn-secondary w-100">GİRİŞ YAP</button>
                                    </div>
                                </div>
                                
                               
                                
                               
                                
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url();?>/assets/vendor.js?v=1"></script>
    <script src="<?php echo base_url();?>/assets/sweetalert/sweetalert2.min.js"></script>
    <script src="<?php echo base_url();?>/assets/admin.js?v=1"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>