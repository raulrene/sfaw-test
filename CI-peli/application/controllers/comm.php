<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comm extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('comments');
		$this->load->model('replies');
	}

	public function index()	{

		$data['title'] = 'Comments';	
		$this->load->view('comments',$data);
	
	}

}