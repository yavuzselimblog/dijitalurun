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
                            <h2 class="page-title">Blog</h2>
                            <ul class="page-list">
                                <li><a href="<?php echo base_url();?>">Ana Sayfa</a></li>
                                <li>Blog</li>
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


                
                    <?php if($blogcount){ ?>
                    
                    <?php foreach($bloglist as $blog){ ?>

                    <div class="col-md-6 col-lg-6">
                        <div class="single-blog-inner">
                            <div class="thumb">
                                <a href="<?php echo base_url('blog/'.$blog->blogsef);?>">
                                <img src="<?php echo base_url('uploads/'.$blog->blogresim);?>" alt="<?php echo $blog->blogbaslik;?>">
                                </a>
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
                                <h3><a href="<?php echo base_url('blog/'.$blog->blogsef);?>"><?php echo $blog->blogbaslik;?></a></h3>
                                <p><?php echo $blog->blogkisa;?></p>
                                <a class="btn btn-base" href="<?php echo base_url('blog/'.$blog->blogsef);?>">Devamını Oku</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                   

                    <?php }else{
                        alert('Kayıt bulunmuyor','danger');
                    } ?>

            </div>
            <div class="row">
               <?php echo $bloglinks;?>
            </div>
        </div>
    </section>
    <!-- blog-page area end -->
    <?php $this->load->view('default/inc/footer_view');?>

   