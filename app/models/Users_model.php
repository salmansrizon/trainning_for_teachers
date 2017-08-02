<?php

class Users_model extends CI_Model{


	public function get_user($user_name='',$password=''){

		$this->db->select('*');
		$this->db->from('users');
	    $this->db->where('user_name', $user_name );
	    $this->db->where('password', $password );
	    $query = $this->db->get();

		return $query->row();
	}

	public function create($data){
		$this->db->insert('users',$data);
        return $this->db->insert_id();
	}


	public function get(){

		$sql = "SELECT u.* FROM `users` AS u WHERE u.`user_name` != 'admin'";

	    $query = $this->db->query($sql);

        $result = $query->result_array();
        return $result;
	}

	public function _get($id){

		$sql = "SELECT u.* FROM `users` AS u WHERE u.`id` = $id";

	    $query = $this->db->query($sql);

        $row = $query->row();
        return $row;
	}

	public function update($id,$data){

		$this->db->where('id', $id);
        $this->db->update('users',$data);
	}

	public function delete($id){
		$this->db->where('id', $id);
        $this->db->delete('users');
	}


}