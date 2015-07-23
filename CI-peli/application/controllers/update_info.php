<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_info extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('chapter');
		$this->load->model('subchapter');
		$this->load->model('sub_sub_chapter');
		$this->load->model('content');
		$this->load->model('comments');
		$this->load->model('replies');
		$this->load->model('courses');

	}

	public function index()	{

		if($this->session->userdata('validated') != TRUE){
			redirect('login');
		}	
		$data = array();
		$id    = $this->uri->segment(3);
		$table = $this->uri->segment(4);

		if($table == 'Chapters'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->chapter->getChapterById($id);
			$this->load->view('admin/edit_form',$data);

		}elseif($table == 'sub_chapters'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->subchapter->getSubCHById($id);
			$this->load->view('admin/edit_form',$data);	

		}elseif($table == 'sub_sub_ch'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->sub_sub_chapter->getSSChById($id);
			$this->load->view('admin/edit_form',$data);	

		}elseif($table == 'content'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->content->getContentById($id);
			$this->load->view('admin/edit_form',$data);	

		}elseif($table == 'comments'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->comments->getCommentsById($id);
			$this->load->view('admin/edit_form',$data);	

		}elseif($table == 'replies'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->replies->getReplyById($id);
			$this->load->view('admin/edit_form',$data);

		}elseif($table == 'courses'){

			$data['title']  = "Editing -- $table";
			$data['table']  = $table;
			$data['result'] = $this->courses->getCourseById($id);
			$this->load->view('admin/edit_form',$data);

		}else{
			echo 'make another table!';
		}
	
	}

}