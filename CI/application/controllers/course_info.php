<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/23/15
 * Time: 12:57 PM
 */

class course_info extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('courses');
        $this->load->model('Description');
        $this->load->model('subcapitol');
        $this->load->model('Comments');
        $this->load->model('Replies');
    }

    public function index(){

        $id = $this->uri->segment(3);

        $data['singleCap'] = $this->courses->getCourse($id);
        $data['descr'] = $this->Description->getDescription($id);

        $friendlyUrl = $this->uri->segment(4);
        if($friendlyUrl == NULL) {
            $friendlyUrl = 'online-learning';
        }

        $data['selectAll'] = $this->subcapitol->getSubCapitole();
        $data['selectJoin'] = $this->subcapitol->getJoinedData($friendlyUrl);

        $data['comments']=$this->Comments->getComments();
        $data['replies']=$this->Replies->getReplies();

        $this->load->view('course-info',$data);

    }
}