<?php
    class User_Level extends CI_Model{
        public function get_Level($data){
            $this->load->database();
            $condition = "id =" . "'" . $data['id'] . "'";
            $this->db->select('flag');
            $level = $this->db->get_where('login',$condition);
            return $level->result();
        }
    }    
?>