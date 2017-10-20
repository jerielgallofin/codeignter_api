<?php
class Student_model extends CI_Model {
    function get_student() {
        
//        if ($page == 1){
//            $page = 0;
//        }
//        
//        $this->db->limit(10, $page);
        $query = $this->db->get('tbl_student');
        $res   = $query->result();        
        return $res;
	}
    
    function count_student() {
        $query = $this->db->count_all('tbl_student');      
        return $query;
	}
}
?>