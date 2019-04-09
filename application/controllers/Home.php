<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_info');
		$this->load->model('model_productos');
	}

	public function index()
	{
		$result['productos']=$this->model_productos->consultProductos();
		$result['info']=$this->model_info->consultMotoPartes();
		$this->load->view('header');
		$this->load->view('view_home',$result);
		$this->load->view('footer');
	}
}
