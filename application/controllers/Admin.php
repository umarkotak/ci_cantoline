<?php 

class Admin extends CI_Controller {
  
  public function index(){
    $data['main_view'] = "admin/index";
    $this->load->view('layouts/admin', $data);
  }

  public function food(){
    $data['main_view'] = 'food/food';
    $this->load->view('layouts/admin', $data);
  }

  public function food_add(){
    $data['main_view'] = 'food/food_add';
    $this->load->view('layouts/admin', $data);
  }

  public function food_edit($food_id){
    $data['main_view'] = 'food/food_edit';
    $data['food_id'] = $food_id;
    $this->load->view('layouts/admin', $data);
  }

  public function profile(){
    $data['main_view'] = "admin/profile";
    $this->load->view('layouts/admin', $data);
  }
}

?>