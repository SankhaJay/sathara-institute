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
    }    
?>