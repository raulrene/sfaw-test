<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operation extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('chapter');
		$this->load->model('');
		$this->load->model('');
		$this->load->model('');
		$this->load->model('');
		$this->load->model('');
		$this->load->model('');
	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}	
		$data = array();
		
		switch($this->input->post('hidden')){
			case "chapters"     :
			$ch_name = $this->input->post('ch_name');
            $url     = $this->input->post('url');
            if($this->chapter->addChapter($ch_name, $url) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->chapter->getChapters();
            	$data['table']  = 'Chapters';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break;
		}
	
	}

}