<?php 

class Users extends CI_Controller {
  public function index(){

  }

  public function login(){
    $this->load->view('user/login');
  }

  public function login_auth(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $result = $this->user_model->login($username, $password);

    if ($result) {
      $user_data = array(
        'user_id' => $result->id,
        'username' => $result->username,
        'name' => $result->name,
        'email' => $result->email,
        'type' => $result->type,
        'credit' => $result->credit,
        'logged_in' => true
      );

      $this->session->set_userdata($user_data);
    } else {
      $this->session->set_flashdata('login_failed', "Wrong username or password combination");
      redirect('users/login');
    }

  }

}

?>