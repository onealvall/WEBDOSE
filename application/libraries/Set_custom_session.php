<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_custom_session 
{

	protected $CI;

	public function __construct()
    {
        // Do something with $params
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->helper('url');

    }

    public function admin_session()
	{
		
		if ( $this->CI->session->has_userdata('logged_in' ) )
		{
			# code...
			

			$data = array( 
				'employee_no' => $this->CI->session->userdata('logged_in')['employee_no'],
				'admin_fname' => $this->CI->session->userdata('logged_in')['first_name'],
				'admin_lname' => $this->CI->session->userdata('logged_in')['last_name'],
				'admin_type' => $this->CI->session->userdata('logged_in')['admin_type']
			);

			return $data;
		}
		else
		{
			redirect('/admin');
		}
	}

}