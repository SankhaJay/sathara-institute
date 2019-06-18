<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function time_table(){
        $this->load->view('admin/admin_header',$_SESSION);
		$this->load->model('Admin_Model');
        $this->load->view('admin/admin_time');
        $this->load->view('templates/footer');
    }

    public function notice_board(){
        $this->load->view('admin/admin_header',$_SESSION);
		$this->load->model('Admin_Model');
        $result['notices'] = $this->Admin_Model->show_notice_board();
        if($result == true){
			$this->load->view('admin/noticeboard/view',$result);
		}
        $this->load->view('templates/footer');
    }

    public function teachers(){
        $this->load->view('admin/admin_header',$_SESSION);
        //$this->load->view('admin/teachers/view');
		$this->load->model('Admin_Model');
        $result['teachers'] = $this->Admin_Model->show_teachers();
        if($result == true){
			$this->load->view('admin/teachers/view',$result);
		}
        $this->load->view('templates/footer');
    }
    
    public function show_add_slot(){
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/timetable/add');
        $this->load->view('templates/footer'); 
    }

    public function show_update_slot(){
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/timetable/update');
        $this->load->view('templates/footer'); 
    }
    public function show_delete_slot(){
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/timetable/delete');
        $this->load->view('templates/footer'); 
    }

    public function show_add_notice(){
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/noticeboard/add');
        $this->load->view('templates/footer'); 
    }

    public function show_edit_notice($id){ 
        $data = array('id' =>$id);
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/noticeboard/edit',$data);
        $this->load->view('templates/footer'); 
    }

    public function add_notice(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Content', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'));
            $this->load->model('Admin_Model');
            $result = $this->Admin_Model->add_notice($data);
            if($result == true){
                $this->load->view('admin/admin_header',$_SESSION);
                $this->load->view('admin/noticeboard/success_page');
                $this->load->view('templates/footer');
            } 
        }
    }

    public function delete_notice($id){ 
        $data = array('id' =>$id);
        
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->delete_notice($data);
        if($result == true){
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('admin/noticeboard/success_page');
            $this->load->view('templates/footer');
            
        }
        $this->load->view('templates/footer'); 
    }

    public function edit_notice($temp){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Content', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'id' => $temp,
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'));
            $this->load->model('Admin_Model');
            $result = $this->Admin_Model->edit_notice($data);
            if($result == true){
                $this->load->view('admin/admin_header',$_SESSION);
			    $this->load->view('admin/noticeboard/success_page');
                $this->load->view('templates/footer');
            }
        }
    }
    public function add_slot(){
        $this->form_validation->set_rules('day', 'Day', 'required');
        $this->form_validation->set_rules('time', 'Time Slot', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('t_name', 'Teacher\'s name', 'required');
        $this->form_validation->set_rules('l_hall', 'Hall No', 'required');
        
        if($this->form_validation->run() == FALSE){
            
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'day' => $this->input->post('day'),
                'time' => $this->input->post('time'),
                'subject' => $this->input->post('subject'),
                't_name' => $this->input->post('t_name'),
                'l_hall' => $this->input->post('l_hall'));
                $this->load->model('Admin_Model');
                $result = $this->Admin_Model->create_slot($data);
                if($result == true){
                    $this->load->view('admin/admin_header',$_SESSION);
		            $this->load->model('Admin_Model');
                    $this->load->view('admin/admin_time');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->load->view('admin/admin_header',$_SESSION);
                    $this->load->view('templates/footer');
                }
        } 
    }
    public function update_slot(){
        $this->form_validation->set_rules('day', 'Day', 'required');
        $this->form_validation->set_rules('time', 'Time Slot', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('t_name', 'Teacher\'s name', 'required');
        $this->form_validation->set_rules('l_hall', 'Hall No', 'required');
        
        if($this->form_validation->run() == FALSE){
            
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'day' => $this->input->post('day'),
                'time' => $this->input->post('time'),
                'subject' => $this->input->post('subject'),
                't_name' => $this->input->post('t_name'),
                'l_hall' => $this->input->post('l_hall'));
                $this->load->model('Admin_Model');
                $result = $this->Admin_Model->update_slot($data);
                if($result == true){
                    $this->load->view('admin/admin_header',$_SESSION);
		            $this->load->model('Admin_Model');
                    $this->load->view('admin/admin_time');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->load->view('admin/admin_header',$_SESSION);
                    $this->load->view('templates/footer');
                }
        }
    }
	public function delete_slot(){
        $this->form_validation->set_rules('day', 'Day', 'required');
        $this->form_validation->set_rules('time', 'Time Slot', 'required');
        $this->form_validation->set_rules('l_hall', 'Hall No', 'required');
        
        if($this->form_validation->run() == FALSE){
            
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'day' => $this->input->post('day'),
                'time' => $this->input->post('time'),
                'l_hall' => $this->input->post('l_hall'));
                $this->load->model('Admin_Model');
                $result = $this->Admin_Model->delete_slot($data);
                if($result == true){
                    $this->load->view('admin/admin_header',$_SESSION);
		            $this->load->model('Admin_Model');
                    $this->load->view('admin/admin_time');
                    $this->load->view('templates/footer');
                }
                else{
                    $this->load->view('admin/admin_header',$_SESSION);
                    $this->load->view('templates/footer');
                }
        }
    }

    public function show_add_teacher(){
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/teachers/add');
        $this->load->view('templates/footer'); 
    }

    public function add_teacher(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('p_no', 'Phone No', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        if($this->form_validation->run() == FALSE){
            echo "bhsjab";
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'name' => $this->input->post('name'),
                'id' => $this->input->post('id'),
                'email' => $this->input->post('email'),
                'p_no' => $this->input->post('p_no'),
                'subject' => $this->input->post('subject'));
            $this->load->model('Admin_Model');
            $result = $this->Admin_Model->add_teacher($data);
            if($result == true){
                $this->load->view('admin/admin_header',$_SESSION);
                $this->load->view('admin/teachers/success_page');
                $this->load->view('templates/footer');
            } 
        }
    }

    public function show_edit_teacher($id){ 
        $data = array('id' =>$id);
        $this->load->view('admin/admin_header',$_SESSION);
        $this->load->model('Admin_Model');
        $this->load->view('admin/teachers/edit',$data);
        $this->load->view('templates/footer'); 
    }

    public function edit_teacher($temp){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('p_no', 'Phone No', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('templates/footer');
            $this->load->view('templates/footer');
        }
        else{
            $data = array(
                'id' => $temp,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'p_no' => $this->input->post('p_no'),
                'subject' => $this->input->post('subject'));
            $this->load->model('Admin_Model');
            $result = $this->Admin_Model->edit_teacher($data);
            if($result == true){
                $this->load->view('admin/admin_header',$_SESSION);
			    $this->load->view('admin/teachers/success_page');
                $this->load->view('templates/footer');
            }
        }
    }

    public function delete_teacher($id){ 
        $data = array('id' =>$id);
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->delete_teacher($data);
        if($result == true){
            $this->load->view('admin/admin_header',$_SESSION);
            $this->load->view('admin/teachers/success_page');
            $this->load->view('templates/footer');
            
        }
        $this->load->view('templates/footer'); 
    }
	
}
?>