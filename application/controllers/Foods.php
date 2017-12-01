<?php 

class Foods extends CI_Controller {
  
  public function create_food(){
    $this->form_validation->set_rules('name', 'Name', 'trim|min_length[6]|is_unique[foods.name]');
    $this->form_validation->set_rules('description', 'Description', 'trim|min_length[6]');

    $image = $_POST['name'].".jpg";
    $image = str_replace(' ', '_', $image);
    
    if ($this->form_validation->run()) {
      $fooddata = array(
        'name'          => $_POST['name'],
        'description'   => $_POST['description'],
        'category_id'   => $_POST['category_id'],
        'price'         => $_POST['price'],
        'stock'         => $_POST['stock'],
        'image'         => $image
      );

      $config['upload_path']          = 'uploads/food_image/';
      $config['allowed_types']        = 'jpg';
      $config['max_size']             = 100;
      $config['file_name']            = $_POST['name'];
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image_file')) {
        $this->session->set_flashdata('success', "Food successfully created");

        $this->food_model->create_food($fooddata);

        redirect('admin/food_add');
      } else {
        $this->session->set_flashdata('errors', $this->upload->display_errors());
        redirect('admin/food_add');
      }
    } else {
      $this->session->set_flashdata('errors', validation_errors());
      redirect('admin/food_add');
    }
  }

  public function read_food(){
    
  }

  public function update_food(){
    
  }

  public function delete_food(){
    
  }

  public function add_food(){
    
  }

  public function subtract_food(){
    
  }

  public function do_upload(){
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile'))
    {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
    }
    else
    {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
    }
  }
}

?>