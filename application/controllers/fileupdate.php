<?php
header("Content-Type: text/html; charset=UTF-8");

class fileupdate extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model("board_model");
    }

    public function index(){
        if(func_num_args() == 1) {
            $data['where'] = is_null(func_get_arg(0)) ? null : func_get_arg(0);
        }
        $this->load->view("header");
        $this->load->view("fileupdate", $data);
    }

    public function upload($where){
        $file_dir = "./dataimg"; //파일 저장 디렉토리 및 확장자 명 설정
        $alltype_ext = array('image/jpg','image/jpeg','image/png','image/gif');
        $subject = $_POST['submit_input'];
        $naiyo =  $_POST['submit_input2'];
        $file = $_FILES['files']; //파일을 받는다
        $error = $_FILES['files']['error'];
        $error_msg = null;
        // 오류 확인
        if( $error != UPLOAD_ERR_OK ){
            switch( $error ) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    $error_msg =  "データが多すぎ ($error)";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $error_msg ="写真を添付してありません。 ($error)";
                    break;
                default:
                    $error_msg = "ファイルがちゃんとアップロードできてありません。 ($error)";
            }
            exit; //todo : exit가 아니라 경고창 팝업 후 되돌아가기로 수정해야함
        } // 확장자 확인
        else if( !in_array($file["type"], $alltype_ext) ) {
            echo "허용되지 않는 확장자입니다.";
            exit; //todo : exit가 아니라 경고창 팝업 후 되돌아가기로 수정해야함
        }//모든 예외처리가 끝난 후 파일 업로드
        else {
            $fileinfo = array(
                "board_name" =>   $where,
                "img_url" => $file['name'],
                "board_subject" => $subject,
                "board_user" => "sangun",
                "board_comment" => $naiyo,
                "board_date" => $today = date("Y/m/d")
            );
            $filename = $file["name"];
            move_uploaded_file( $_FILES['files']['tmp_name'],"$file_dir/$filename");
            $this->board_model->file_insert($fileinfo);
            redirect($where);
        }

    }
}
?>