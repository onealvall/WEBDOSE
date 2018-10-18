<?php


class Parent_feedback_model extends CI_Model{
	

                
public function feedback(){
     $this->db->select('*');
     $this->db->from('parent_feedback');
     $this->db->Where('active', '1');
     $query = $this->db->get();
	
     if($query->num_rows()> 0){
        return $query->result();
   }else{
        return $query->result();
         }
                                }

public function show_feedback(){
      $id = $this->input->get('id');
      $this->db->where('feedback_id', $id);
      $query = $this->db->get('parent_feedback');
      if($query->num_rows() > 0){
      return $query->row();
      }else{
       return false;
           }
                              }

                        
}
?>
