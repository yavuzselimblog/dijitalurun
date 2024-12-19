<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        ##session kontrolleri
        $this->load->helper('usersession');
        userchecksession();
        ##session kontrolleri sonu
    }
     public function index(){

        $viewData = array(
			'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
			'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
		);

		$this->load->view('default/profile_view',$viewData);

    }

    public function profiledata(){

        if($this->input->method() == "post"){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Adınız', 'trim|required');
            $this->form_validation->set_rules('lname', 'Soyadınız', 'trim|required');
            $this->form_validation->set_rules('phone', 'Telefon', 'trim|required');
            $this->form_validation->set_rules('email', 'E-posta', 'trim|required|valid_email');
            
            
            if ($this->form_validation->run() === FALSE) {

                $error = array(
                    'title' => 'Hata',
                    'text'  => 'Boş alan bıraktınız, hatalı e-posta girdiniz...',
                    'icon'  => 'error'
                );

            }else{

                $allready = $this->Common_model->getcount([
                    'uye_mail'    => strip_tags($this->input->post('email',true)),
                    'uye_kodu !=' => ss('usercode')],'uyeler');
                if($allready > 0){

                    $error = array(
                        'title' => 'Hata',
                        'text'  => 'E-posta adresi zaten kayıtlı...',
                        'icon'  => 'error'
                    );

                }else{

                    $updatedata = array(
                        'uye_adi'    => strip_tags($this->input->post('name')),
                        'uye_soyadi' => strip_tags($this->input->post('lname')),
                        'uye_tel'    => strip_tags($this->input->post('phone')),
                        'uye_mail'   => strip_tags($this->input->post('email'))
                    );

                    $up = $this->Common_model->update([
                        'uye_kodu'=>ss('usercode')],
                        $updatedata,
                    'uyeler');

                    if($up){

                        $error = array(
                            'title' => 'Başarılı',
                            'text'  => 'Profilinizi başarıyla güncellediniz...',
                            'icon'  => 'success'
                        );

                        ##sessionları yeniden doldur###
                        $this->session->set_userdata([
                            'username'  => strip_tags($this->input->post('name')),
                            'userlname' => strip_tags($this->input->post('lname')),
                            'usermail'  => strip_tags($this->input->post('email')),
                            'userphone' => strip_tags($this->input->post('phone')),
                        ]);
                        ##sessionları yeniden doldur###

                    }else{

                        $error = array(
                            'title' => 'Hata',
                            'text'  => 'Hata oluştu...',
                            'icon'  => 'error'
                        );

                    }

                }
                
            }
            
            echo json_encode($error);

        }

    }


    public function password(){

        $viewData = array(
			'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
			'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
		);

		$this->load->view('default/password_view',$viewData);

    }

    public function passworddata(){

        if($this->input->method() == "post"){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('pass1', 'Yeni şifreniz', 'trim|required');
            $this->form_validation->set_rules('pass2', 'Yeni şifreniz tekrar', 'trim|required|matches[pass1]');
        
            
            if ($this->form_validation->run() === FALSE) {

                $error = array(
                    'title' => 'Hata',
                    'text'  => 'Boş alan bıraktınız ya da şifreler uyumsuz...',
                    'icon'  => 'error'
                );

            }else{


                $up = $this->Common_model->update([
                    'uye_kodu'=>ss('usercode')],
                    ['uye_sifre' => sha1(md5(strip_tags($this->input->post('pass1'))))],
                'uyeler');

                if($up){

                    $error = array(
                        'title' => 'Başarılı',
                        'text'  => 'Şifrenizi başarıyla güncellediniz...',
                        'icon'  => 'success'
                    );
                    
                }else{

                    $error = array(
                        'title' => 'Hata',
                        'text'  => 'Hata oluştu...',
                        'icon'  => 'error'
                    );

                }
                    
                
                
            }
            
            echo json_encode($error);

        }

    }


    public function orders(){

        $perPage        = 10;
        $ordercount     = $this->Common_model->getcount(['sipuye'=>ss('usercode')],'siparisler');
        $pageSegment    = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
        $pkCount        = ($pageSegment - 1) * $perPage;

        $links       = paginationHelper(
            base_url('orders'),
            $ordercount,
            $perPage,
            2,
            TRUE,['class' => 'page-link']
        );

        $viewData      = array(
            "setting"      => $this->Common_model->get(['id'=>1],'ayarlar'),
            "orderlist"    => $this->Common_model->getLimitAll(['sipuye'=>ss('usercode')],$perPage,$pkCount,'siparisler','siptarih','DESC'),
            "ordercount"   => $ordercount,
            "orderlinks"   => $links,

            'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
            'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
            'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
            'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
        );

        $this->load->view('default/myorders_view',$viewData);
       
    }

    public function orderdetail($par){
        
        if(!$par){
            redirect(base_url());
        }

        $order = $this->Common_model->get(['sipno'=>$par],'siparisler');
        if($order){

            $product  = $this->Common_model->get(['urun_kodu'=>$order->sipurun],'urunler');
            $user     = $this->Common_model->get(['uye_kodu'=>$order->sipuye],'uyeler');

            $viewData = array(
                'product'      => $product,
                'order'        => $order,
                'user'         => $user,

                "setting"      => $this->Common_model->get(['id'=>1],'ayarlar'),
                'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
                'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
                'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
                'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
            ); 

            $this->load->view('default/orderdetail_view',$viewData);

        }else{
            redirect(base_url()); 
        }

    }

}

?>