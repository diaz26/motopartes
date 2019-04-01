	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('view_login');
		$this->load->view('footer');
	}

	public function mostrar()
	{
		$this->load->view('header');
		$this->load->view('view_rta');
		$this->load->view('footer');
	}
}
