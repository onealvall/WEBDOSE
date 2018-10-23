<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller  {

	
	function __construct() {
        parent::__construct();
        $this->load->library('set_views');
        $this->load->library('email');
        $this->load->library('pagination');
        $this->load->library('session');
      
      //  $this->load->library('Ajax_pagination');
        $this->perPage = 2;

        $this->load->model('ParentPortal_Model/Parent_announcement_model');
        $this->load->model('ParentPortal_Model/Parentreset_password_model');
        $this->load->model('ParentPortal_Model/Parentregister_model');
        $this->load->model('ParentPortal_Model/Parent_feedback_model');
        $this->load->model('ParentPortal_Model/Parent_searchstudent_model');
        $this->load->model('ParentPortal_Model/Parent_info_model');
        $this->load->model('ParentPortal_Model/Parent_assign_model');

        $this->load->model('Registrar_Models/Registrar_Model');
       
        
    }	
    
	public function index()
	{
    /*Admin Login*/ $this->login();
	}

    public function Dashboard()
	{
     $this->render($this->set_views->admin_dashboard());
	}
    
    
    /*Admission */

         /*Parent Portal */

    /*Parent Monitoring Module */
            public function Parent_Monitoring()
            {
            $this->data['Parent_counts'] = $this->Parentregister_model->parent_counts();
            $config = array();
            $config['base_url'] = base_url().'index.php/Admin/Parent_Monitoring';
            $config['total_rows'] = $this->Parentregister_model->count_parent();
            $config['per_page'] = 5;
            // $config['num_links'] = 5;
            $config['full_tag_open'] ="<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] ="<li>";
            $config['num_tag_close'] ="</li>";
            $config['cur_tag_open'] ="<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] ="<span class=''sr-only></span></a></li>";
            $config['next_tag_open'] ="<li>";
            $config['next_tag1_close'] ="</li>";
            $config['prev_tag_open'] ="<li>";
            $config['prev_tag1_close'] ="</li>";
            $config['first_tag_open'] ="<li>";
            $config['first_tag1_close'] ="</li>";
            $config['last_tag_open'] ="<li>";
            $config['last_tag1_close'] ="</li>";
            $this->pagination->initialize($config);
            $this->$data['parent'] = $this->Parentregister_model->fetch_parent($config['per_page'],$this->uri->segment(3));
            $this->render($this->set_views->parentmonitoring());
            }
    /*Parent Monitoring Module */

    /*Parent Announcement Module */

            public function Parent_Announcement()
            {
            $this->data['announcement'] = $this->Parent_announcement_model->p_announcement();
            $this->render($this->set_views->parent_announcements());
            }

            public function Announcement_creat()
            {
            $this->render($this->set_views->parent_announcements_create());
            }
            public function Announcement_insert()
            {
            $this->Parent_announcement_model->p_announcement_insert();
            redirect('/Admin/Parent_Announcement', 'refresh');
            }
            public function Announcement_edit()
            {
            $this->Parent_announcement_model->p_announcement_delete();
            redirect('/Admin/Parent_Announcement', 'refresh');
            }

            public function Announcement_delete()
            {
            $this->Parent_announcement_model->p_announcement_delete();
            redirect('/Admin/Parent_Announcement', 'refresh');
            }

        
    /*Parent Announcement Module */

    public function Feedback()
    {
    $this->render($this->set_views->parentfeedback());   
    }
    public function ajax_feedback()
    {
    $result =  $this->$data['Feedback'] = $this->Parent_feedback_model->feedback();
    echo json_encode($result);
   }
   public function showfeedback(){
    $result = $this->Parent_feedback_model->show_feedback();
    echo json_encode($result);
}

    /*Parent Search Student Module */

            public function Searchstudents()
            {
            $this->render($this->set_views->student_search());   
            }
            public function ajax_student()
            {
            $result =  $this->$data['Student'] = $this->Parent_searchstudent_model->searchstudents();
            echo json_encode($result);
            }
            public function edit_Student(){
                $result = $this->Parent_searchstudent_model->editStudent();
                echo json_encode($result);
            }
            public function update_Student(){
                $result = $this->Parent_searchstudent_model->updateStudent();
                $msg['success'] = false;
                $msg['type'] = 'update';
                if($result){
                $msg['success'] = true;
                        }
                echo json_encode($msg);
            }

    /*Parent Search Student Module */
 
    /*Parent Sent Email */
    
     /*Parent Sent Email */
        


    public function Parent_Info()
         {
        // $this->data['parentstatus'] = $this->Parent_info_model->parent_status();
         $this->data['parent_info'] = $this->Parent_info_model->parentinfo();
         $this->render($this->set_views->parentinfo());
         }


         public function Parent_updateinfo()
         {
         $this->data['updateinfoparent'] = $this->Parent_info_model->update_parentinfo();
         redirect('/Admin/Parent_Info', 'refresh');
         } 


    /* Parent Reset Password */

         public function Parent_reset()
         {
         $this->data['assignstudent'] = $this->Parentreset_password_model->parent();
         $this->render($this->set_views->resetpassword());
         }
         
         public function Parent_resetpassword()
         {
         $this->Parentreset_password_model->reset_password();
          redirect('/Admin/Parent_reset', 'refresh');
         }
    /* Parent Reset Password */


        /* Parent Assign Student */

         public function Parent_asignstudent()
         {
         $this->data['assignstudent'] = $this->Parent_assign_model->parent_assign();
         $this->render($this->set_views->assign_student());
         }

         public function Student_Assign()
         {
         $this->render($this->set_views->assign_studentAssign());
         }

         public function Insert_Student()
         {
         $this->Parent_assign_model->insert();   
         redirect('/Admin/Parent_asignstudent', 'refresh'); 
         }

         public function remove_Student()
         {
         $this->Parent_assign_model->remove_student();   
         redirect('/Admin/Parent_asignstudent', 'refresh'); 
         }

         public function Student_Unassign()
         {
         $this->data['student_assign'] = $this->Parent_assign_model->assign_student();
         $this->render($this->set_views->assign_studentUnssign());
         }

        /* Parent Assign Student */

        

      /*Admission */
         /*Parent Portal */

        
   

/*Registrar */
      public function reportenrollstudents()
      {
         $this->data['GetLatestSem']            = $this->Registrar_Model->Get_Latest_SEM();
         $this->data['GetLatestSchoolYear']     = $this->Registrar_Model->Get_Latest_School_Year();
         $this->data['Get_SEM']                 = $this->Registrar_Model->GetSEM();
         $this->data['Get_YEAR']                = $this->Registrar_Model->GetYEAR();
         $this->data['Get_Nationality']         = $this->Registrar_Model->Get_Nationality();
         $this->data['Get_Couse']               = $this->Registrar_Model->Get_Course();
         $this->data['Get_YearLevels']          = $this->Registrar_Model->GetYearLevel();
         $this->data['Get_Major']               = $this->Registrar_Model->GetMajor();
         $this->data['Get_Gender']              = $this->Registrar_Model->Get_Gender();
         $this->data['GetSection_Names']        = $this->Registrar_Model->GetSection_Name();
         $this->data['GetSBarangay']            = $this->Registrar_Model->Get_Barangay();
         $this->data['GetSProvince']            = $this->Registrar_Model->Get_province();
         $this->data['GetMunicipality']         = $this->Registrar_Model->Get_Municipality();
         $this->data['GetHS']                   = $this->Registrar_Model->Get_highschool();

         $sy = $this->input->post('School_year');
         $sm = $this->input->post('Sem');
         $nt = $this->input->post('National');
         $pmajor = $this->input->post('Program');
         $major = $this->input->post('mjr');
         $gen = $this->input->post('Gender');
         $Yl = $this->input->post('Yearlevel');
         $Sec = $this->input->post('Section');
         $submit = $this->input->post('search_button');

         $sess = array(

            'sy' => $this->input->post('School_year'),
            'sm' => $this->input->post('Sem'),
            'nt' => $this->input->post('National'),
            'pmajor' => $this->input->post('Program'),
            'major' => $this->input->post('mjr'),
            'gen' => $this->input->post('Gender'),
            'Yl' => $this->input->post('Yearlevel'),
            'Sec' => $this->input->post('Section'),
            'submit' => $this->input->post('search_button'),
         );
         $this->session->set_userdata($sess);
         
         $this->$data['GetStudent'] = $this->Registrar_Model->GetStudentList($sy,$sm,$nt,$pmajor,$major,$gen,$Yl,$Sec,$submit); 
         $this->render($this->set_views->r_enrolled_student()); 
      }

      public function test(){

        $sy = $this->session->userdata('sy');
        $sm = $this->session->userdata('sm');
        $nt = $this->session->userdata('nt');
        $pmajor = $this->session->userdata('pmajor');
        $major = $this->session->userdata('major');
        $gen = $this->session->userdata('gen');
        $Yl = $this->session->userdata('Yl');
        $Sec = $this->session->userdata('Sec');
        $submit = $this->session->userdata('submit');


        $this->load->library("Excel");
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0)->mergeCells('D1:F1','G1:J1','K1:M1');
        $object->setActiveSheetIndex(0);
        $table_columns1 = array("","","", "STUDENT`S NAME", "", "","STUDENT`S PROFILE","","","","","","","","","","","","PERMANENT ADDRESS","","");
        $table_columns = array("SEQ","LEARNER`S REFERENCE NO.","STUDENT ID", "LAST NAME", "GIVEN NAME", "MIDDLE NAME","SEX","BIRTHDATE","COMPLETE PROGRAM NAME","YEAR LEVEL","FATHER`S NAME","MOTHER`S MAIDEN NAME","DSWD HOUSEHOLD NO.","HOUSEHOLD PER CAPITA INCOME","STREET & BARANGAY","TOWN/CITY/MUN","PROVINCE","ZIPCODE","TOTAL ASSESSMENT","DISABILITY");

        $column = 0;

        foreach($table_columns1 as $field)
        {
         $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
         $column++;
        }
        $column = 0;
        foreach($table_columns as $field)
        {
         $object->getActiveSheet()->setCellValueByColumnAndRow($column, 2, $field);
         $column++;
        }
      
        $employee_data = $this->Registrar_Model->GetStudentList($sy,$sm,$nt,$pmajor,$major,$gen,$Yl,$Sec,$submit);
      
        $excel_row = 3;
        $count = 1;
        foreach($employee_data->result_array() as $row)
        {
         $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $count);
         $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['Reference_Number']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['Student_Number']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['Last_Name']);  
         $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['First_Name']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['Middle_Name']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['Gender']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['Birth_Date']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['Course']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['YearLevel']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['Father_Name']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row['Mother_Name']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, 'N/A');
         $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, 'N/A');
         $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row['Address_Barangay']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row['Address_City']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row['Address_Province']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row['Address_Zip']);
         $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, 'N/A');
         $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, 'N/A');
         $count = $count + 1;
         $excel_row++;
        }
      
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Student_Data.xls"');
        $object_writer->save('php://output');
       }
      

      
      
 /*Registrar */




}
?>
