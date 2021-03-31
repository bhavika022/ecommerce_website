<?php
class CustomersModel extends CI_Model{
    
    public function get_customers(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('email', $this->input->get("email"));
          $this->db->or_like('phone', $this->input->get("phone"));
          $this->db->or_like('address', $this->input->get("address"));
        }
        $query = $this->db->get("customers");
        return $query->result();
    }
    public function insert_customer()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        return $this->db->insert('customers', $data);
    }
    public function update_customer($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        if($id==0){
            return $this->db->insert('customers',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('customers',$data);
        }        
    }
}
?>