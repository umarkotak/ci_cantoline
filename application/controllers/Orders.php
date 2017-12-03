<?php 

class Orders extends CI_Controller {
  public function add_cart_to_order(){
    $credit = (int) $this->session->userdata('credit');
    $total_price = (int) $this->input->post('total_price');

    if ($credit > $total_price) {
      $data['main_view'] = "user/order_confirmation";
      $this->load->view('layouts/user', $data);
    } else {
      $this->session->set_flashdata('errors', "Sorry, your account credit is insufficient. Please top up first before continuing transaction.");
      redirect('users/order_cart');
    }

  }

  public function add_cart_to_order_confirm(){
    
  }
}

?>