<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_productos extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultProductos(){
    $sql="SELECT * from part_articulos where cantidad<>0";
    $query=$this->db->query($sql);
    return $query->result();
  }

}
