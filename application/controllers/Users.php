<?php 

class Users extends CI_Controller {
  public function index(){

    $data['main_view'] = "user";
    $this->load->view('layouts/user', $data);
  }

  public function register(){
    $this->load->view('user/register');
  }

  public function register_auth(){
    $userdata = array(
      'username'       => $_POST['username'],
      'name'           => $_POST['name'],
      'password'       => $_POST['password'],
      'password_conf'  => $_POST['password_confirmation'],
      'phone'          => $_POST['phone'],
      'email'          => $_POST['email'],
      'type'           => "user",
      'credit'         => 0
    );

    $result = $this->user_model->create($userdata);
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

      redirect('users');
    } else {
      $this->session->set_flashdata('login_failed', "Wrong username or password combination");
      redirect('users/login');
    }

  }

}

?>