<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/23/15
 * Time: 2:17 PM
 */

class register extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('courses');
        $this->load->model('paginatie');

    }

    public function index(){
        //echo "register";
        $this->load->view('admin/register');
    }
}