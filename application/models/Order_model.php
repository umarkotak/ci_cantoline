<?php 

class Order_model extends CI_Model{
  public function add_cart_to_order($data){
    $this->db->insert('orders', $data);

    $this->db->select_max('id');
    $orders_id = $this->db->get('orders')->row()->id;

    $cart_data = array(
      'status' => "on_order",
      'orders_id' => $orders_id
    );

    $this->db->where('users_id', $this->session->userdata('user_id'));
    $this->db->where('status', "on_cart");
    $this->db->where('orders_id', null);

    $this->db->update('carts', $cart_data);
  }
}

?>