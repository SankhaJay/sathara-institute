<?php
    class Admin_Model extends CI_Model{
        public function login($data){
            $this->load->database();
            $condition = "id=" . "'" . $data['id'] . "' AND " . "pass=" . "'" . $data['pass'] . "'";
            $query = $this->db->get_where('login',$condition);
            if ($query->num_rows() == 1){
                return true;
            }
            else{
                return false;
            }
        }

        public function printSlot($day,$time,$l_hall){ 
            $this->load->database();
            $condition = "day=" . "'" . $day . "' AND " . "time=" . "'" . $time . "' AND " . "l_hall=" . "'" . $l_hall . "'";
            $query = $this->db->get_where('time_table',$condition);
            if($query->num_rows() == 0){
                echo "-";
            }
            else if($query->num_rows() == 1){
                $result = $query->result_array();
                echo $result[0]['t_name'];
                echo "<br>";
                echo $result[0]['subject'];
            }
        }

        public function create_slot($data){
            $this->load->database();
            $condition = "day=" . "'" . $data['day'] . "' AND " . "time=" . "'" . $data['time'] . "' AND " . "l_hall=" . "'" . $data['l_hall'] . "'";
            $query = $this->db->get_where('time_table',$condition);
            if($query->num_rows() == 0){
                $this->db->insert('time_table', $data);
                return true;
            }
            else if($query->num_rows() == 1){
                return false;
            }
        }

        public function update_slot($data){
            $this->load->database();
            $condition = "day=" . "'" . $data['day'] . "' AND " . "time=" . "'" . $data['time'] . "' AND " . "l_hall=" . "'" . $data['l_hall'] . "'";
            $query = $this->db->get_where('time_table',$condition);
            if($query->num_rows() == 1){
                $this->db->where($condition);
                $this->db->update('time_table', $data);
                return true;
            }
            else if($query->num_rows() == 0){
                return false;
            }
        }

        public function delete_slot($data){
            $this->load->database();
            $condition = "day=" . "'" . $data['day'] . "' AND " . "time=" . "'" . $data['time'] . "' AND " . "l_hall=" . "'" . $data['l_hall'] . "'";
            $query = $this->db->get_where('time_table',$condition);
            if($query->num_rows() == 1){
                $this->db->where($condition);
                $this->db->delete('time_table');
                return true;
            }
            else if($query->num_rows() == 0){
                return false;
            }
        }

        public function show_notice_board(){
            $this->load->database();
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('notices');
            return $query->result_array();
        }

        public function add_notice($data){
            $this->load->database();
            $this->db->insert('notices',$data);
            return true;
        }

        public function edit_notice($data){
            $this->load->database();
            $condition = "id="."'".$data['id']."'";
            $query = $this->db->get_where('notices',$condition);
            if($query->num_rows() == 1){
                $temp_data = array(
                    'title' => $data['title'],
                    'body' => $data['body']);
                $this->db->where($condition);
                $this->db->update('notices', $temp_data);
                return true;
            }
        }

        public function delete_notice($data){
            $this->load->database();
            $condition = "id="."'".$data['id']."'";
            $query = $this->db->get_where('notices',$condition);
            if($query->num_rows() == 1){
                $this->db->where($condition);
                $this->db->delete('notices');
                $this->db->order_by('id', 'DESC');
                $temp =  $this->db->get('notices');
                return $temp->result_array();
            }
        }

        public function show_teachers(){
            $this->load->database();
            $query = $this->db->get('teachers');
            return $query->result_array();
        }

        public function add_teacher($data){
            $this->load->database();
            $this->db->insert('teachers',$data);
            return true;
        }

        public function edit_teacher($data){
            $this->load->database();
            $condition = "id="."'".$data['id']."'";
            $query = $this->db->get_where('teachers',$condition);
            if($query->num_rows() == 1){
                    $temp_data = array(
                    'name' => $data['name'],
                    'subject' => $data['subject'],
                    'email' => $data['email'],
                    'p_no' => $data['p_no']);
                $this->db->where($condition);
                $this->db->update('teachers', $temp_data);
                return true;
            }
        }

        public function delete_teacher($data){
            $this->load->database();
            $condition = "id="."'".$data['id']."'";
            $query = $this->db->get_where('teachers',$condition);
            if($query->num_rows() == 1){
                $this->db->where($condition);
                $this->db->delete('teachers');
                $temp =  $this->db->get('teachers');
                return $temp->result_array();
            }
        }
    }    
?>