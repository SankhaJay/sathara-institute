<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

	public function view()
	{
		$this->load->view('students/stu_header',$_SESSION);
		$this->load->model('Notice_Model');
		$result['notices'] = $this->Notice_Model->returnNotices();
		if($result == true){
			
			
			$this->load->view('notice_board',$result);
		}
		
        $this->load->view('templates/footer');

	}
	
}
?>