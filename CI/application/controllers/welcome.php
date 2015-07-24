<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/21/15
 * Time: 12:44 PM
 */
class welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('testimonials');
        $this->load->model('courses');
        $this->load->model('paginatie');
        $this->load->model('Description');
        $this->load->model('subcapitol');
        $this->load->model('Comments');
        $this->load->model('Replies');
    }
    public function index(){
        $tag = 'slider';
        $data['slider'] = $this->testimonials->getByTag($tag);
        $data['threeCol'] = $this->testimonials->getByTag('three-col');
        $data['testimonials'] = $this->testimonials->getByTag('testimonials');
        $data['crs'] = $this->courses->getAllLimit();

        $this->load->view('index',$data);
    }




    public function comment(){
        $data['comments']=$this->Comments->getComments();
        $data['replies']=$this->Replies->getReplies();
        $this->load->view('comment',$data);
    }
}