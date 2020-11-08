<?php

class Admin_model extends CI_Model
{
    function get_all()
    {
        $query = $this->db->get('admin');
        return $query->result();
    }
}