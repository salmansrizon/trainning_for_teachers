<?php

class Batch_model extends CI_Model{


	public function get($id=''){

		$this->db->select('*');
		$this->db->from('batch_schedule');
	    $this->db->where('course_id', $id );
	    $query = $this->db->get();

        $result = $query->result_array();
        return $result;

	}

}