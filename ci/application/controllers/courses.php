<?php

class Courses extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->model('courses_model');
        }

	public function index()
	{	

		
		$data['data'] = $this->courses_model->getAll();
		$this->load->view("courses", $data);	
		
	}
}