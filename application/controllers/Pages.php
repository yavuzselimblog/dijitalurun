<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

    public function search(){
        echo "1";
    }

    public function contact(){
        $viewData = array(
            "setting"      => $this->Common_model->get(['id'=>1],'ayarlar'),
            'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
        );
  
        $this->load->view('default/contact_view',$viewData);
    }

    public function detail($id){
        
        if(!$id){
            redirect(base_url());
        }

        $query = $this->Common_model->get(['sayfasef'=>$id,'sayfadurum'=>1],'sayfalar');
        if($query){

            $viewData = array(
                "page"         => $query,
                "setting"      => $this->Common_model->get(['id'=>1],'ayarlar'),

                'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
                'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
                'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
                'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
            );

            $this->load->view('default/pagedetail_view',$viewData);

        }else{
            redirect(base_url()); 
        }

    }

    public function sendmessage(){

        if($this->input->method() == "post"){

            $setting = $this->Common_model->get(['id'=>1],'ayarlar');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Adınız', 'trim|required');
            $this->form_validation->set_rules('email', 'E-posta', 'trim|required|valid_email');
            $this->form_validation->set_rules('subject', 'Konu', 'trim');
            $this->form_validation->set_rules('message', 'Mesajınız', 'trim|required');

            if ($this->form_validation->run() === FALSE) {
                
                $error = array(
                    'title' => 'Hata oluştu',
                    'text'  => 'Boş alan bıraktınız ya da hatalı e-posta adresi girdiniz...',
                    'icon'  => 'error'
                );
            
            }else{

                $data = array(
                    "mesajisim"   => $this->input->post('name',true),
                    "mesajkonu"   => $this->input->post('subject',true),
                    "mesajmail"   => $this->input->post('email',true),
                    "mesajicerik" => $this->input->post('message',true),
                    "mesajip"     => IP(),
                );
                $add  = $this->Common_model->add('mesajlar',$data);
                if($add){

                    //mail durum aktifse yöneticiye mail gönderilecektir...
                    if($setting->mailbildirim == 1){

                        $this->load->helper('class.smtp');
                        $this->load->helper('class.phpmailer');

                        $defaultsmtp = $setting->site_gecerli_smtp;
                        $smtpinfo    = $this->Common_model->get(['smtp_id'=>$defaultsmtp,'smtp_durum'=>1],'smtpbilgileri');

                        $mail        = new PHPMailer();
                        $mail->Host  = $smtpinfo->smtp_host;
                        $mail->Port  = $smtpinfo->smtp_port;
                        $mail->SMTPSecure  = $smtpinfo->smtp_sec;
                        $mail->Username    = $smtpinfo->smtp_mail;
                        $mail->Password    = $smtpinfo->smtp_sifre;
                        $mail->IsSMTP();
                        $mail->SMTPAuth    = true;
                        $mail->SetFrom($smtpinfo->smtp_mail,$setting->site_baslik);
                        $mail->AddAddress($setting->mail,$setting->site_baslik);
                        $mail->CharSet  = 'UTF-8';
                        $mail->Subject  = $this->input->post('subject',true).' - '.$setting->site_baslik;
                        
                        $content = '<h3>İletişim Formu | '.$setting->site_baslik.'</h3>
                                    <p><b>Mesaj İsim:</b>'.$this->input->post('name',true).'</p>
                                    <p><b>Mesaj Konu:</b>'.$this->input->post('subject',true).'</p>
                                    <p><b>Mesaj Mail:</b>'.$this->input->post('email',true).'</p>
                                    <p><b>Mesaj içerik:</b>'.$this->input->post('message',true).'</p><hr />
                                    <p><b>IP Adresi & Tarih:</b>'.$this->input->ip_address().' - '.date('d.m.Y H:i').'</p>';
                        $mail->MsgHTML($content);
                        $mail->Send();

                    }

                    $error = array(
                        'title' => 'Başarılı',
                        'text'  => 'Mesajınız başarıyla gönderildi, en kısa sürede dönüş sağlayacağız...',
                        'icon'  => 'success'
                    );

                }else{

                    $error = array(
                        'title' => 'Hata oluştu',
                        'text'  => 'Sistem hatası oluştu...',
                        'icon'  => 'error'
                    );

                }

                
            }
            
            
            echo json_encode($error);

        }

    }

}
