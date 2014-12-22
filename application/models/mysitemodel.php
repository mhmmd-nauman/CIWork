<?php
class Mysitemodel extends CI_Model{
    function __construct() 
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper("form");
	}
    function insert_data_core_bussines($data_core_bussiness)
	{
		$this->db->insert('core_bussiness', $data_core_bussiness);
	}
	function mytable()
	{
			$this->load->library('migration');
			if ( ! $this->migration->current())
			{
				show_error($this->migration->error_string());
			}
			else
			{
			   echo "success";	
			}	
	}
}
?>