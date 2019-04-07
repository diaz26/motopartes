<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ver extends CI_Model {

  function __construct(){
    parent::__construct();

  }

  public function verlistado(){
    $query=$this->db->get('pro_informacion');
    if($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }
}
