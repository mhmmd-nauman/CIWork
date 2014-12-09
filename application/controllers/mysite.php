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
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact");
		$this->load->view("site_footer");
	}
	public function editrecord()
	{
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("editrecord");
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
		
				
		$data = array(
        'category_group_id' => $this->input->post('catgroup_id'),
        'category_name'     => $this->input->post('catname'),
        'category_img'      => $this->input->post('catimage'),
        'category_descrip'  => $this->input->post('catdescrip')
        );
		$this->load->model('mysitemodel');
		$this->mysitemodel->form_insert($data);
        // Loading View
       
		
	}
	public function viewrecord()
	{
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("viewrecord");
		$this->load->view("site_footer");
		
	}
	  
}