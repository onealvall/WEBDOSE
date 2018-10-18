<?php


class Parentregister_model extends CI_Model{
	
	
public function count_parent(){
	return $this->db->count_all('parent_accounts');
		   
										 }

public function fetch_parent($limit,$offset){
		$sn = $this->input->post('s_n');
		$this->db->limit($limit,$offset);
		$this->db->select('*');
		$this->db->from('parent_accounts');
		$this->db->Where('active', 1);
		$this->db->like('p_username',$sn);
		$this->db->or_like('p_fname',$sn);
		$this->db->or_like('p_lname',$sn);
		$this->db->or_like('p_email',$sn);
				$query = $this->db->get();
										   
				if($query->num_rows()> 0){
				return $query->result();
						}else{
				return $query->result();
							}
										 }
																		   

				   

		// Total counts of Parents						  
public function parent_counts(){
                  
	$this->db->select('*');
	$this->db->from('parent_accounts');
	$this->db->where('active', 1);
	$this->db->group_by("p_fname");
	$query = $this->db->get();
	
	// reset query
	$this->db->reset_query();
	
	return $query->num_rows();

                                  }							  

}
?>
