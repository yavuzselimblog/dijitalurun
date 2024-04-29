<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index() 
	{
		
		$viewData = array(
			'setting'      => $this->Common_model->get(['id'=>1],'ayarlar'),
			'products'     => $this->Common_model->getLimitAll(['urun_durum'=>1,'urun_vitrin'=>1],9,0,'urunler','urun_id','DESC'),
			'categories'   => $this->Common_model->getLimitAll(['katvitrin'=>1,'katdurum'=>1],20,0,'kategoriler','katid','DESC'),
			'comments'     => $this->Common_model->getLimitAll(['yorumdurum'=>1],50,0,'yorumlar','yorumid','DESC'),
			'blogs'        => $this->Common_model->getLimitAll(['blogdurum'=>1],3,0,'blog','blogid','DESC'),

			'commentcount' => $this->Common_model->custom('SELECT count(*) as total FROM yorumlar WHERE yorumdurum=1',false),
			'productcount' => $this->Common_model->custom('SELECT count(*) as total FROM urunler WHERE urun_durum=1',false),
			'orderscount'  => $this->Common_model->custom('SELECT count(*) as total FROM siparisler',false),
			'usercount'    => $this->Common_model->custom('SELECT count(*) as total FROM uyeler',false),

			'social'       => $this->Common_model->getAll(['sosdurum'=>1],'sosyalmedyalar'),
			'pages'        => $this->Common_model->getAll(['sayfadurum'=>1],'sayfalar'),
			'popular'      => $this->Common_model->getLimitAll(['urun_durum'=>1],8,0,'urunler','urun_goruntulenme','DESC'),
			'popblog'      => $this->Common_model->getLimitAll(['blogdurum'=>1],4,0,'blog','bloggoruntulenme','DESC'),

		);

		$this->load->view('default/home_view',$viewData);
	}

}
