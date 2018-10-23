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
    }
    
    public function index()
    {
        $this->render($this->set_views->wr_enrolled_student());
    }
}