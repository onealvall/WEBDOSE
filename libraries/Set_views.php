<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class set_views 
{
	
	public function admin_dashboard()
	{
		return 'body/dashboard';
	}
	
	 /*Admission */
		 /*Parent Portal */
	public function parentfeedback()
	{
	 return 'body/ParentPortal/Parent_Feedback';
	 }		 
	public function parentmonitoring()
	{
	 return 'body/ParentPortal/Parent_Monitoring';
	}
	public function parent_announcements()
	{
	 return 'body/ParentPortal/Announcement';
	}

	public function parent_announcements_create()
	{
	 return 'body/ParentPortal/Announcement_creat';
	}

	public function student_search()
	{
	 return 'body/ParentPortal/Search_Student';
	}

	public function parentinfo()
	{
	 return 'bbody/ParentPortal/Parent_info';
	}

	public function resetpassword()
	{
	 return 'body/ParentPortal/Parent_resetpassword';
	}

	public function assign_student()
	{
	 return 'body/ParentPortal/Parent_Assign_student';
	}
	
	public function assign_studentUnssign()
	{
	 return 'body/ParentPortal/Parent_Assign_studentUnassign';
	}
	
	public function assign_studentAssign()
	{
	 return 'body/ParentPortal/Parent_Assign_studentAssign';
    }
	/*Admission */
	
	

	/*Registrar */

	public function r_enrolled_student()
	{
		 return 'body/registrar/Enrolled_students';
	}

	/*Registrar */


	/*Advising */

	public function  advising()
	{
		 return 'body/Advising/Advising';
	}

		/*Advising */
}
