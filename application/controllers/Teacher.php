<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function index()
	{
		$this->load->model('My_Model');
		$data['userArray'] = $this->My_Model->returnUsers();
		$this->load->view('My_View',$data);
		//echo "Test";
	}
	
}
?>