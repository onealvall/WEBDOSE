<?php


class Parent_searchstudent_model extends CI_Model{
	

                
public function searchstudents(){
     $sn = $this->input->post('s_n');
     $this->db->select('*');
     $this->db->from('Student_Info');
     $this->db->Where('Student_Number !=',$sn);
     $this->db->like('First_Name',$sn);
     $this->db->or_like('Student_Number',$sn);
     $this->db->or_like('Last_Name',$sn);
     $query = $this->db->get();
	
     if($query->num_rows()> 0){
        return $query->result();
   }else{
        return $query->result();
         }
                                }

public function editStudent(){
      $id = $this->input->get('id');
      $this->db->where('Student_Number', $id);
      $query = $this->db->get('Student_Info');
      if($query->num_rows() > 0){
      return $query->row();
      }else{
       return false;
           }
                              }

public function updateStudent(){
        $id = $this->input->post('txtId');
         $field = array(
        'Father_Name'      =>$this->input->post('Father_Name'),
        'Father_Occupation'=>$this->input->post('Father_Occupation'),
        'Father_Contact'   =>$this->input->post('Father_no'),
        'Father_Address'   =>$this->input->post('Father_Address'),
       // 'Father_Contact'   =>$this->input->post('Father_EmailAddress')
       
       'Mother_Name'      =>$this->input->post('Mother_Name'),
       'Mother_Occupation'=>$this->input->post('Mother_Occupation'),
       'Mother_Contact'   =>$this->input->post('Mother_No'),
       'Mother_Address'   =>$this->input->post('Mother_Address')
      // 'Father_Contact'   =>$this->input->post('Father_EmailAddress')
        
		);
         $this->db->where('Student_Number', $id);
         $this->db->update('Student_Info', $field);
         if($this->db->affected_rows() > 0){
                    return true;
         }else{
                    return false;
                }
                                            }                              
}
?>
