<?php

class Registration_model extends CI_Model{

	public function create($data){
		$this->db->insert('registration',$data);
        return $this->db->insert_id();
	}


	public function get(){

		$sql = "SELECT r.*, c.`course_name`,c.`exam_name`, b.`batch_name`  FROM `registration` AS r INNER JOIN `course` AS c ON r.`course_id` = c.`id` INNER JOIN `batch_schedule` AS b ON r.`batch_schedule_id` = b.`id`";

	    $query = $this->db->query($sql);

        $result = $query->result_array();
        return $result;

	}

	public function _get($id){

		$sql = "SELECT r.*, c.`course_name`, b.`batch_name`,b.`batch_start`,b.`batch_end` FROM `registration` AS r INNER JOIN `course` AS c ON r.`course_id` = c.`id` INNER JOIN `batch_schedule` AS b ON r.`batch_schedule_id` = b.`id` WHERE r.`id` = $id";

	    $query = $this->db->query($sql);

        $row = $query->row();
        return $row;

	}

	public function get_reg_number(){

		$sql = "SELECT COUNT(r.`id`) AS count FROM `registration` AS r";

	    $query = $this->db->query($sql);

        $row = $query->row();
        return $row;

	}

	public function delete($id){
		$this->db->where('id', $id);
        $this->db->delete('registration');
	}
	
}