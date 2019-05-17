<?php
    class Student_Model extends CI_Model{
        public function login($data){
            $this->load->database();
            $condition = "id=" . "'" . $data['id'] . "' AND " . "pass=" . "'" . $data['pass'] . "'";
            $query = $this->db->get_where('students',$condition);
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
            if($query->num_rows() == 0){
                $this->db->update('students', $data, $condition2);
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
?>