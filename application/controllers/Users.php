<?php 

class Users extends CI_Controller {

  public function show($user_id=1){
    // loaded on autoload file
    // $this->load->model('user_model');
    $result = $this->user_model->get_users($user_id);
    $data['result'] = $result;    

    $this->load->view('admin/users_list_view', $data);
  }

  public function insert(){
    $username = "201431291";
    $password = "201431291";

    $this->user_model->create_users([
      'username' => $username,
      'password' => $password
    ]);
  }

  public function update(){
    $id = 3;
    $username = "201431292";
    $password = "201431292";

    $this->user_model->update_users([
      'username' => $username,
      'password' => $password
    ], $id);
  }

  public function delete(){
    $id = 3;
    $this->user_model->delete_users($id);
  }

}

?>