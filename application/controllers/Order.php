<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

public function __construct(){
parent::__construct();

##session kontrolü
$this->load->helper('usersession');
userchecksession();
}

public function index($par){

    if(!$par){
        redirect(base_url());
    }

    $query = $this->Common_model->get(['urun_kodu'=>$par,'urun_durum'=>1],'urunler');
    if($query){

        $viewData = array(
            'product'      => $query,
            'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
            'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
            'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
            'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
            'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
        );

        $this->load->view('default/order_view',$viewData);

    }else{
        redirect(base_url());  
    }
}

public function completedata(){

if($this->input->method() == "post"){

    $pcode   = strip_tags(trim($this->input->post('pcode',true)));
    $payment = strip_tags(trim($this->input->post('payment',true)));
    $onote   = strip_tags(trim($this->input->post('note',true)));
    $setting = $this->Common_model->get(['id'=>1],'ayarlar');
    $orderno = uniqid();

    if(!$pcode || !$payment){

        $error = array(
            'title' => 'Hata oluştu',
            'text'  => 'Lütfen boş alan bırakmayınız...',
            'icon'  => 'error',
            'link'  => '#'
        );

    }else{

        $pquery = $this->Common_model->get(['urun_kodu'=>$pcode,'urun_durum'=>1],'urunler');
        if($pquery){

            ##ürün indirme linki değişkeni
            $pdownload = $pquery->urun_indirmelink == NULL ? '' : $pquery->urun_indirmelink;
            //ürün varsa
            $data = array(
                'sipno'         => $orderno,
                'sipuye'        => ss('usercode'),
                'sipurun'       => $pquery->urun_kodu,
                'siptutar'      => $pquery->urun_fiyat,
                'siptarihs'     => date('Y-m-d'),
                'sipmusterinot' => $onote,
                'sipdurum'      => 'beklemede',
                'sipodemekodu'  => $payment,
                'siparissonrasi'=> $pdownload
            );

            $add = $this->Common_model->add('siparisler',$data);
            if($add){

                ##mail bildirim bölümü ##
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
                    $mail->AddAddress(ss('usermail'),$setting->site_baslik);
                    $mail->CharSet  = 'UTF-8';
                    $mail->Subject  = $orderno.' Nolu Sipariş Oluşturuldu - '.$setting->site_baslik;
                    
                    $content = '<h3>Yeni sipariş</h3>
                    <p>'.$orderno.' sipariş numarası ile yeni siparişiniz oluşturuldu, En kısa sürede teslimatı sağlanacaktır ...</p>
                    <hr />
                    <h5>Sipariş Detayı</h5>
                    <p><b>Sipariş Tutarı:</b>'.$pquery->urun_fiyat.' TL</p>
                    <p><b>Sipariş Numarası:</b>'.$orderno.'</p>
                    <p><b>Ürün Adı:</b>'.$pquery->urun_adi.'</p>
                    <hr />
                    <p>Bizi tercih ettiğiniz için teşekkür ederiz...</p>
                    ';
                    $mail->MsgHTML($content);
                    $mail->Send();

                }
                ##mail gönderim işlemi ## 
                ##mail bildirim bölümü ##

                if($payment == 'eft'){

                    $error = array(
                        'title' => 'Başarılı',
                        'text'  => 'Siparişiniz oluşturuldu, yönlendiriliyorsunuz...',
                        'icon'  => 'success',
                        'link'  => base_url('successpage')
                    );

                }else{

                    ##default POS firması ## 
                    $defaultpos = $setting->site_gecerli_pos;
                    $pos        = $this->Common_model->get(['posid'=>$defaultpos],'posfirmalari');
                    
                
                    $error = array(
                        'title' => 'Başarılı',
                        'text'  => 'Siparişiniz oluşturuldu, yönlendiriliyorsunuz...',
                        'icon'  => 'success',
                        'link'  => base_url('creditcard/'.$pos->possef.'/'.$orderno)
                    );

                }
                

            }else{
                $error = array(
                    'title' => 'Hata oluştu',
                    'text'  => 'Sipariş esnasında hata oluştu...',
                    'icon'  => 'error',
                    'link'  => base_url('errorpage')
                );
            }

        }else{

            $error = array(
                'title' => 'Hata oluştu',
                'text'  => 'Ürün seçilmedi...',
                'icon'  => 'error',
                'link'  => base_url('errorpage')
            );

        }

    }

    echo json_encode($error);

}

}

public function success(){

$viewData = array(
    'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
    'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
    'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
    'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
    'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
    'banks'        => $this->Common_model->getAll(['bankadurum'=>1],'bankalar')
);

$this->load->view('default/success_view',$viewData);


}

public function error(){

$viewData = array(
    'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
    'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
    'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
    'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
    'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),
);

$this->load->view('default/error_view',$viewData);


}

}

?>