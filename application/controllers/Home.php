<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_info');
	}

	public function index()
	{
		$result['info']=$this->model_info->consultMotoPartes();
		$this->load->view('header');
		$this->load->view('view_home',$result);
		$this->load->view('footer');
	}
}
