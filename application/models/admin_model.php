<?php
class Admin_model extends CI_Model {
    function get_admin() {
		$data = array();
        $query = $this->db->get('tbl_admin');
        $res   = $query->result();        
        return $res;
	}
}
?>