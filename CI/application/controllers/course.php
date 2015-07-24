<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/23/15
 * Time: 12:44 PM
 */
class course extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('courses');
        $this->load->model('paginatie');

    }
    public function index(){

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

}