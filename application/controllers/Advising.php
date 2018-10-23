<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Advising extends MY_Controller  {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('set_views');
        $this->load->library('email');
        $this->load->library('pagination');
        $this->load->library('session');

        $this->load->model('Advising_Model/Schedule_Model');
    }
    
    public function index()
    {
        //get time
        $this->data['time'] = $this->Schedule_Model->get_time();
        //get day

        $this->render($this->set_views->advising());

    }
}
