<?php
class Model_page extends CI_Model
{

	function tampil($table){
		return $this->db->get_where($table);
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function nilai($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}