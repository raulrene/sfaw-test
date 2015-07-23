<?php

class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('index_model');
				$this->load->model('courses_model');
        }

	public function index()
	{	

	if($this->session->userdata('logged_in'))
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data = array();
		$tag = 'slide';
		$data['data'] = $this->index_model->getTag($tag);
		$tag = 'info';
		$data['data1'] = $this->index_model->getTag($tag);
		$data['data2'] = $this->courses_model->getAll();
		$tag = 'testimonials';
		$data['data3'] = $this->index_model->getTag($tag);
		$this->load->view("home", $data);	
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
 
?>
