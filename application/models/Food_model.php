<?php 

class Food_model extends CI_Model{
  public function create_food($fooddata){
    $this->db->insert('foods', $fooddata);
  }

  public function update_food($food_id, $fooddata){
    $this->db->where('id', $food_id);
    $this->db->update('foods', $fooddata);
  }

  public function delete_food($food_id){
    $this->db->where(['id' => $food_id]);
    $this->db->delete('foods');
  }
}

 ?>