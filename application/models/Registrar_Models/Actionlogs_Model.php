<?php


class Actionlogs_Model extends CI_Model{
  
  

public function Get_user(){
  $this->db->select('*');
  $this->db->group_by('UserName');
  $this->db->where('UserName !=','');
  $this->db->from('Action_Logs');
  $query = $this->db->get();
  return $query;
	                           
}


public function Get_table(){
  $user    =   $this->input->post('user');
  $from    =   $this->input->post('from');
  $to      =   $this->input->post('to');
  $submit  =   $this->input->post('search_button');


  $this->db->select('*');
  $this->db->from('Action_Logs');

  if(isset($submit)){
    $this->db->where('UserName != ', '0');
    if(isset($from,$t0)){
    $this->db->where('TimeofAction BETWEEN "'. date('Y/m/d H:i:s A', strtotime($from)). '" and "'. date('Y/m/d H:i:s A', strtotime($to)).'"');
    }
    if(isset($user)){
      $this->db->where('UserName',$user);
    }
  }
  else{
    $this->db->where('UserName !=','');
    
  }
  $query = $this->db->get();
  return $query;
	                           
}



                          
}
?>
