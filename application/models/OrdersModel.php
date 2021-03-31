<?php
class OrdersModel extends CI_Model{
    
    public function get_orders(){
        if(!empty($this->input->get("search"))){
          $this->db->or_like('order_id', $this->input->get("order_id"));
          $this->db->or_like('product_id', $this->input->get("product_id"));
          $this->db->or_like('quantity', $this->input->get("quantity"));
          $this->db->or_like('sub_total', $this->input->get("sub_total")); 
        }
        $query = $this->db->get("order_items");
        return $query->result();
    }
    /*public function insert_order()
    {    
        $data = array(
            'order_id' => $this->input->post('order_id'),
            'product_id' => $this->input->post('product_id'),
            'quantity' => $this->input->post('quantity'),
            'sub_total' => $this->input->post('sub_total')
        );
        return $this->db->insert('order_items', $data);
    }
    public function update_order($id) 
    {
        $data=array(
            'order_id' => $this->input->post('order_id'),
            'product_id'=> $this->input->post('product_id'),
            'quantity' => $this->input->post('quantity'),
            'sub_total' => $this->input->post('sub_total')
        );
        if($id==0){
            return $this->db->insert('order_items',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('order_items',$data);
        }        
    }*/
}
?>