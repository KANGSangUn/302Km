<?php

class Daegu extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('board_model');
        $this->load->helper('form');
    }


    function index(){
        $result['list'] = $this->board_model->board_select("Daegu");
        $_SESSION['board']="Daegu";
        $this->load->view("header");
        $this->load->view("Daegu",$result);
    }

}
?>
