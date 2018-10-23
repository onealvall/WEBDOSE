<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $template = array();
    public $data = array();
    public $middle = '';
    private $admin_data;

	function __construct() {

        parent::__construct();
        
        $this->data['message'] = '';

        $this->load->helper(array('form', 'language', 'url'));

        //$this->load->library('set_custom_session');
        $this->data['admin_data'] = NULL;
        

    }
	

    public function render($middleParam = '')
    {

        if ($middleParam == '')
        {
            $middleParam = $this->middle;
        }

      //  $this->data['admin_data'] = $this->set_custom_session->navbar_session();

           $this->template['header'] = $this->load->view('layout/header.php', $this->data, true);
           $this->template['navbar'] = $this->load->view('layout/nav.php', $this->data, true);
           $this->template['sidebar'] = $this->load->view('layout/side.php', $this->data, true);
           $this->template['middle'] = $this->load->view($middleParam, $this->data, true);
           $this->template['footer'] = $this->load->view('layout/footer.php', $this->data, true);
           $this->load->view('layout/front', $this->template);
    }

     //  ADMIN DOSE LOGIN
    public function login()
    {
     
           $this->template['header'] = $this->load->view('login/Login_header.php');
           $this->template['body'] = $this->load->view('login/Admin_login.php');
           $this->template['sidebar'] = $this->load->view('login/Login_footer.php');

    }

		

	
	
	
	
	
}
?>