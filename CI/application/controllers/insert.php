<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/23/15
 * Time: 2:24 PM
 */

class insert extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('courses');
        $this->load->model('user');
        $this->load->model('subcapitol');
        $this->load->model('subsubcapitol');
        $this->load->model('comments');
    }

    public function index(){

        $this->load->view('admin/insert');
    }
}