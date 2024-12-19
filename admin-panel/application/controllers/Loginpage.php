<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginpage extends CI_Controller{

    public function index(){

        if(@ss('adminlogin')){
            redirect(base_url('home'));
        }
        
        $viewData = array(
			'setting' => $this->Common_model->get(['id' => 1],'ayarlar')
		);
        $this->load->view('login_view',$viewData);

    }

    public function logindata(){

        if(@ss('adminlogin')){
            redirect(base_url('home'));
        }

        if($this->input->method() == 'post'){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'E-posta', 'trim|required|valid_email');
            $this->form_validation->set_rules('pass', 'Şifre', 'trim|required');
            
            if ($this->form_validation->run() === FALSE) {
                
                $error = array(
                    'title' => 'Error',
                    'text'  => 'Boş alan bıraktınız ya da hatalı e-posta adresi girdiniz',
                    'icon'  => 'error'
                );

            } else {

                $query = $this->Common_model->get([
                    'adminposta' => $this->input->post('email',true),
                    'adminsifre' => sha1(md5($this->input->post('pass',true))),
                ],'admin');

                if($query){

                    if($query->admindurum == 1){

                        $generator    = $this->input->ip_address().$query->adminkodu;
                        $adminloginok = sha1(md5($generator));
    
                        $this->session->set_userdata([
                            'adminlogin' => $adminloginok,
                            'adminid'    => $query->adminid,
                            'admincode'  => $query->adminkodu,
                            'adminkadi'  => $query->adminkadi,
                            'adminmail'  => $query->adminposta,
                            'admindurum' => $query->admindurum
                        ]);
    
                        ##loglara ekleme##
                          $this->Common_model->add('loglar',[
                            'logbaslik'     => 'Admin Girişi',
                            'logaciklama'   => 'Admin girişi yapıldı',
                            'logekleyen'    => $query->adminkodu,
                            'logtarihpanel' => date('Y-m-d'),
                            'logip'         => $this->input->ip_address()
                        ]);
                        ##loglara ekleme##
    
                        $error = array(
                            'title' => 'Başarılı',
                            'text'  => 'Giriş başarılı, yönlendiriliyorsunuz...',
                            'icon'  => 'success'
                        );
    
                        
    
                    }else{
    
                           
                        $error = array(
                            'title' => 'Error',
                            'text'  => 'Yöneticiliğiniz pasif duruma getirilmiştir.',
                            'icon'  => 'error'
                        );
    
                    }
    

                }else{
                        
                    $error = array(
                        'title' => 'Error',
                        'text'  => 'Yönetici bilgileri yanlış',
                        'icon'  => 'error'
                    );
                }

                
            }
            
            echo json_encode($error);

        }

    }

    public function logout(){
        session_destroy();
        redirect(base_url('loginpage'));
    }

}