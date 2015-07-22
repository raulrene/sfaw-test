<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comm extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('comments');
		$this->load->model('replies');
	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}	
		$data = array();
		$data['title'] = 'Comments';
		$data['q'] = $this->comments->getComments();
		$data['s'] = $this->replies->getReplies();	
		$this->load->view('comments',$data);
	
	}

}