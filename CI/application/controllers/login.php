<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/23/15
 * Time: 2:24 PM
 */

class login extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('courses');
        $this->load->model('user');

    }

    public function index(){
        //echo "login";
        $this->load->helper(array('form'));
        $this->load->view('admin/login');
    }
}