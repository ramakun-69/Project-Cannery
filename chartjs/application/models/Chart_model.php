<?php
class User_Model extends CI_Model{

    public function __construct() {

    	parent::__construct();
        $this->load->model('User_Model');
    }

    public function chart_database() {
        return $this->db->get('charts')->result();
    }
}
