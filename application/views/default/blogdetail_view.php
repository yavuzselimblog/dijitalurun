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
                            <h2 class="page-title"><?php echo $blog->blogbaslik;?></h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li><?php echo $blog->blogbaslik;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog-page area start -->
    <section class="blog-page-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="blog-details-page-inner">
                        <div class="single-blog-inner m-0">
                            <div class="thumb">
                                <img width="770" height="470" src="<?php echo base_url('uploads/'.$blog->blogickapak);?>" alt="<?php echo $blog->blogbaslik;?>">
                            </div>
                            <div class="single-blog-details">
                                <div class="meta">
                                    <span class="author">
                                        <i class="far fa-user"></i>
                                        admin
                                    </span>
                                    <span class="date">
                                        <i class="far fa-calendar-alt"></i>
                                        <?php echo sdate($blog->blogtarih,true);?>
                                    </span>
                                    <span class="date">
                                        <i class="far fa-eye"></i>
                                        <?php echo $blog->bloggoruntulenme;?>
                                    </span>
                                 
                                </div>
                                <h3><?php echo $blog->blogbaslik;?></h3>
                                <?php echo $blog->blogicerik;?>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- blog-page area end -->

    <?php $this->load->view('default/inc/footer_view');?>
 