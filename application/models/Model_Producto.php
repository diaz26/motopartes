<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Producto extends CI_Model {

  function __construct(){
    parent::__construct();
  }


  public function consultProductos(){
    $sql="SELECT * from web_productos where cantidad<>0";
    $query=$this->db->query($sql);
    return $query->result();
  }

 public function Obtenerprductos(){
   $query= $this->db->get('web_productos');
   if ($query->num_rows()>0) {
     // code.....
     return $query;
   }else {
     return FALSE;
   }
 }

}
