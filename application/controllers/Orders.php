<?php 

class Orders extends CI_Controller {
  public function add_cart_to_order(){

    $this->db->where('id', $this->session->userdata('user_id'));
    $result = $this->db->get('users');
    $result = $result->row();

    $credit = $result->credit;
    $total_price = (int) $this->input->post('total_price');

    if ($credit >= $total_price) {
      $data['main_view'] = "user/order_confirmation";
      $this->load->view('layouts/user', $data);
    } else {
      $this->session->set_flashdata('errors', "Sorry, your account credit is insufficient. Please top up first before continuing transaction.");
      redirect('users/order_cart');
    }

  }

  public function add_cart_to_order_confirm(){
    $order_data = array(
      'users_id' => $this->session->userdata('user_id'),
      'payment_date' => date("Y-m-d"),
      'total_price' => $this->input->post('total_price'),
      'status' => "on_order"
    );

    $this->order_model->add_cart_to_order($order_data);
    redirect('users');
  }
}

?>
