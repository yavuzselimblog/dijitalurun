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
                    <h2 class="page-title">Siparişlerim</h2>
                    <ul class="page-list">
                        <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                        <li><a href="#">Siparişlerim</a></li>
                        
                        
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
                    <h4  class="mb-4"><a href="#">Siparişlerim (<?php echo $ordercount;?>)</a></h4>
                    
                    <?php if($ordercount > 0){ ?>
                    <div class="table table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>SİPARİŞ NO</th>
                                <th>TUTAR</th>
                                <th>TARİH</th>
                                <th>DURUM</th>
                                <th>İŞLEM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($orderlist as $row){ 
                                    if($row->sipdurum == 'beklemede'){
                                        $sipstat = '<span class="badge badge-warning">Beklemede</span>';
                                    }else if($row->sipdurum == 'iptal'){
                                        $sipstat = '<span class="badge badge-danger">İptal edildi</span>';
                                    }else if($row->sipdurum == 'tamamlandi'){
                                        $sipstat = '<span class="badge badge-success">Sipariş tamamlandı</span>';
                                    }
                                    ?>
                                    
                                    <tr>
                                        <td><a href='<?php echo base_url('orderdetail/'.$row->sipno);?>'>#<?php echo $row->sipno;?></a></td>
                                        <td><?php echo $row->siptutar;?>₺</td>
                                        <td><?php echo sdate($row->siptarih,true);?></td>
                                        <td><?php echo $sipstat;?></td>
                                        <td><a style="height:20px!important;line-height:20px!important" href='<?php echo base_url('orderdetail/'.$row->sipno);?>' class='btn btn-base btn-xs'>Görüntüle</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                  
                    <?php }else{
                        alert('Kayıt bulunmuyor','danger');
                    } ?>


                </div>

            </div>

            

            <div class="row float-right">
            <?php echo $orderlinks;?>
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