<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_info');
		$this->load->model('Model_producto');

	}

	public function index()
	{

		if($this->session->userdata('logged_in')){
			$data = array('Datos'=>$this->Model_Producto->Obtenerprductos());
			//$data['Datos']=$this->Model_Producto->Obtenerprductos();
			$this->load->view('header');
			$this->load->view('view_producto',$data);
			$this->load->view('footer');
    }else {
      redirect("login");
    }
	}

	public function Agregar(){
		if($this->session->userdata('logged_in')){
			//$data = array('Datos'=>$this->Model_Producto->Obtenerprductos());
			//$data['Datos']=$this->Model_Producto->Obtenerprductos();
			$this->load->view('header');
			$this->load->view('view_agregar');
			$this->load->view('footer');
		}else {
			redirect("login");
		}
	}




}
