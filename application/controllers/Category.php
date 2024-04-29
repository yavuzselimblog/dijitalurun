<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

    public function index($par){

        if(!$par){
            redirect(base_url());
        }

        ##kategoriyi bulalım
        $catquery = $this->Common_model->get(['katsef'=>$par,'katdurum'=>1],'kategoriler');
        if($catquery){
            
            $perPage        = 6;
            $productcount   = $this->Common_model->getcount(['urun_kategori'=>$catquery->katkodu,'urun_durum'=>1],'urunler');
            $pageSegment    = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
            $pkCount        = ($pageSegment - 1) * $perPage;
    
            $links       = paginationHelper(
                base_url('category/'.$catquery->katsef),
                $productcount,
                $perPage,
                3,
                TRUE,['class' => 'page-link']
            );

            $viewData      = array(
                "setting"      => $this->Common_model->get(['id'=>1],'ayarlar'),
                "productlist"  => $this->Common_model->getLimitAll(['urun_kategori'=>$catquery->katkodu,'urun_durum'=>1],$perPage,$pkCount,'urunler','urun_id','DESC'),
                "productcount" => $productcount,
                "productlinks" => $links,
                "catname"      => $catquery->katadi,
                "categories"   => $this->Common_model->getAll(['katdurum'=>1],'kategoriler'),
    
                'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
                'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
                'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
                'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
            );
    
            $this->load->view('default/category_view',$viewData);
    

        }else{
            redirect(base_url());
        }
    }

}