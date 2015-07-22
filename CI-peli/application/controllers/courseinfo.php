<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courseinfo extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('courses');
		$this->load->model('subchapter');
	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}
		$data = array();
		$data['title'] = 'Course Info';
        $id = $this->uri->segment('3');
        $data['c'] = $this->courses->getCourseById($id);
        $data['l'] = $this->subchapter->getsubChapter();
        $data['j'] = $this->subchapter->getCombined();
		$this->load->view('course_info',$data);

	}
	
}
