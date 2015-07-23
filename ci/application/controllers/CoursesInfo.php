<?php

class CoursesInfo extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
		$this->load->model('courses_model');
        }

	public function index($sub_capitol_id=1)
	{	

		
		$id = $this->uri->segment('3');
		$data['row'] = $this->courses_model->getCourse($id);
		if ($this->uri->segment('4')!= null && !empty($this->uri->segment('4'))){
			$url = $this->uri->segment('4');
		}
		else {
			$url = "online-learning";
		}
		

		
		$data['allSubcapitols'] = $this->courses_model->getAllSubCapitols();
		$data['contentForSubCapitol'] = $this->courses_model->getContentForSubCapitol($sub_capitol_id);
		$data['selectedSubCapitol'] = $this->courses_model->getSubCapitol($sub_capitol_id);
		
		//$data['data'] = $this->courses_model->getCapitol();
		//$data['data1'] = $this->courses_model->getAllJoins();
		//$data['data2'] = $this->courses_model->getAllSub();
		
		//var_dump($data['selectedSubCapitol']);
		//var_dump($data['data']);
		
		
		
		$this->load->view("coursesinfo", $data);	
		
	}
}