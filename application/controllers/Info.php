<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
  function __construct(){
  parent::__construct();
  $this->load->model('Model_ver');
}

	public function index()
	{
    if($this->session->userdata('logged_in')){

  		$this->load->view('view_informacion');

    }else {
      redirect("login");
    }
	}
  public function mostrar(){
    $basesdedatos=array('Datos'=>$this->Model_ver->verlistado());
    $this->load->view('views_informacion',$basesdedatos);


  }

}
