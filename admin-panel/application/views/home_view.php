<?php $this->load->view('inc/adminheader_view');?>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

           <?php $this->load->view('inc/adminnav_view');?>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">                    
                                        
                    <div class="row layout-top-spacing">

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                            <div class="widget widget-t-sales-widget widget-m-orders">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                    <div class="media-body">
                                        <p class="widget-text">Siparişler</p>
                                        <p class="widget-numeric-value">24,017</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                            <div class="widget widget-t-sales-widget widget-m-customers">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <div class="media-body">
                                        <p class="widget-text">Müşteriler</p>
                                        <p class="widget-numeric-value">92,251</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                            <div class="widget widget-t-sales-widget widget-m-sales">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                    </div>
                                    <div class="media-body">
                                        <p class="widget-text">Ürünler</p>
                                        <p class="widget-numeric-value">98,225</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    

                      

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                            <div class="widget widget-t-sales-widget widget-m-income">
                                <div class="media">
                                    <div class="icon ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    </div>
                                    <div class="media-body">
                                        <p class="widget-text">Mesajlar</p>
                                        <p class="widget-numeric-value">9.5 M</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    
                        
    
    
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    
                            <div class="widget widget-wallet-one">

                                <div class="wallet-info text-center mb-3">

                                    <p class="wallet-title mb-3">Bu Ayın Geliri</p>
                                    
                                    <p class="total-amount mb-3">$ 26,177.88</p>
    
                                    <a href="#" class="wallet-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up me-2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg> 
                                    Geçen aya oranla %6 yükselişte</a>

                                </div>
    
                                <button class="btn btn-secondary w-100 mt-3">Tüm Siparişleri Görüntüle</button>
                                
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-table-two">
    
                                <div class="widget-heading">
                                    <h5 class="">Son 10 Sipariş</h5>
                                </div>
    
                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><div class="th-content">Customer</div></th>
                                                    <th><div class="th-content">Product</div></th>
                                                    <th><div class="th-content">Invoice</div></th>
                                                    <th><div class="th-content th-heading">Price</div></th>
                                                    <th><div class="th-content">Status</div></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><div class="td-content customer-name"><img src="../src/assets/img/profile-13.jpeg" alt="avatar"><span>Luke Ivory</span></div></td>
                                                    <td><div class="td-content product-brand text-primary">Headphone</div></td>
                                                    <td><div class="td-content product-invoice">#46894</div></td>
                                                    <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                                                    <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><div class="td-content customer-name"><img src="../src/assets/img/profile-7.jpeg" alt="avatar"><span>Andy King</span></div></td>
                                                    <td><div class="td-content product-brand text-warning">Nike Sport</div></td>
                                                    <td><div class="td-content product-invoice">#76894</div></td>
                                                    <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                                    <td><div class="td-content"><span class="badge badge-primary">Shipped</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content customer-name"><img src="../src/assets/img/profile-10.jpeg" alt="avatar"><span>Laurie Fox</span></div></td>
                                                    <td><div class="td-content product-brand text-danger">Sunglasses</div></td>
                                                    <td><div class="td-content product-invoice">#66894</div></td>
                                                    <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                                                    <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                                                </tr>                                            
                                                <tr>
                                                    <td><div class="td-content customer-name"><img src="../src/assets/img/profile-5.jpeg" alt="avatar"><span>Ryan Collins</span></div></td>
                                                    <td><div class="td-content product-brand text-warning">Sport</div></td>
                                                    <td><div class="td-content product-invoice">#89891</div></td>
                                                    <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                                                    <td><div class="td-content"><span class="badge badge-primary">Shipped</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content customer-name"><img src="../src/assets/img/profile-4.jpeg" alt="avatar"><span>Irene Collins</span></div></td>
                                                    <td><div class="td-content product-brand text-primary">Speakers</div></td>
                                                    <td><div class="td-content product-invoice">#75844</div></td>
                                                    <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                                                    <td><div class="td-content"><span class="badge badge-danger">Pending</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content customer-name"><img src="../src/assets/img/profile-11.jpeg" alt="avatar"><span>Sonia Shaw</span></div></td>
                                                    <td><div class="td-content product-brand text-danger">Watch</div></td>
                                                    <td><div class="td-content product-invoice">#76844</div></td>
                                                    <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                                                    <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-table-three">
    
                                <div class="widget-heading">
                                    <h5 class="">Son Kayıt Olan 10 Müşteri</h5>
                                </div>
    
                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table class="table table-scroll">
                                            <thead>
                                                <tr>
                                                    <th><div class="th-content">Product</div></th>
                                                    <th><div class="th-content th-heading">Price</div></th>
                                                    <th><div class="th-content th-heading">Discount</div></th>
                                                    <th><div class="th-content">Sold</div></th>
                                                    <th><div class="th-content">Source</div></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><div class="td-content product-name"><img src="../src/assets/img/product-headphones.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Headphone</p><p class="prd-category text-primary">Digital</p></div></div></td>
                                                    <td><div class="td-content"><span class="pricing">$168.09</span></div></td>
                                                    <td><div class="td-content"><span class="discount-pricing">$60.09</span></div></td>
                                                    <td><div class="td-content">170</div></td>
                                                    <td><div class="td-content"><a href="javascript:void(0);" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Direct</a></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content product-name"><img src="../src/assets/img/product-shoes.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Shoes</p><p class="prd-category text-warning">Faishon</p></div></div></td>
                                                    <td><div class="td-content"><span class="pricing">$108.09</span></div></td>
                                                    <td><div class="td-content"><span class="discount-pricing">$47.09</span></div></td>
                                                    <td><div class="td-content">130</div></td>
                                                    <td><div class="td-content"><a href="javascript:void(0);" class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Google</a></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content product-name"><img src="../src/assets/img/product-watch.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Watch</p><p class="prd-category text-danger">Accessories</p></div></div></td>
                                                    <td><div class="td-content"><span class="pricing">$88.00</span></div></td>
                                                    <td><div class="td-content"><span class="discount-pricing">$20.00</span></div></td>
                                                    <td><div class="td-content">66</div></td>
                                                    <td><div class="td-content"><a href="javascript:void(0);" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Ads</a></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content product-name"><img src="../src/assets/img/product-laptop.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Laptop</p><p class="prd-category text-primary">Digital</p></div></div></td>
                                                    <td><div class="td-content"><span class="pricing">$110.00</span></div></td>
                                                    <td><div class="td-content"><span class="discount-pricing">$33.00</span></div></td>
                                                    <td><div class="td-content">35</div></td>
                                                    <td><div class="td-content"><a href="javascript:void(0);" class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-info feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Email</a></div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="td-content product-name"><img src="../src/assets/img/product-camera.jpg" alt="product"><div class="align-self-center"><p class="prd-name">Camera</p><p class="prd-category text-primary">Digital</p></div></div></td>
                                                    <td><div class="td-content"><span class="pricing">$126.04</span></div></td>
                                                    <td><div class="td-content"><span class="discount-pricing">$26.04</span></div></td>
                                                    <td><div class="td-content">30</div></td>
                                                    <td><div class="td-content"><a href="javascript:void(0);" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-secondary feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Referral</a></div></td>
                                                </tr>
    
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>

                </div>

            </div>
            

            <?php $this->load->view('inc/adminfooter_view');?>

        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

<?php $this->load->view('inc/adminscript_view');?>