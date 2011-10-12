<?php

class Weblogin_dao extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function validate_admin($user,$pass)
    {
        $this->db->_compile_select();  
        $this->db->select('name, lastname, rut');
        $this->db->from('Person');
        $this->db->join('Admin', 'Admin.Person_rut = Person.rut');
        $this->db->where(array('Person.rut' => $user, 'Person.password' => $pass)); 
        $query = $this->db->get();
        log_message('error',$this->db->last_query());

        return $query->row_array();
    }
    
  }


