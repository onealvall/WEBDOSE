<?php


class Student_Model extends CI_Model{

    public function get_student_year($reference_no)
    {
        $this->db->select('*');
        $this->db->from('Fees_Enrolled_College');
        $this->db->where('Reference_Number', $reference_no);
        $this->db->order_by('YearLevel', 'DESC');
        $query = $this->db->get();

        // reset query
        $this->db->reset_query();

        $array_result = $query->result_array();

        return $array_result[0]['YearLevel'];
    }

    public function get_student_info_by_reference_no($reference_no)
    {
        $this->db->select('*');
        $this->db->from('Student_Info');
        $this->db->where('Reference_Number', $reference_no);

        $query = $this->db->get();

        // reset query
        $this->db->reset_query();

        return $query->result_array();
    }

    public function get_student_info_by_student_no($student_no)
    {
        $this->db->select('*');
        $this->db->from('Student_Info');
        $this->db->where('Student_Number', $reference_no);

        $query = $this->db->get();

        // reset query
        $this->db->reset_query();

        return $query->result_array();
    }


}