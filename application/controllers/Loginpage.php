<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginpage extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        ##session kontrolü## 
        if(@ss('userlogin') == @sha1(md5($this->input->ip_address().ss('usercode')))){
            redirect(base_url());
        }
        ##session kontrolü## 



        $viewData = array(
			'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
			'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),

		);
        $this->load->view('default/login_view',$viewData);
        
    }


    public function activation($par){
        if(!$par){
            redirect(base_url());
        }

        $query = $this->Common_model->get(['uye_aktivasyon'=>$par,'uye_durum'=>2],'uyeler');
        if($query){

            ##üyenin durumunu aktif yap
            $up = $this->Common_model->update(
                ['uye_aktivasyon'=>$par],
                ['uye_durum'=>1,'uye_aktivasyon'=>''], 
                'uyeler');
            if($up){
                redirect(base_url('loginpage'));
            }else{
                redirect(base_url());
            }

        }else{
            redirect(base_url());
        }
    }



    public function recoverypassword($par){
        
        if(!$par){
            redirect(base_url());
        }

        $query = $this->Common_model->get(['uye_sifirlama' => $par],'uyeler');
        if($query){

            $viewData = array(
                'code'         => $par,
                'query'        => $query,
                'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
                'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
                'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
                'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
                'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
    
            );
            $this->load->view('default/recoverypassword_view',$viewData);

        }else{
            redirect(base_url());
        }

    }

    public function recoverypassworddata(){

        if($this->input->method() == "post"){

            $setting = $this->Common_model->get(['id'=>1],'ayarlar');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('code', 'Kod', 'trim|required');
            $this->form_validation->set_rules('email', 'E-posta adresi', 'trim|required|valid_email');
            $this->form_validation->set_rules('pass1', 'Şifreniz', 'trim|required');
            $this->form_validation->set_rules('pass2', 'Şifreniz Tekrar', 'trim|required|matches[pass1]');
            
            if ($this->form_validation->run() === FALSE) {
                
                $error = array(
                    'title' => 'Hata',
                    'text'  => 'Boş alan bırakılamaz, e-posta formatı hatalı girilemez, şifreler aynı olmalıdır.',
                    'icon'  => 'error'
                );

            }else{

                $query = $this->Common_model->get([
                    'uye_sifirlama'=>$this->input->post('code'),
                    'uye_mail'=>$this->input->post('email')],
                    'uyeler');
                if($query){

                    $up = $this->Common_model->update([
                        'uye_sifirlama'=>$this->input->post('code'),
                        'uye_mail'=>$this->input->post('email')],
                        
                        ['uye_sifre' => sha1(md5($this->input->post('pass1'))),
                        'uye_sifirlama'=>''],
                        
                        'uyeler');

                    if($up){

                        ##mail gönderim###
                        if($setting->mailbildirim == 1){

                            $this->load->helper('class.smtp');
                            $this->load->helper('class.phpmailer');

                            $defaultsmtp       = $setting->site_gecerli_smtp;
                            $smtpinfo          = $this->Common_model->get(['smtp_id'=>$defaultsmtp,'smtp_durum'=>1],'smtpbilgileri');

                            $mail              = new PHPMailer();
                            $mail->Host        = $smtpinfo->smtp_host;
                            $mail->Port        = $smtpinfo->smtp_port;
                            $mail->SMTPSecure  = $smtpinfo->smtp_sec;
                            $mail->Username    = $smtpinfo->smtp_mail;
                            $mail->Password    = $smtpinfo->smtp_sifre;
                            $mail->IsSMTP();
                            $mail->SMTPAuth    = true;
                            $mail->SetFrom($smtpinfo->smtp_mail,$setting->site_baslik);
                            $mail->AddAddress($this->input->post('email'),$setting->site_baslik);
                            $mail->CharSet  = 'UTF-8';
                            $mail->Subject  = 'Şifreniz sıfırlandı - '.$setting->site_baslik;
                            
                            $content = '<h3>Şifreniz başarıyla sıfırlandı</h3>
                            <p>Parolanız az önce değiştirildi, bu işlemi siz yapmadıysanız lütfen yönetici ile iletişime geçiniz.....</p>';
                            $mail->MsgHTML($content);
                            $mail->Send();


                        }
                        ##mail gönderim###


                        $error = array(
                            'title' => 'Başarılı',
                            'text'  => 'Şifreniz başarıyla sıfırlandı giriş yapabilirsiniz...',
                            'icon'  => 'success'
                        );




                    }else{
                        $error = array(
                            'title' => 'Hata',
                            'text'  => 'Sistem hatası oluştu...',
                            'icon'  => 'error'
                        );
                    }

                }else{

                    $error = array(
                        'title' => 'Hata',
                        'text'  => 'Sıfırlama kodu hatalı...',
                        'icon'  => 'error'
                    );

                }
                
            }
            

            echo json_encode($error);

        }

    }

    public function passwordrecovery(){

        ##session kontrolü## 
        if(@ss('userlogin') == @sha1(md5($this->input->ip_address().ss('usercode')))){
            redirect(base_url());
        }
        ##session kontrolü## 

        $viewData = array(
			'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
			'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),

		);
        $this->load->view('default/passwordrecovery_view',$viewData);
        
    }

    public function passwordrecoverydata(){

        if($this->input->method() == "post"){

            $email   = strip_tags(trim($this->input->post('email',true)));
            $code    = uniqid();
            $setting = $this->Common_model->get(['id'=>1],'ayarlar');

            if(!$email){

                $error = array(
                    'title' => 'Hata',
                    'text'  => 'E-posta adresi giriniz',
                    'icon'  => 'error'
                );

            }else{ 
            
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                    $error = array(
                        'title' => 'Hata',
                        'text'  => 'E-posta formatı geçersiz',
                        'icon'  => 'error'
                    );

                }else{

                    $query = $this->Common_model->getcount(['uye_mail'=>$email],'uyeler');
                    if($query < 1){

                        $error = array(
                            'title' => 'Hata',
                            'text'  => 'Böyle bir e-posta adresi sistemde bulunamadı',
                            'icon'  => 'error'
                        );

                    }else{

                        ##üyenin sıfırlama sütununu doldurun
                        $up = $this->Common_model->update(['uye_mail'=>$email],['uye_sifirlama'=>$code],'uyeler');
                        ##üyenin sıfırlama sütununu doldurun
                      
                        ##mail gönderme işlemleri##
                        if($up){

                            if($setting->mailbildirim == 1){

                                $this->load->helper('class.smtp');
                                $this->load->helper('class.phpmailer');
    
                                $defaultsmtp       = $setting->site_gecerli_smtp;
                                $smtpinfo          = $this->Common_model->get(['smtp_id'=>$defaultsmtp,'smtp_durum'=>1],'smtpbilgileri');
    
                                $mail              = new PHPMailer();
                                $mail->Host        = $smtpinfo->smtp_host;
                                $mail->Port        = $smtpinfo->smtp_port;
                                $mail->SMTPSecure  = $smtpinfo->smtp_sec;
                                $mail->Username    = $smtpinfo->smtp_mail;
                                $mail->Password    = $smtpinfo->smtp_sifre;
                                $mail->IsSMTP();
                                $mail->SMTPAuth    = true;
                                $mail->SetFrom($smtpinfo->smtp_mail,$setting->site_baslik);
                                $mail->AddAddress($email,$setting->site_baslik);
                                $mail->CharSet  = 'UTF-8';
                                $mail->Subject  = 'Parola Sıfırlama - '.$setting->site_baslik;
                                
                                $content = '<h3>Parola Sıfırlama</h3>
                                <p>Parolanızı sıfırlamak için lütfen aşağıdaki bağlantıya tıklayınız...</p>
                                <p><a target="_blank" href="'.base_url('loginpage/recoverypassword/'.$code).'">'.base_url('loginpage/recoverypassword/'.$code).'</a></p>';
                                $mail->MsgHTML($content);
                                $mail->Send();

                                $error = array(
                                    'title' => 'Başarılı',
                                    'text'  => 'Şifre sıfırlama bağlantınız, mail adresinize gönderilmiştir. Lütfen spam kutusunu kontrol etmeyi unutmayın...',
                                    'icon'  => 'success'
                                );
    
                            }else{
                                $error = array(
                                    'title' => 'Hata',
                                    'text'  => 'E-posta gönderim sistemi kapalı. Lütfen yönetici ile iletişime geçiniz...',
                                    'icon'  => 'error'
                                );
                            }

                        }else{
                            $error = array(
                                'title' => 'Hata',
                                'text'  => 'Sistem hatası oluştu...',
                                'icon'  => 'error'
                            );
                        }
                       
                        ##mail gönderme işlemleri##

                    }

                }

                echo json_encode($error);

            }

            

        }

    }

    public function logindata(){

        ##session kontrolü## 
        if(@ss('userlogin') == @sha1(md5($this->input->ip_address().ss('usercode')))){
            redirect(base_url());
        }
        ##session kontrolü## 

        if($this->input->method() == "post"){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'E-posta adresiniz', 'trim|required|valid_email');
            $this->form_validation->set_rules('pass', 'Şifreniz', 'trim|required');

            
            if ($this->form_validation->run() === FALSE) {

                $error = array(
                    'title' => 'Hata',
                    'text'  => 'Boş alan bıraktınız, hatalı e-posta girdiniz...',
                    'icon'  => 'error'
                );
                
            } else {

                $userdata = array(
                    "uye_mail" => strip_tags(trim($this->input->post('email',true))),
                    "uye_sifre" => sha1(md5(strip_tags(trim($this->input->post('pass',true))))),
                );

                $loginquery = $this->Common_model->get($userdata,'uyeler');
                if($loginquery){

                    if($loginquery->uye_durum == 1){

                        $generator = $this->input->ip_address().$loginquery->uye_kodu;
                        $loginok   = sha1(md5($generator));

                        $this->session->set_userdata([
                            'userlogin' => $loginok,
                            'usercode'  => $loginquery->uye_kodu,
                            'username'  => $loginquery->uye_adi,
                            'userlname' => $loginquery->uye_soyadi,
                            'usermail'  => $loginquery->uye_mail,
                            'userphone' => $loginquery->uye_tel,
                        ]);

                        ##loglara ekleme##
                        $this->Common_model->add('loglar',[
                            'logbaslik'     => 'Üye Girişi',
                            'logaciklama'   => 'Üye girişi yapıldı',
                            'logekleyen'    => $loginquery->uye_kodu,
                            'logtarihpanel' => date('Y-m-d'),
                            'logip'         => $this->input->ip_address()
                        ]);
                        ##loglara ekleme##

                        $error = array(
                            'title' => 'Başarılı',
                            'text'  => 'Başarıyla giriş yaptınız, yönlendiriliyorsunuz...',
                            'icon'  => 'success'
                        );

                    }else{

                        $error = array(
                            'title' => 'Hata',
                            'text'  => 'Üyeliğiniz pasif durumdadır...',
                            'icon'  => 'error'
                        );

                    } 

                }else{

                    $error = array(
                        'title' => 'Hata',
                        'text'  => 'E-posta veya şifre yanlış...',
                        'icon'  => 'error'
                    );

                }
              
            }
            

            echo json_encode($error);

        }

    }

    public function register(){

        ##session kontrolü## 
        if(@ss('userlogin') == @sha1(md5($this->input->ip_address().ss('usercode')))){
            redirect(base_url());
        }
        ##session kontrolü## 

        $viewData = array(
			'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
			'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),

		);
        $this->load->view('default/register_view',$viewData);
        
    }

    public function registerdata(){

        ##session kontrolü## 
        if(@ss('userlogin') == @sha1(md5($this->input->ip_address().ss('usercode')))){
            redirect(base_url());
        }
        ##session kontrolü## 
        
        if($this->input->method()  == "post"){

            ##ayar tablosunu çek
            $setting = $this->Common_model->get(['id'=>1],'ayarlar');

            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Adınız', 'trim|required');
            $this->form_validation->set_rules('lastname', 'Soyadınız', 'trim|required');
            $this->form_validation->set_rules('pass', 'Şifreniz', 'trim|required');
            $this->form_validation->set_rules('phone', 'Telefon Numaranız', 'trim|required|numeric');
            $this->form_validation->set_rules('email', 'E-posta Adresiniz', 'trim|required|valid_email');
            $activationcode = uniqid();
            
            if ($this->form_validation->run() === FALSE) {

                $error = array(
                    'title' => 'Hata',
                    'text'  => 'Boş alan bıraktınız, hatalı e-posta veya telefon numaranız numerik değil...',
                    'icon'  => 'error'
                );

            } else {
               
                $allready = $this->Common_model->getcount(['uye_mail'=>strip_tags($this->input->post('email',true))],'uyeler');
                if($allready > 0){

                    $error = array(
                        'title' => 'Hata',
                        'text'  => 'E-posta adresi zaten kayıtlı...',
                        'icon'  => 'error'
                    );

                }else{

                    $userdata = array(
                        'uye_kodu'       => uniqid(),
                        'uye_adi'        => strip_tags($this->input->post('name',true)),
                        'uye_soyadi'     => strip_tags($this->input->post('lastname',true)),
                        'uye_tel'        => strip_tags($this->input->post('phone',true)),
                        'uye_mail'       => strip_tags($this->input->post('email',true)),
                        'uye_sifre'      => sha1(md5(strip_tags($this->input->post('pass',true)))),
                        'uye_aktivasyon' => $activationcode,
                        'uye_durum'      => 2
                    );

                    $add = $this->Common_model->add('uyeler',$userdata);
                    if($add){

                        ##mail gönderim işlemi ## 
                        if($setting->mailbildirim == 1){

                            $this->load->helper('class.smtp');
                            $this->load->helper('class.phpmailer');

                            $defaultsmtp       = $setting->site_gecerli_smtp;
                            $smtpinfo          = $this->Common_model->get(['smtp_id'=>$defaultsmtp,'smtp_durum'=>1],'smtpbilgileri');

                            $mail              = new PHPMailer();
                            $mail->Host        = $smtpinfo->smtp_host;
                            $mail->Port        = $smtpinfo->smtp_port;
                            $mail->SMTPSecure  = $smtpinfo->smtp_sec;
                            $mail->Username    = $smtpinfo->smtp_mail;
                            $mail->Password    = $smtpinfo->smtp_sifre;
                            $mail->IsSMTP();
                            $mail->SMTPAuth    = true;
                            $mail->SetFrom($smtpinfo->smtp_mail,$setting->site_baslik);
                            $mail->AddAddress(strip_tags($this->input->post('email',true)),$setting->site_baslik);
                            $mail->CharSet  = 'UTF-8';
                            $mail->Subject  = 'Üyelik Aktivasyonu - '.$setting->site_baslik;
                            
                            $content = '<h3>Üyelik Aktivasyonu</h3>
                            <p>Üyeliğinizi aktifleştirmek için lütfen aşağıdaki bağlantıya tıklayınız...</p>
                            <p><a target="_blank" href="'.base_url('loginpage/activation/'.$activationcode).'">'.base_url('loginpage/activation/'.$activationcode).'</a></p>';
                            $mail->MsgHTML($content);
                            $mail->Send();

                            $error = array(
                                'title' => 'Başarılı',
                                'text'  => 'Üyeliğiniz başarıyla oluşturuldu, üyeliğiniz aktifleştirmek için mailinize gelen linke tıklayınız...',
                                'icon'  => 'success'
                            );

                        }else{
                            $error = array(
                                'title' => 'Hata',
                                'text'  => 'E-posta gönderim sistemi kapalı. Lütfen yönetici ile iletişime geçiniz...',
                                'icon'  => 'error'
                            );
                        }
                        ##mail gönderim işlemi ## 

                       

                    }else{

                        $error = array(
                            'title' => 'Hata',
                            'text'  => 'Sistem hatası oluştu...',
                            'icon'  => 'error'
                        );

                    }

                }

            }


            echo json_encode($error);
            

        }

    }

    public function logout(){
       
        $this->session->sess_destroy();
        redirect(base_url());
        
    }

}

?>