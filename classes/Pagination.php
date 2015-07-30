<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/15/15
 * Time: 1:02 PM
 */

class Pagination {
    public $nrPerPage = 4;

    public function pagination(){

        global $db;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $offset = ($page - 1) * $this->nrPerPage;
        $q = "SELECT * FROM courses LIMIT $this->nrPerPage OFFSET $offset";
        $result = $db->fetch_rows($q);
        return $result;
    }
    public function getResult(){

        global $db;
        $query = "SELECT * FROM courses";
        $totalRecords = $db->count($query);
        $totalPages = ceil($totalRecords / $this->nrPerPage);
        return $totalPages;
    }
}