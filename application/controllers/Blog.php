<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function index(){

        //yavuzselim/blog/10 /15 /20
        //yavuzselim/blog/1 /2 /selim

        $perPage     = 6;
        $blogcount   = $this->Common_model->getcount(['blogdurum'=>1],'blog');
        $pageSegment = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
        $pkCount     = ($pageSegment - 1) * $perPage;

        $links       = paginationHelper(
            base_url('blogs'),
            $blogcount,
            $perPage,
            2,
            TRUE,['class' => 'page-link']
        );

        $viewData      = array(
            "setting"  => $this->Common_model->get(['id'=>1],'ayarlar'),
            "bloglist" => $this->Common_model->getLimitAll(['blogdurum'=>1],$perPage,$pkCount,'blog','blogid','DESC'),
            "blogcount"=> $blogcount,
            "bloglinks"=> $links,

            'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
            'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
            'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
            'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
        );

        $this->load->view('default/blogs_view',$viewData);

    }

    public function detail($id){

        if(!$id){
            redirect(base_url());
        }

        $query = $this->Common_model->get(['blogsef'=>$id,'blogdurum'=>1],'blog');
        if($query){


            ##blog görüntülenmesini arttır ##
            $views = @$_COOKIE[$query->blogid];
            if(!$views){
                $plus = $query->bloggoruntulenme + 1;
                $this->db->query("UPDATE blog SET bloggoruntulenme='$plus' WHERE blogsef='$query->blogsef'");
                setcookie($query->blogid,'1',time() + 3600);
            }
            ##blog görüntülenmesini arttır ##

            $viewData = array(
                "setting" => $this->Common_model->get(['id'=>1],'ayarlar'),
                "blog"    => $query,

                'social'  => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
                'pages'   => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
                'popular' => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
                'popblog' => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
            );

            $this->load->view('default/blogdetail_view',$viewData);

        }else{
            redirect(base_url());
        }

    }

}

?>