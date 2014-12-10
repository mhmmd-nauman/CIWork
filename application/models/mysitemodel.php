<?php
class Mysitemodel extends CI_Model{
    function __construct() 
	{
	parent::__construct();
	$this->load->database();
	}
    function form_insert_category($data_category)
	{
		$this->db->insert('category', $data_category);
	}
	function form_insert_email($data_email)
	{
		$this->db->insert('email', $data_email);
	}
	
}
?>