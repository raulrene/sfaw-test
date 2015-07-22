<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courseinfo extends CI_Controller {

	public function index()	{

		$data['title'] = 'Course Info';
		$this->load->view('course_info',$data);

	}
	
}
