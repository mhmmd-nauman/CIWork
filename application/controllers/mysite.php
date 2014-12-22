<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mysite extends CI_Controller {
	
	function __construct()
    {
      parent::__construct();
	  $this->load->helper("html","url");
	  $this->load->database();
      $this->load->model('Mysitemodel');
	  
    }

	public function index()
	{
		$this->home();
		//echo "ddd";
		$this->load->helper("form");
		$this->load->helper("html","url");
        	
	}
	public function home()
	{
		
		$this->load->view("front_view/cssfile.php");
		$this->load->view("front_view/header");
		$this->load->view("front_view/navbar");
		$this->load->view("front_view/slider");
		$this->load->view("front_view/home_page");
		$this->load->view("front_view/footer");
		$this->load->view("front_view/jsfile");
	}
	
	
	
	public function admin($page="")
	{
		$data=array(
		     'page' => $page,
		);
		$this->load->view("admin/cssfile");
		$this->load->view("admin/headerfile");
		$this->load->view("admin/mainsidebar", $data);
		$this->load->view("admin/$page", $data);
		$this->load->view("admin/footer");
		$this->load->view("admin/jsfile");
		if(isset($_POST['save_core_bussiness']))
		{
		         $data_core_bussiness=array(
				 
				               'icon'  =>$this->input->post('icon_core_bussiness'),
							   'title' =>$this->input->post('title_core_bussiness'),
							   'url'   =>$this->input->post('url_core_bussiness')
							   
				 );	
				 $this->load->model('mysitemodel');
				 $this->mysitemodel->insert_data_core_bussines($data_core_bussiness);
		}
		
    }
	public function mytable()
	{
	       
		 $this->load->model('mysitemodel');
		 $this->mysitemodel->mytable();
	}
	
	
	
	
	
	  
}