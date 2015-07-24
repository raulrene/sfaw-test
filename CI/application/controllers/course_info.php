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
        $this->load->model('subsubcapitol');
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
        $a = $this->subcapitol->getIdByUrl($friendlyUrl);
        //echo $a[0]->id;
        $b = $this->subsubcapitol->get_sscid_by_scid($a[0]->id);
        //echo $b[0]->id;
        $c = $this->Comments->get_comm_by_sscid($b[0]->id);
        //echo '<pre>';var_dump($c);die;

        $data['selectAll'] = $this->subcapitol->getSubCapitole();
        $data['selectJoin'] = $this->subcapitol->getJoinedData($friendlyUrl);

        $data['comments']= $c;//$this->Comments->getComments();
        $data['replies']=$this->Replies->getReplies();

        $this->load->view('course-info',$data);

    }
}