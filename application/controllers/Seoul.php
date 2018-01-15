<?php

class Seoul extends CI_Controller
{
        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('board_model');
            $this->load->helper('form');
        }


        function index(){
            $result['list'] = $this->board_model->board_select("Seoul");
            $_SESSION['board']="Seoul";
            $this->load->view("header");
            $this->load->view("Seoul",$result);
        }

}
?>
