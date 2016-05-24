<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function saveUser($insert_data) {
        
        return $this->db->insert('users', $insert_data);
        
    }
    
    public function check_user_exists($email, $password) {
        
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('users');
        
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        
        return FALSE;
    }
}

