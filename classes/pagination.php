<?php

class Pagination {

    public $per_page = 4;

    public function pagination(){
        global $db;


        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }

        $offset = ($page - 1) * $this->per_page;

        $q = "SELECT * FROM courses LIMIT $this->per_page OFFSET $offset";
        $result = $db->fetch_rows($q);
        return $result;

    }

    public function rez(){
        global $db;
        $query = "SELECT * FROM courses";
        $total_records = $db->count($query);
        $total_pages = ceil($total_records / $this->per_page);
        return $total_pages;
    }

}
