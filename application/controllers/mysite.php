<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mysite extends CI_Controller {
	
	function __construct()
    {
      parent::__construct();
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
		
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home");
		$this->load->view("site_footer");
	}
	public function about()
	{    
	    $this->load->helper("url");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
	public function contact()
	{
		$data["message"]="";
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact", $data);
		$this->load->view("site_footer");
		
	}
	public function send_email()
	{
	  $this->load->library("form_validation");
	  $this->form_validation->set_rules("fullname", "Full name", "required|alpha|xss_clean");
	  $this->form_validation->set_rules("email", "Email", "required|valid_email|xss_clean");
	  $this->form_validation->set_rules("message", "Message", "required|xss_clean");
	  if($this->form_validation->run()== FALSE)
	  {
		$data["message"]="";
	    $this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact", $data);
		$this->load->view("site_footer");		 
	  }
	  else
	  {
	    $data["message"]="Email send successfully"; 
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact", $data);
		$this->load->view("site_footer");
							$data_email=array(
									 'username' => $this->input->post('fullname'),
									 'email'    => $this->input->post('email'),
									 'message'  => $this->input->post('message')
								 );
								 $this->load->model('mysitemodel');
								 $this->mysitemodel->form_insert_email($data_email);	
	  }
	}
	public function editrecord()
	{
	  $this->load->library("form_validation");
	  $this->form_validation->set_rules("catgroup_id", "Group Id", "required|xss_clean");
	  $this->form_validation->set_rules("catname", "Category Name", "required|xss_clean");
	  
	  if($this->form_validation->run()== FALSE)
	  {
		$data["message"]="";
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("editrecord", $data);
		$this->load->view("site_footer");
	  }
	  else
	  {
	    $data["message"]="Data is inserted successfully";
	    $this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("editrecord", $data);
		$this->load->view("site_footer");
		
				$config = array(
					'upload_path'   => './asset/img',
					'allowed_types' => 'gif|jpg|png',
					'max_size'      => '100',
					'max_width'     => '1024',
					'max_height'    => '768',
					'encrypt_name'  => true,
				);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload()) {
					$error = array('error' => $this->upload->display_errors());
				   
				}
				$upload_data = $this->upload->data();
		
				$data_category = array(
				'category_group_id' => $this->input->post('catgroup_id'),
				'category_name'     => $this->input->post('catname'),
				'category_img'      => $this->input->post('catimage'),
				'category_descrip'  => $this->input->post('catdescrip')
				);
				$this->load->model('mysitemodel');
				$this->mysitemodel->form_insert_category($data_category);
        
	  }
		
	}
	public function viewrecord()
	{
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("viewrecord");
		$this->load->view("site_footer");
		
	}
	
	  
}