<?php

class sanzeroni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
    }


    public function index(){
        $this->load->view("header");
        $this->load->view("main");
    }

}