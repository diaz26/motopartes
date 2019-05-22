<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin');
    $this->load->model('model_nav');
    $this->load->model('model_productos');
  }

  public function index()
	{
		if($this->session->userdata('logged_in')){
			if($this->session->userdata('ROL')=='Admin'){
      	$nav['nav']=$this->model_nav->consultNav(1);
        $nav['productos']=$this->model_productos->productos();
        $result['pedidosP']=$this->model_productos->consultPedidos(1);
				$result['products']=$this->model_productos->productosPedidos();
				$this->load->view('header',$nav);
				$this->load->view('view_admin',$result);
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}

  public function session_dest(){
		$session = array(
			'logged_in' => FALSE
		);
		$this->session->set_userdata($session);
		$this->session->sess_destroy();
		redirect("".base_url()."index.php/login");
	}

  public function modNav(){
    if($this->session->userdata('logged_in')){
      if ($this->session->userdata('ROL')=='Admin') {
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,999));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('tcarga')){
          $dataCargada = $this->upload->data();
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'logo'=> $urldeimagen.$dataCargada['file_name'],
            'paypal'=>$this->input->post('paypal'),
          );
        }else {
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'paypal'=>$this->input->post('paypal'),
          );
        }
        $id=$this->input->post('id');
        $this->model_admin->actNav($datos,$id);
        redirect("admin",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

}
