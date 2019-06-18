<?php
    class Teacher_Model extends CI_Model{
        public function login($data){
            $this->load->database();
            $condition = "id=" . "'" . $data['id'] . "' AND " . "pass=" . "'" . $data['pass'] . "'";
            $query = $this->db->get_where('login',$condition);
            $temp = $query->result();
            if ($query->num_rows() == 1) {
                if($temp[0]->is_set==0){
                    $this->load->view('templates/header');
                    $this->load->view('teachers/tea_first',$data);
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

        public function new_teacher($data){
            $this->load->database();
            $condition1 = "email =" . "'" . $data['email'] . "'";
            $condition2 = "id =" . "'" . $data['id'] . "'";
            $query = $this->db->get_where('teachers',$condition1);
            $query_stu = $this->db->get_where('teachers',$condition2);
            $query_log = $this->db->get_where('login',$condition2);
            $login_data = array(
                'id' => $data['id'],
                'pass' =>$data['pass']);
            $teacher_data = array(
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'p_no' => $data['p_no'],);
            if($query->num_rows() == 0 && $query_log->num_rows() == 1){
                $this->db->insert('teachers', $teacher_data, $condition2);
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
            $query = $this->db->get_where('teachers',$condition);
            if ($query->num_rows() == 1) {
                return $query->result();
            }
            else{
                return false;
            }
        }
    }
