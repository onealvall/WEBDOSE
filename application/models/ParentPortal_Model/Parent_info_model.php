<?php


class Parent_info_model extends CI_Model{
	
  
public function parentinfo(){

	$Student_number = $this->input->get('sn');

	$this->db->select('*');
	$this->db->from('Student_Info');
	$this->db->where('Student_Number !=', 0);
	$this->db->where('Student_Number', $Student_number);
	$query = $this->db->get();
	
	// reset query
	$this->db->reset_query();
	return $query->result_array();

							}

public function update_parentinfo(){
	 
		$id             = $this->input->get('sn');

		$fathername     = $this->input->get('father_name');
		$fatheroccup    = $this->input->get('father_occ');
		$father_no      = $this->input->get('father_no');
		$father_adds    = $this->input->get('father_address');
		$father_email   = $this->input->get('father_email');

		$mothername     = $this->input->get('mother_name');
		$motheroccup    = $this->input->get('mother_occ');
		$mother_no      = $this->input->get('mother_no');
		$mother_adds    = $this->input->get('mother_address');
		$mother_email   = $this->input->get('mother_email');
   
	    $data = array(

			'Father_Name'       => $fathername,
			'Father_Occupation' => $fatheroccup,
			'Father_Contact'    => $father_no,
			'Father_Address'    => $father_adds,
			//'Father_Email'      => $father_email,
			'Mother_Name'       => $mothername,
			'Mother_Occupation' => $motheroccup,
			'Mother_Contact'    => $mother_no,
			'Mother_Address'    => $mother_adds,
			//'Father_Email'      => $father_email,

	            );
	
	$this->db->where('Student_Number', $id);
	$this->db->update('Student_Info', $data);
	// reset query
	$this->db->reset_query();
								  }


public function parent_status(){


								
$this->db->select('Parents_Status');
$this->db->from('Student_Info');
$query = $this->db->get();
									
// reset query
$this->db->reset_query();
return $query->result_array();
								
															}

					  


}
?>
