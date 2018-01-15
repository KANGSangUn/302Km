<?php

/**
 * Created by PhpStorm.
 * User: rkdtk
 * Date: 2018-01-11
 * Time: 오후 3:57
 */
class The302km extends CI_Controller
{

    function index(){
        $this->load->view("header");
        $this->load->view("The302km");
    }

}