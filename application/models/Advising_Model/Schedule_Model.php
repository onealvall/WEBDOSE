<?php


class Schedule_Model extends CI_Model{

    public function get_time()
    {
        $this->db->select('*');
        $this->db->from('Time');

        $query = $this->db->get();

        // reset query
        $this->db->reset_query();

        return $query->result_array();
    }

    public function get_legend()
    {
        $this->db->select('*');
        $this->db->from('Legend');

        $query = $this->db->get();

        // reset query
        $this->db->reset_query();

        return $query->result_array();
    }

    //list of schedule of given sched_code
    public function get_sched_list($sched_code)
    {
        $this->db->select('*');
        $this->db->from('sched_display');
        $this->db->where('Sched_Code', $sched_code);

        $query = $this->db->get();

        // reset query
        $this->db->reset_query();

        return $query->result_array();
    }
}