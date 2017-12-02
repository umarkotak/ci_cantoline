<?php 

class User_model extends CI_Model{  

  public function get_users($user_id){
    // $query = $this->db->query("select * from users");
    $this->db->where([
      'id' => $user_id
      // 'username' => $username
    ]);
    
    $this->db->where('id', $user_id);
    $query = $this->db->get('users');

    // result is a helper method
    // return an array of objects
    return $query->result();
    // return $query->num_rows();
    // return $query->num_fields();
  }

  public function create_users($data){
    $this->db->insert('users', $data);
  }

  public function update_users($data, $id){
    $this->db->where(['id' => $id]);
    $this->db->update('users', $data);
  }

  public function delete_users($id){
    $this->db->where(['id' => $id]);
    $this->db->delete('users');
  }

  public function login_user($username, $password){
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $result = $this->db->get('users');

    if ($result->num_rows() == 1) {
      return $result->row(0)->id;
    } else {
      return false;
    }
  }
}

?>