<?php

class Member_model extends CI_Model{
	
	function get(){
		$res = $this->db->get('tblanggota');
		return $res->result();
	}
}