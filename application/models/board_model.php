<?php


class board_model extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    function file_insert($file_info){
        $this->db->insert('board', $file_info);
    }
    function board_select($board_type){
        $result = $this->db->get_where('board',array( "board_name"=> $board_type));
        return $result->result();
    }

}

?>