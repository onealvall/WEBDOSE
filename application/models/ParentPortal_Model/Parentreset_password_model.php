<?php


class Parentreset_password_model extends CI_Model{
	
	
public function parent(){

	$Parentname = $this->input->get('data');

	$this->db->select('*');
	$this->db->from('parent_accounts');
	$this->db->where('active', 1);
	$this->db->where('p_lname', $Parentname);
	$query = $this->db->get();
	
	// reset query
	$this->db->reset_query();
	return $query->result_array();
								 }

public function reset_password(){

	$Parent_id = $this->input->get('p_id');

	$this->db->set('p_password','sdca2018');
	$this->db->where('p_account_id', $Parent_id);
    $this->db->update('parent_accounts');
	// reset query
	$this->db->reset_query();

								 }
								 

					

}
?>
