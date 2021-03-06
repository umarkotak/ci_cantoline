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
      redirect('users/login');
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
        'phone' => $result->phone,
        'type' => $result->type,
        'credit' => $result->credit,
        'logged_in' => true
      );

      $this->session->set_userdata($user_data);

      if ($user_data['type'] == "admin") {
        redirect('admin');
      } else {
        redirect('users');
      }
      
    } else {
      $this->session->set_flashdata('login_failed', "Wrong username or password combination");
      redirect('users/login');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('home');
  }

  public function upload_photo(){
    $config['upload_path']          = 'uploads/user_image/';
    $config['allowed_types']        = 'jpg';
    $config['max_size']             = 1000;
    $config['min_width']            = 399;
    $config['min_height']           = 399;
    $config['overwrite']            = true;
    $config['file_name']            = $this->session->userdata('username');
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image_file')) {
      $this->session->set_flashdata('success', "Picture successfully uploaded");
    } else {
      $this->session->set_flashdata('errors', $this->upload->display_errors());
    }

    if ($this->session->userdata('type') == "admin") {
      redirect('admin/profile');
    } else {
      redirect('users/profile');
    }
    
  }

  // User Service

  public function profile(){
    $data['main_view'] = "user/profile";
    $this->load->view('layouts/user', $data);
  }

  public function order_food(){
    $data['main_view'] = "user/order_food";
    $this->load->view('layouts/user', $data);
  }

  public function order_cart(){
    $data['main_view'] = "user/order_cart";
    $this->load->view('layouts/user', $data);
  }

  public function order_history(){
    $data['main_view'] = "user/order_history";
    $this->load->view('layouts/user', $data);
  }

}

?>