<?php 


function userchecksession(){

    $ci = &get_instance();
    if( $ci->session->userdata('userlogin') == @sha1(md5($ci->input->ip_address().$ci->session->userdata('usercode'))) ){

        $query = $ci->Common_model->get([
            'uye_kodu'  => $ci->session->userdata('usercode'),
            'uye_durum' => 1
        ],'uyeler');

        if($query){

            $generator = $ci->input->ip_address().$ci->session->userdata('usercode');
            $loginok   = sha1(md5($generator));
            $ci->session->set_userdata([
                'userlogin' => $loginok,
                'usercode'  => $query->uye_kodu,
                'username'  => $query->uye_adi,
                'userlname' => $query->uye_soyadi,
                'usermail'  => $query->uye_mail,
            ]);

        }else{
            $ci->session->sess_destroy();
            redirect(base_url());
        }


    }else{
        $ci->session->sess_destroy();
        redirect(base_url());
    }

}


?>