<?php 

class Food extends CI_Controller {
  public function create_food{
    $fooddata = array(
      'name'          => $_POST['name'],
      'description'   => $_POST['description'],
      'category_id'   => $_POST['category_id'],
      'price'         => $_POST['price'],
      'stock'         => $_POST['stock'],
      'image'         => ''
    );

  }

  public function read_food{
    
  }

  public function update_food{
    
  }

  public function delete_food{
    
  }

  public function add_food{
    
  }

  public function subtract_food{
    
  }
}

 ?>