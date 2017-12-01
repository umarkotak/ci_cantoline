<?php 

class Food_model extends CI_Model{
  public function create_food($fooddata){
    $this->db->insert('foods', $fooddata);
  }
}

 ?>