<?php
class login extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');

    }

    public function login_page(){
      $this->load->view('login');
  }
    public function loginProcess()
    {
        $user = $_POST["user"];
        if ($user["id"] == "sangun" && $user["pw"]=="natsumi" || $user["pw"] == "sangun" && $user["id"]=="natsumi") {
            $_SESSION['board']="";
            redirect("sanzeroni");

        } else {
            echo "<script>alert('ヒントはかんさんに')</script>";
            redirect('login');
        }
    }

}
?>