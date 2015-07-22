<?php

class Comments extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('comments_model');
        }

	public function index()
	{	

		$data['data'] = $this->comments_model->getAll();
		$data['data1'] = $this->comments_model->getAllReplies();
		$this->load->view("comments", $data);	
		
	}
}

?>