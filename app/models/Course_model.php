<?php

class Course_model extends CI_Model{


	public function get(){

		$this->db->select('*');
		$this->db->from('course');
	    $query = $this->db->get();

        $result = $query->result_array();
        return $result;

	}
	public function get_exam_link($id){

		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('id',$id);
	    $query = $this->db->get();

        $row = $query->row();
        return $row;

	}

}