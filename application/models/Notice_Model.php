<?php
    class Notice_Model extends CI_Model{
        public function returnNotices(){
            $this->load->database();
            $query = $this->db->get('notices');
            return $query->result_array();
        }
    }    
?>