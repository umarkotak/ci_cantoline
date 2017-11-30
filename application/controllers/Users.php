<?php 

class Users extends CI_Controller {
  public function index(){
    $data['main_view'] = "user/index";
    $this->load->view('layouts/user', $data);
  }

  public function register(){
    $this->load->view('user/register');
  }

  public function register_auth(){
    // Validation
    $this->form_validation->set_rules('username', 'Username', 'trim|min_length[6]|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password', 'trim|min_length[6]');
    $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'matches[password]');
    $this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[4]');

    if ($this->form_validation->run() == TRUE) {
      $userdata = array(
        'username'       => $_POST['username'],
        'name'           => $_POST['name'],
        'password'       => $_POST['password'],
        'phone'          => $_POST['phone'],
        'email'          => $_POST['email'],
        'type'           => "user",
        'credit'         => 0
      );

      $result = $this->user_model->create($userdata);
    } else {
      $this->session->set_flashdata('login_failed', validation_errors());
      redirect('users/register');
    }    
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

  public function logout(){
    $this->session->sess_destroy();
    redirect('home');
  }

}

?>