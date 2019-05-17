<?php
    class My_Model extends CI_Model{
        public function returnUsers(){
            $this->load->database();
            //$this->db;
            //$query = $this->db->query("SELECT * FROM users");
            $query = $this->db->get_where("users","id=2");;
            //print_r($query);
            $query->result_array();
            /*echo "<pre>";
            print_r($query->result_array());
            echo "</pre>";*/
            return $query->result_array();
        }
    }    
?>