<?php
class UsersModel extends CI_Model{
    
    public function get_users(){
        if(!empty($this->input->get("search"))){
          $this->db->like('first_name', $this->input->get("search"));
          $this->db->like('last_name', $this->input->get("search"));
          $this->db->or_like('email', $this->input->get("email"));
          $this->db->or_like('gender', $this->input->get("gender"));
          $this->db->or_like('phone', $this->input->get("phone"));
          $this->db->or_like('created', $this->input->get("created"));
        }
        $query = $this->db->get("users");
        return $query->result();
    }
    /*public function insert_user()
    {    
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'phone' => $this->input->post('phone'),
            'created' => $this->input->post('created')
        );
        return $this->db->insert('users', $data);
    }
    public function update_user($id) 
    {
        $data=array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'phone' => $this->input->post('phone'),
            'created' => $this->input->post('created')
        );
        if($id==0){
            return $this->db->insert('users',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('users',$data);
        }        
    }*/
}
?>