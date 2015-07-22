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
    }
    public function index(){
        $tag = 'slider';
        $data['slider'] = $this->testimonials->getByTag($tag);
        $data['threeCol'] = $this->testimonials->getByTag('three-col');
        $data['testimonials'] = $this->testimonials->getByTag('testimonials');
        $data['crs'] = $this->courses->getAllLimit();

        $this->load->view('index',$data);
    }

    public function course(){

        $data = array();
        $data['title'] = '';
        $config = array();
        $config['base_url'] = base_url()."welcome/course";
        $total_row = $this->paginatie->count_all();
        $config['total_rows'] = $total_row;
        $config['per_page'] = 4;
        $config['num_links'] = 1;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['dataPag'] = $this->paginatie->pag($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('course',$data);

    }
    public function courseInfo(){
        $id = $this->uri->segment(3);
        $data['singleCap'] = $this->courses->getCourse($id);
        $data['descr'] = $this->Description->getDescription($id);
        $this->load->view('course-info',$data);

    }

    public function about(){
        $friendlyUrl = 'online-learning';
        $data['selectAll'] = $this->subcapitol->getSubCapitole();
        $data['selectJoin'] = $this->subcapitol->getJoinedData($friendlyUrl);
        $this->load->view('about',$data);
    }
}