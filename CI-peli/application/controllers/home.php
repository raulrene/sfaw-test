<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('courses');
		$this->load->model('home');
	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}
		$data = array();
		$data['title'] = 'Academy-Learning';
		$tag = 'slider';
		$data['s'] = $this->home->getInfoByTag($tag);
		$tag = 'sub_sl';
		$data['ss'] = $this->home->getInfoByTag($tag);
		$data['crs'] = $this->scoursesl->getCoursesHome();
        $tag = 'testimonials';
        $data['t'] = $this->home->getInfoByTag($tag);
		$this->load->view('index',$data);
	
	}

}

