	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header_login');
		$this->load->view('view_login');
		$this->load->view('footer');
	}

}