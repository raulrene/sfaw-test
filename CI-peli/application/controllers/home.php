<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('courses');
		$this->load->model('home_model');
	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}
		$data = array();
		$data['title'] = 'Academy-Learning';
		$tag = 'slider';
		$data['s'] = $this->home_model->getInfoByTag($tag);
		$tag = 'sub_sl';
		$data['ss'] = $this->home_model->getInfoByTag($tag);
		$data['crs'] = $this->courses->getCoursesHome();
        $tag = 'testimonials';
        $data['t'] = $this->home_model->getInfoByTag($tag);
		$this->load->view('index',$data);
	
	}

}

