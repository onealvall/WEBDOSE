<?php


class Parent_assign_model extends CI_Model{
	
	
public function parent_assign(){
	   
	$Parentname = $this->input->get('data');
	
	$this->db->select('*');
	$this->db->from('parent_accounts');
	$this->db->where('active', 1);
	$this->db->where('p_lname', $Parentname);
	$this->db->group_by("p_fname");
	$query = $this->db->get();
	
	// reset query
	$this->db->reset_query();
	return $query->result_array();

								  }

public function assign_student(){
	 
	$ParentID = $this->input->post('parent_id');

	$this->db->select('*');
	$this->db->from('parentportal_assign');
	$this->db->join('parent_accounts','parent_accounts.p_account_id = parentportal_assign.p_account_id');
	$this->db->join('student_info', 'parentportal_assign.student_number = student_info.Student_Number');
    $this->db->join('basiced_studentinfo', 'parentportal_assign.student_number = basiced_studentinfo.Student_number');
	$this->db->where('parent_accounts.p_account_id',$ParentID);
	$this->db->where('parentportal_assign.active', '1');
	$query = $this->db->get();
 
	$this->db->reset_query();
	return $query->result_array();

								 }


 public function insert(){
	 
 $ParentID       = $this->input->post('parent_id');
 $StudentDept    = $this->input->post('check_id');
 $StudentNumber  = $this->input->post('sn');

	$data = array(
        'p_account_id'    =>   $ParentID,
        'student_number'  =>   $StudentNumber,
        'student_dept'    =>   $StudentDept 
);
$this->db->insert('parentportal_assign', $data);
                        }


 public function remove_student(){
	 
$ParentIDD  = $this->input->post('pp_id');

   $this->db->set('active', '0');
   $this->db->where('ppa_id', $ParentIDD);
   $this->db->update('parentportal_assign');
   $this->db->reset_query();
 
	}
   




}
?>
