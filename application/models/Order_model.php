<?php 

class Order_model extends CI_Model{
  public function add_cart_to_order($data){
    $this->db->insert('orders', $data);
  }
}

?>