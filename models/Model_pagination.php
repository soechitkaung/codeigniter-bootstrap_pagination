<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pagination extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_all()
    {
        $this->db->select('*');
        $this->db->from('customers');
        
        return $this->db->get()->num_rows();
    }

    
    public function get_all($start = NULL, $end = NULL)
    {        
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->order_by('customerName', 'ASC');
        $this->db->limit($start, $end); // Limit $end, $start
        
        return $this->db->get();
    }


}