<?php

class Courses extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->model('courses_model');
        }

public function index()
{	
	
	if($this->session->userdata('logged_in'))
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data = array();
		$data['data'] = $this->courses_model->getAll();
		$this->load->view("courses", $data);	
	}
	else
	{
		//If no session, redirect to login page
		redirect('login', 'refresh');
	}
	
}



function logout()
{
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('home', 'refresh');
}

}