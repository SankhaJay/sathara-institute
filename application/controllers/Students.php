<?php
    class Students extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('students/stu_first');
            $this->load->view('templates/footer');
        }
    }
?>