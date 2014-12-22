<?php defined('BASEPATH') OR exit('No direct script access allowed');


	
class Mysite extends CI_Controller {
	
	function __construct()
    {
      parent::__construct();
    }

	public function index()
	{
		   $this->table();
	}
	public function table()
	{
	        $this->load->migration('migration/001_add_blog');
			$this->load->library('migration');
			
			if ( ! $this->migration->current())
			{
				show_error($this->migration->error_string());
			}
        		
	}
}