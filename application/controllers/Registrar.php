<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends MY_Controller  {

	
	function __construct() {
        parent::__construct();
        $this->load->library('set_views');
        $this->load->model('Registrar_Models/Room_Model');
        $this->load->model('Registrar_Models/Actionlogs_Model');
        
    }	
    
	public function RoomView()
	{
      $this->data['time'] = $this->Room_Model->Get_time();
      $this->data['Room'] = $this->Room_Model->Get_room();
      $this->render($this->set_views->room_view());
    }
    
    public function Create_Sched()
	{
     $this->data['time'] = $this->Room_Model->Get_time();
      $this->render($this->set_views->create_sched());
    }
    
    public function Activity_Logs()
	{
      $this->data['user'] = $this->Actionlogs_Model->Get_user();
      $this->data['get_table'] = $this->Actionlogs_Model->Get_table();
      $this->render($this->set_views->action_logs());
	}




  






 




}
?>
