<?php


class Room_Model extends CI_Model{
  
  

public function Get_time(){
  $this->db->select('*');
  $this->db->from('Time');
  $query = $this->db->get();
  return $query;
	                           
}


public function Get_room(){
  $this->db->select('*');
  $this->db->from('Room');
  $query = $this->db->get();
  return $query;
	                           
}


                          
}
?>
