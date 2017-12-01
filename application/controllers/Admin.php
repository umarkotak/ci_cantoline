<?php 

class Admin extends CI_Controller {
  public function index(){
    $data['main_view'] = "admin/index";
    $this->load->view('layouts/admin', $data);
  }

  public function food(){
    $data['main_view'] = 'admin/food';
    $this->load->view('layouts/admin', $data);
  }

  public function food_add(){
    $data['main_view'] = 'admin/food_add';
    $this->load->view('layouts/admin', $data);
  }
}

?>