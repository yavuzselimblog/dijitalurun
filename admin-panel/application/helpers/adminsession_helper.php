<?php 


function adminchecksession(){

    $ci = &get_instance();
    if( $ci->session->userdata('adminlogin') == @sha1(md5($ci->input->ip_address().$ci->session->userdata('admincode'))) ){

        $query = $ci->Common_model->get([
            'adminkodu'  => $ci->session->userdata('admincode'),
            'admindurum' => 1
        ],'admin');

        if($query){

            //error_log($query);

            $generator = $ci->input->ip_address().$ci->session->userdata('admincode');
            $loginok   = sha1(md5($generator));
            $ci->session->set_userdata([
                'adminlogin' => $loginok,
                'admincode'  => $query->adminkodu,
                'adminkadi'  => $query->adminkadi,
                'adminmail'  => $query->adminposta,
            ]);

        }else{
            $ci->session->sess_destroy();
            redirect(base_url('loginpage'));
        }


    }else{
        $ci->session->sess_destroy();
        redirect(base_url('loginpage'));
    }

}


?>