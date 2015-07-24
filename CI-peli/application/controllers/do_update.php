<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_update extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('chapter');

	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}	
		$data = array();
		$id    = $this->input->post('id');
		$table = $this->input->post('table');

		if($table == 'Chapters'){
			$ch_name = $this->input->post('ch_name');
            $url     = $this->input->post('url');
            if($this->chapter->updateChapter($id,$ch_name,$url) == TRUE){
            	$data['title']  = 'Edited';
            	$data['table']  = $table;
             	$this->load->view('admin/edit',$data);
            }else{
            	echo 'error updating.please try again !';
            }
		}elseif($table == 'sub_chapters')
			$name    = $this->input->post('chapter_id');
			$link    = $this->input->post('links');
            $url     = $this->input->post('friendly_url')
            if($this->chapter->updateChapter($id,$ch_name,$url) == TRUE){
            	$data['title']  = 'Edited';
            	$data['table']  = $table;
             	$this->load->view('admin/edit',$data);
            }else{
            	echo 'error updating.please try again !';
            }
         }   

	}
}		