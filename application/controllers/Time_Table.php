<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_Table extends CI_Controller {
    public function view_student(){
        $this->load->view('students/stu_header',$_SESSION);
        $this->load->model('Time_Model');
        $this->load->view('time_table');
	}
}
?>