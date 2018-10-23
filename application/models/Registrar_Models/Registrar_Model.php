<?php


class Registrar_Model extends CI_Model{
  
  

public function Get_Latest_SEM(){
  $this->db->select('Semester');
  $this->db->from('Legend');
  $query = $this->db->get();
  return $query;
	
                                  
}

public function Get_Latest_School_Year(){
  $this->db->select('*');
  $this->db->from('Legend');
  $query = $this->db->get();
  return $query;
                                  
}

public function GetSEM(){
  $this->db->select('Semester');
  $this->db->group_by('Semester'); 
  $query = $this->db->get('Fees_Enrolled_College');
  return $query;
                                  
}

public function GetYEAR(){
  $this->db->select('schoolyear');
  $this->db->group_by('schoolyear'); 
  $query = $this->db->get('Fees_Enrolled_College');
  return $query;
                                  
}


public function Get_Nationality(){
  $this->db->select('Nationality');
  $this->db->group_by("Nationality");
  $this->db->from('Student_Info');
  $query = $this->db->get();
  return $query;
                                  
}


public function Get_Course(){
  $this->db->select('Course');
  $this->db->group_by("Course");
  $this->db->where('Course != ', 'N/A');
  $this->db->from('Student_Info');
  $query = $this->db->get();
  return $query;
                                  
}


public function Get_Gender(){
  $this->db->select('Gender');
  $this->db->group_by('Gender');
  $this->db->where('Gender != ', 'N/A');
  $this->db->where('Gender != ', '');
  $this->db->where('Gender != ', '0');
  $this->db->where('Gender != ', 'x');
  $this->db->from('Student_Info');
  $query = $this->db->get();
  return $query;
                                  
}

public function GetMajor(){
  $this->db->select('Program_Major,ID');
  $this->db->where('Program_Major != ', 'N/A');
  $this->db->group_by('Program_Major');
  $this->db->from('Program_Majors');
  $query = $this->db->get();
  return $query;
                                  
}


public function GetYearLevel(){
  $this->db->select('Year_Level');
  $this->db->group_by('Year_Level');
  $this->db->where('Active','1');
  $this->db->where('Year_Level != ', 'N/A');
  $this->db->from('Sections');
  $query = $this->db->get();
  return $query;
                                  
}

public function GetSection_Name(){
  $this->db->select('Section_Name');
  $this->db->group_by('Section_Name');
  $this->db->where('Active','1');
  $query = $this->db->get('Sections');
  return $query;
                                  
}



public function Get_Barangay(){
  $this->db->select('*');
  $query = $this->db->get('refbrgy');
  return $query;
                                  
}


public function Get_province(){
  $this->db->select('*');
  $this->db->order_by('provDesc','ASC');
  $this->db->where('provDesc != ', '0');
  $query = $this->db->get('refprovince');
  return $query;
                                  
}

public function Get_Municipality(){
  $this->db->select('*');
  $query = $this->db->get('refcitymun');
  return $query;
                                  
}


public function Get_highschool(){
  $this->db->select('Secondary_School_Name');
  $this->db->group_by('Secondary_School_Name');
  $this->db->where('Secondary_School_Name != ', 'N/A');
  $this->db->where('Secondary_School_Name != ', 'x');
  $this->db->where('Secondary_School_Name != ', '.');
  $this->db->where('Secondary_School_Name != ', '-');
  $this->db->where('Secondary_School_Name != ', '');
  $this->db->where('Secondary_School_Name != ', '123');
  $query = $this->db->get('Student_Info');
  return $query;
                                  
}





public function GetStudentList($sy,$sm,$nt,$pmajor,$major,$gen,$Yl,$Sec,$submit){



    $this->db->select('*');
    $this->db->from('Fees_Enrolled_College');
    $this->db->join('Student_Info', 'Student_Info.Reference_Number = Fees_Enrolled_College.Reference_Number');
    $this->db->join('Program_Majors','Program_Majors.ID = Student_Info.Major');
  //  $this->db->join('Curriculum_Info','Curriculum_Info.Curriculum_ID = Student_Info.Curriculum');

    if(isset($submit)){
      $this->db->where('Student_Info.Student_Number != ', '0');
      //Where Conditions
      if(isset($sm)){
      //  echo 'With sy <br>';
        $this->db->where('Fees_Enrolled_College.semester',$sm);
      }
      if(isset($sy)){
      //  echo 'With sm <br>';
        $this->db->where('Fees_Enrolled_College.schoolyear',$sy);
      }
      if(isset($nt)){
      //  echo 'With nt <br>';
        $this->db->where('Student_Info.Nationality',$nt);
      }
      if(isset($major)){
     //  echo 'With major <br>';
        $this->db->where('Student_Info.Major',$major);
      }
      if(isset($pmajor)){
       // echo 'With major <br>';
         $this->db->where('Student_Info.Course',$pmajor);
      }
      if(isset($gen)){
        // echo 'With major <br>';
          $this->db->where('Student_Info.Gender',$gen);
       }
       if(isset($Yl)){
        // echo 'With major <br>';
          $this->db->where('Fees_Enrolled_College.YearLevel',$Yl);
       }
     
    }
    else{
      $this->db->where('Student_Info.Student_Number != ', '0');
      $this->db->where('Student_Info.Student_Number' , '');
      
    }
  
    $this->db->order_by('Student_Info.Last_Name', 'ASC');
    $this->db->group_by('Student_Info.Student_Number');
    $query = $this->db->get();

    if($query->num_rows()> 0){
      return $query;
          }else{
      return $query;
            }
}
  
public function count_gender(){
 
  return $this->db->count_all('Student_Info');

}

public function count_student(){
 
  return $this->db->count_all('Student_Info');

}

                          
}
?>
