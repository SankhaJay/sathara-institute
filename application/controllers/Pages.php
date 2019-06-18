<?php
class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function data_submitted()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('school', 'School', 'required');
        $this->form_validation->set_rules('grade', 'Grade', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_rules('p_name', 'Parent\'s name', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('students/stu_first',$_SESSION);
            $this->load->view('templates/footer');
        } 
        else{
            $data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'school' => $this->input->post('school'),
                'grade' => $this->input->post('grade'),
                'pass' => $this->input->post('pass'),
                'p_name' => $this->input->post('p_name'),
                'p_no' => $this->input->post('p_no'));

            $this->load->model('Student_Model');
            $result = $this->Student_Model->new_student($data);
            if ($result == true) {
                $id = $this->input->post('id');
                $result = $this->Student_Model->user_information($id);
                if ($result != false) {
                    $session_data = array(
                        'id' => $data['id'],
                        'name' => $data['name']
                    );
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('students/stu_home', $data);
                }
            }
        }
    }

    public function teacher_register()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_rules('p_no', 'Contact no', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('teachers/tea_first');
            $this->load->view('templates/footer');
        } 
        else{
            $data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'pass' => $this->input->post('pass'),
                'p_no' => $this->input->post('p_no'));

            $this->load->model('Teacher_Model');
            $result = $this->Teacher_Model->new_teacher($data);
            if ($result == true) {
                $id = $this->input->post('id');
                $result = $this->Teacher_Model->user_information($id);
                if ($result != false){
                    $session_data = array(
                        'id' => $data['id'],
                        'name' => $data['name']);
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('students/stu_home', $data);
                }
            }
        }
    }

    public function get_id(){
        $this->form_validation->set_rules('id', 'User ID', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $_SESSION['id'] =  $this->input->post('id');
    
        if($this->form_validation->run() == FALSE) {
            if (isset($this->session->userdata['logged_in'])) {
                $this->load->view('students/stu_home');
            }
            else{
                $this->load->view('templates/header');
                $this->load->view('pages/home');
                $this->load->view('templates/footer');
            }
        } 
        else{
            $data = array(
                'id' => $this->input->post('id'),
                'pass' => $this->input->post('pass'));
            $this->load->model('User_Level');
            $level = $this->User_Level->get_Level($data);
            if($level[0]->flag == 2){
                $this->load->model('Student_Model');
                $result = $this->Student_Model->login($data);
                if($result == true){
                    $id = $this->input->post('id');
                    $result = $this->Student_Model->user_information($id);
                    if($result != false){
                        $session_data = array(
                            'id' => $result[0]->id,
                            'name' => $result[0]->name);
                        $_SESSION['name'] = $result[0]->name;
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('students/stu_home', $session_data);
                    }
                }
            }
            if($level[0]->flag == 0){
                $this->load->model('Admin_Model');
                $result = $this->Admin_Model->login($data);
                if($result = true){
                    $session_data = array(
                        'id' => 'Admin',
                        'name' => 'Admin');
                    $_SESSION['name'] = 'Admin';
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin/admin_home', $session_data);
                }
            }
            if($level[0]->flag == 1){
                $this->load->model('Teacher_Model');
                $result = $this->Teacher_Model->login($data);
                if($result = true){
                    $id = $this->input->post('id');
                    $result = $this->Teacher_Model->user_information($id);
                    if($result != false){
                        $session_data = array(
                            'id' => $result[0]->id,
                            'name' => $result[0]->name);
                        $_SESSION['name'] = $result[0]->name;
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('teachers/tea_home', $session_data);
                    } 
                }
            } 
        }
    }
    public function logout() {
        $session_data = array(
        'id' => '',
        'name' => '');
        $_SESSION = array(
            'id' => '',
            'name' => '');
        $this->session->unset_userdata('logged_in', $session_data);
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view_contact_info(){
        $this->load->view('templates/header');
        $this->load->view('templates/contact');
        $this->load->view('templates/footer');
    }
}
