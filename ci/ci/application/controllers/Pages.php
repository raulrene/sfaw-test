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
}