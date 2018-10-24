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
}