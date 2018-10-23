<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Advising extends MY_Controller  {

	
	function __construct() {
        parent::__construct();
        $this->load->library('set_views');
      
        
    }	
    
	public function Scheduling()
	{
      $this->render($this->set_views->advising());
	}

  






 




}
?>
