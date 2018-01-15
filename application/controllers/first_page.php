<?php
class first_page extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }
    public function index(){
        $this->load->view('login');
    }

}

?>