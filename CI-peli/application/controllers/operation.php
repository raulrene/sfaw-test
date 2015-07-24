<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operation extends CI_Controller {

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


		
		switch($this->input->post('hidden')){
			case "Chapters"     :
			$ch_name = $this->input->post('ch_name');
                  $url     = $this->input->post('url');
            if($this->chapter->addChapter($ch_name, $url) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->chapter->getChapters();
            	$data['table']  = 'Chapters';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break;

            case "sub_chapters"     :
			$name    = $this->input->post('chapter_id');
			$link    = $this->input->post('links');
                  $url     = $this->input->post('friendly_url');
            if($this->subchapter->addSubChapter($name, $link, $url) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->subchapter->getsubChapter();
            	$data['table']  = 'sub_chapters';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break;

            case "sub_sub_ch"     :
			$sid     = $this->input->post('sub_chapter_id');
			$sn      = $this->input->post('sub_sub_chapter_name');
                  $ord     = $this->input->post('order');
            if($this->sub_sub_chapter->addSubSubChapter($sid, $sn, $ord) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->sub_sub_chapter->getSubSubCH();
            	$data['table']  = 'sub_sub_ch';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break;

            case "content"     :
			$sid     = $this->input->post('sub_sub_chapter_id');
			$t1      = $this->input->post('text_1');
                  $t2      = $this->input->post('text_2');
                  $t3      = $this->input->post('text_3');
            if($this->content->addContent($sid, $t1, $t2 ,$t3) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->content->getContent();
            	$data['table']  = 'content';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break; 

            case "comments"     :
			$aut       = $this->input->post('author');
			$img       = $this->input->post('author_img');
                  $link      = $this->input->post('author_link');
                  $date      = $this->input->post('date_posted');
                  $text      = $this->input->post('comm_text');
            if($this->comments->addComment($aut, $img, $link, $date, $text ) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->comments->getComment();
            	$data['table']  = 'comments';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break;  

            case "replies"     :
            $aid       = $this->input->post('author_id');
			$aut       = $this->input->post('author');
			$img       = $this->input->post('author_img');
                  $link      = $this->input->post('author_link');
                  $date      = $this->input->post('date_posted');
                  $text      = $this->input->post('comm_text');
            if($this->replies->addReply($aid, $aut, $img, $link, $date, $text ) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->replies->getReplies();
            	$data['table']  = 'replies';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break; 

            case "courses"     :
            $name      = $this->input->post('name');
			$price     = $this->input->post('price');
			$img       = $this->input->post('img');
                  $aut       = $this->input->post('author');
                  $user      = $this->input->post('user');
                  $star      = $this->input->post('stars');
                  $alt       = $this->input->post('alt');
            if($this->courses->addCourse($name, $price, $img, $aut, $user, $star, $alt ) == TRUE){
            	$data['title']  = 'Operations';
            	$data['result'] = $this->courses->getCourses();
            	$data['table']  = 'courses';
            	$this->load->view('admin/operations',$data);
            }else{
            	echo 'error inserting.please try again !';
            }
            break;                                             
       
		}
	
	}

}