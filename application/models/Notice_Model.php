<?php
    class Notice_Model extends CI_Model{
        public function returnNotices(){
            $this->load->database();
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('notices');
            return $query->result_array();
        }
    }    
?> 