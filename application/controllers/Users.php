<?php 

class Users extends CI_Controller {
  public function show(){
    // loaded on autoload file
    // $this->load->model('user_model');
    $result = $this->user_model->get_users();
    $data['result'] = $result;    

    $this->load->view('admin/users_list_view', $data);
  }

}

?>