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

	


	/*Advising */

	public function  advising()
	{
		 return 'body/Advising/Advising';
	}

	/*Advising */


	/*Room Viewing*/

	public function  room_view()
	{
		 return 'body/registrar/Room';
	}

	/*Room Viewing*/


	/*Create Sched*/

	public function  create_sched()
	{
		 return 'body/registrar/Create_Sched';
	}

	/*Create Sched*/


	/*Registrar Action Logs*/

	public function  action_logs()
	{
		 return 'body/registrar/Activity_logs';
	}

	/*Registrar Action Logs*/




/*Registrar */

}
