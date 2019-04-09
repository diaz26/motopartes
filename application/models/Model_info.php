<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_info extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultMotoPartes(){
    $sql="SELECT * from part_info where id=1";
    $query=$this->db->query($sql);
    return $query->row();
  }

}
