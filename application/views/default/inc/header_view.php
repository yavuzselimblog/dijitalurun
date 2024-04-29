<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $setting->site_baslik;?></title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>/default/assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/default/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/default/assets/css/fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/default/assets/css/style.css?v=123456">
    <link rel="stylesheet" href="<?php echo base_url();?>/default/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/default/assets/sweetalert/sweetalert2.css">
    <link rel="icon" href="<?php echo base_url('uploads/'.$setting->site_favicon);?>" />
</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

      <!-- search popup start-->
      <div class="body-overlay" id="body-overlay"></div>
        <div class="td-search-popup" id="td-search-popup">
        <form action="<?php echo base_url('products/search');?>" class="search-form">
            <div class="form-group">
                <input type="text" name="search_term1" class="form-control" placeholder="Ürün aramak için lütfen kelime giriniz.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- dkt-sitebar-menu end-->