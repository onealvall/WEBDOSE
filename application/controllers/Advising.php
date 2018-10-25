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
        $this->load->model('Advising_Model/Student_Model');
    }
    
    public function index()
    {
        //get legend 
        $this->data['legend'] = $this->Schedule_Model->get_legend();
        //get time
        $this->data['time'] = $this->Schedule_Model->get_time();
        //get day

        $this->render($this->set_views->advising());

    }

    public function get_student_info()
    {
        if (($this->input->get('value') === NULL) OR (! is_numeric($this->input->get('value')))) 
        {
            # code...
            //redirect('Advising');
            echo "error:data is invalid";
        }

        //get student info by reference no
        $student_info = $this->Student_Model->get_student_info_by_reference_no($this->input->get('value'));
        if ($student_info == NULL) 
        {
            # code...
            //get student info by student no
            $student_info = $this->Student_Model->get_student_info_by_student_no($this->input->get('value'));
        }
        if ($student_info == NULL) 
        {
            # code...
            //redirect('Advising');
            echo "error: reference number or student number is invalid ";
        }

        //$array_output = array('' => , );

        //get student current year
        $student_year = $this->Student_Model->get_student_info_by_reference_no($student_info[0]['Reference_Number']);

        //check if student is approved by guidance for advising
        if (($student_info[0]['Guidance_Approval'] === 0) && ($student_year === 1) ) 
        {
            # code...
            //redirect('Advising');
            echo "error: proceed to guidance for advising approval ";
        }

        //check if student is new enrollee
        if ($student_info[0]['Student_Number'] === 0) 
        {
            # code...
            
        }






    }

    public function get_time()
    {
        if (($this->input->get('check') ==! 1) OR (! is_numeric($this->input->get('check')))) 
        {
            # code...
            //redirect('Advising');
            echo "error";
        }

        $array_time = $this->Schedule_Model->get_time();
        echo json_encode($array_time);
        //echo 'yes';

    }

    public function get_sched_list()
    {
        if (($this->input->get('schedId') === NULL) OR (! is_numeric($this->input->get('schedId')))) 
        {
            # code...
            //redirect('Advising');
            echo "error";
        }

        $array_schedule_list = $this->Schedule_Model->get_sched_list($this->input->get('schedId'));
        echo json_encode($array_schedule_list);
        //echo "error";
    }
}
