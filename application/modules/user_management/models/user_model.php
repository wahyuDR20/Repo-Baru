<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

    public function __construct()
    {
        
    }

    public function getAll(){
    	$query = $this->db->get('user');
    	return $query->result_array();
    }

    public function getByUser($user){
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('username', $user);
    	$query=$this->db->get();
    	return $query->row_array();
    }

    public function input($data)
    {
    	return $this->db->insert('user', $data);
    }

    public function getByUsername($user){
    	$this->db->select('username');
    	$this->db->from('user');
    	$this->db->where('username', $user);
    	$query=$this->db->get();
    	return $query;
    }

    public function getUserPass($user_pass)
    {
        return $this->db->get_where('user', $user_pass);
    }

    public function getUserLevel($user_level_id){
        $this->db->select('user_level');
    	$this->db->from('user_level');
    	$this->db->where('id <>', $user_level_id);
    	$query=$this->db->get();
    	return $query;
    }

    public function getAllUserLevel(){
    	$query = $this->db->get('user_level');
    	return $query->result_array();
    }

    public function get_detail($id = NULL){
        $this->db->select('id');
        $this->db->from('user');
        $this->db->where('id', $id);
        $query=$this->db->get();
		return $query;
 
	}
}
