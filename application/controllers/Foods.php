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
      $config['max_size']             = 1000;
      $config['overwrite']            = true;
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

  public function update_food($food_id){
    $fooddata = array(
      'description'   => $_POST['description'],
      'price'         => $_POST['price'],
      'stock'         => $_POST['stock'],
    );

    $this->food_model->update_food($food_id ,$fooddata);
    redirect('admin/food');
  }

  public function delete_food($food_id, $food_name){
    $this->food_model->delete_food($food_id);

    $food_name = str_replace('%20', '_', $food_name);
    $file = "uploads/food_image/".$food_name.".jpg";
    unlink($file);

    redirect('admin/food');
  }

  public function add_food(){
    
  }

  public function subtract_food(){
    
  }
}

?>