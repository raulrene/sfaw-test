<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}
		$data['title'] = 'Admin';
		$this->load->view('admin/forms',$data);
	
	}

}

