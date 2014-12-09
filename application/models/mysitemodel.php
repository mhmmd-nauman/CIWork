<?php
class Mysitemodel extends CI_Model{
    function __construct() 
	{
	parent::__construct();
	$this->load->database();
	}
    function form_insert($data)
	{
		$this->db->insert('category', $data);
	}
	
}
?>