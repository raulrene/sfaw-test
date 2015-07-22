<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Crs extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('paginator');

	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}
		$data = array();
		$data['title'] = 'Courses';	
		$config = array();
		$config['base_url'] = base_url()."crs";
		$total_row = $this->paginator->count_all();
		$config['total_rows'] = $total_row;
	    $config['per_page'] = 4;
	    $config['num_links'] = 1;
	    $config["uri_segment"] = 3;
	    $this->pagination->initialize($config);
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
	    $data['q'] = $this->paginator->paginate($config['per_page'], $page); 		
		$data['links'] = $this->pagination->create_links();
		$this->load->view('course',$data);

	}

}	