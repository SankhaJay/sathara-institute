<?php
    class Student_Model extends CI_Model{
        public function login($data){
            $this->load->database();
            $condition = "id=" . "'" . $data['id'] . "' AND " . "pass=" . "'" . $data['pass'] . "'";
            $query = $this->db->get_where('login',$condition);
            $temp = $query->result();
            if ($query->num_rows() == 1) {
                if($temp[0]->is_set==0){
                    $this->load->view('templates/header');
                    $this->load->view('students/stu_first',$data);
                    $this->load->view('templates/footer');
                }
                else{
                    return true;
                }
            }
            else{
                return false;
            }
        }

        public function new_student($data){
            $this->load->database();
            $condition1 = "email =" . "'" . $data['email'] . "'";
            $condition2 = "id =" . "'" . $data['id'] . "'";
            $query = $this->db->get_where('students',$condition1);
            $query_stu = $this->db->get_where('students',$condition2);
            $query_log = $this->db->get_where('login',$condition2);
            $login_data = array(
                'id' => $data['id'],
                'pass' =>$data['pass']);
            $student_data = array(
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'school' => $data['school'],
                'grade' => $data['grade'],
                'p_name' => $data['p_name'],
                'p_no' => $data['p_no'],);
            if($query->num_rows() == 0 && $query_log->num_rows() == 1){
                $this->db->insert('students', $student_data, $condition2);
                $this->db->update('login', $login_data, $condition2);
                $this->db->where($condition2);
                $this->db->set('is_set','1');
                $this->db->update('login');
                return true;
            }
            else{
                return false;
            }
           
        }

        public function user_information($id){
            $this->load->database();
            $condition = "id="."'".$id."'";
            $query = $this->db->get_where('students',$condition);
            if ($query->num_rows() == 1) {
                return $query->result();
            }
            else{
                return false;
            }
        }
    }
