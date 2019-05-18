<?php
    class Time_Model extends CI_Model{
        public function printSlot($day,$time,$l_hall){
            $this->load->database();
            $condition = "day=" . "'" . $day . "' AND " . "time=" . "'" . $time . "' AND " . "l_hall=" . "'" . $l_hall . "'";
            $query = $this->db->get_where('time_table',$condition);
            if($query->num_rows() == 0){
                echo "-";
            }
            else if($query->num_rows == 1){
                $result = $query->result_array();
                echo $result[0]['t_name'];
                echo "<br>";
                echo $result[0]['subject'];
            }
        }
    }    
?>