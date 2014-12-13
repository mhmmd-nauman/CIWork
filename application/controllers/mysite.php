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
						    'upload_path'   => "./asset/img",
							'allowed_types' => "gif|jpg|png",
							'max_size'      => "10000",
							'max_width'     => "1024",
							'max_height'    => "768",
							'encrypt_name'  => true,
							'remove_spaces' => TRUE,
							'overwrite'     => false,
				);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('catimage')) {
					echo 'error';
					exit;
									    
				}
				$upload_data = $this->upload->data();
                $file = $upload_data['orig_name'];				
		        if(file_exists($file))
				{
				$data_category = array(
				'category_group_id' => $this->input->post('catgroup_id'),
				'category_name'     => $this->input->post('catname'),
				'category_img'      => $file,
				'category_descrip'  => $this->input->post('catdescrip'),
				);
				$this->load->model('mysitemodel');
				$this->mysitemodel->form_insert_category($data_category);
				}
				else
				{
				  echo "This image already exist choose another image";	
				}
        
	  }
		
	}
	public function viewrecord()
	{
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("viewrecord");
		$this->load->view("site_footer");
		
	}
	public function admin()
	{
		$data = array(
               'title' => 'My Title',
               'heading' => 'My Heading',
               'message' => 'My Message'
          );
        $this->load->view("admin/cssfile");
		$this->load->view("admin/headerfile");
		$this->load->view("admin/mainsidebar");
		$this->load->view("admin/dashboard_content", $data);
		$this->load->view("admin/footer");
		$this->load->view("admin/jsfile");
		
    }
	public function index_content()
	{
		$this->load->view("admin/cssfile");
		$this->load->view("admin/headerfile");
		$this->load->view("admin/mainsidebar");
		//$this->load->view("admin/index_content");
		$this->load->view("admin/footer");
		$this->load->view("admin/jsfile");
		
    }
	public function news_content()
	{
		$this->load->view("admin/cssfile");
		$this->load->view("admin/headerfile");
		$this->load->view("admin/news_content");
		$this->load->view("admin/footer");
		$this->load->view("admin/jsfile");
		
    }
	
	
	  
}