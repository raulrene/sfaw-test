<?php

class CoursesInfo extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->model('courses_model');
        }

	public function index()
	{	

		$data = array();
		$id = $this->uri->segment('3');
		$data['row'] = $this->courses_model->getCourse($id);
		if ($this->uri->segment('4')!= null && !empty($this->uri->segment('4'))){
			$url = $this->uri->segment('4');
		}
		else {
			$url = "online-learning";
		}
		$data['data'] = $this->courses_model->getCapitol();
		$data['data1'] = $this->courses_model->getAllJoins($url);
		
		
		
		
		$this->load->view("coursesinfo", $data);	
		
	}
}