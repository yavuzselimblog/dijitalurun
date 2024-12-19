<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('adminsession');
		adminchecksession();
	
	}

	public function index()
	{
		
		$this->load->view('home_view');
	}

}
