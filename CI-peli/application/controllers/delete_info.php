<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_info extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('delete_model');

	}

	public function index()	{

		$id = $this->uri->segment(3);
		$table = $this->uri->segment(4);
		if($this->delete_model->delete($id,$table) == TRUE){
			$data['title'] = 'Delete Record';
			$this->load->view('admin/delete',$data);
		}else{
			$data['title'] = 'sorry could not be deleted,try again!';
			$this->load->view('admin/delete',$data);
		}
	
	}

}