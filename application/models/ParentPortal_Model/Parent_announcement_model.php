<?php

class Parent_announcement_model extends CI_Model{
	
public function p_announcement()
{
	$this->db->select('*');
	$this->db->from('parent_announcement');
	$this->db->where('valid', 1);
	$query = $this->db->get();
	
	// reset query
	$this->db->reset_query();
	return $query->result_array();
}

public function p_announcement_insert()
{
	$title = $this->input->post('title');
	$description = $this->input->post('description');

	$now = date('Y-m-d H:i:s');
	$data = array(
        'title_announce' => $title,
        'description'    => $description,
        'date'            => $now,
);
$this->db->insert('parent_announcement', $data);

}

public function p_announcement_delete()
{
$announcement_id = $this->input->post('ai');
$this->db->set('valid','0');
$this->db->where('p_announcement_id', $announcement_id);
$this->db->update('parent_announcement');
}


								 

					

}
?>
