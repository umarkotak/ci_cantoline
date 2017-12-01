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

  public function login(){    

    // form validation
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');    

    if ($this->form_validation->run() == FALSE) {
      $data = array(
        'errors' => validation_errors()
      );

      // $this->session->set_userdata($data);
      // $this->session->unset_userdata($data);
      // session that set unset itself
      $this->session->set_flashdata($data);

      // redirect to controller home/index
      redirect('home');
    } else {

      $username = $_POST['username'];
      $password = $_POST['password'];

      // $username = $this->input->post('username');

      $user_id = $this->user_model->login_user($username, $password);

      if ($user_id) {
        $user_data = array(
          'user_id' => $user_id,
          'username' => $username,
          'logged_in' => true
        );

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success', "congratulation login success");

        redirect('home');
      } else {
        $this->session->set_flashdata('login_failed', "sorry login failed");

        redirect('home');
      }

    }

  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('home');
  }

}

?>