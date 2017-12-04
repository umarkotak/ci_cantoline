<?php 

class Carts extends CI_Controller {
  public function add_food_to_cart(){
    $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric|greater_than[0]');

    $food_data = $this->db->where('id', $this->input->post('food_id'));
    $food_data = $this->db->get('foods');

    $cart_data = array(
      'users_id' => $this->session->userdata('user_id'),
      'foods_id' => $this->input->post('food_id'),
      'quantity' => $this->input->post('quantity'),
      'price'    => $this->input->post('quantity') * $food_data->row(0)->price,
      'status'   => "on_cart"
    );

    if ($this->form_validation->run() == TRUE) {
      $this->session->set_flashdata('success', "Your items has been added to cart");
      $this->db->insert('carts', $cart_data);
      redirect('users/order_food');
    } else {
      $this->session->set_flashdata('errors', validation_errors());
      redirect('users/order_food');
    }
  }
}

?>