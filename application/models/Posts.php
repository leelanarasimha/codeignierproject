<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Posts extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    

    
    
    
    
    public function get_posts() {
        
        $sql = "SELECT * FROM posts";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        
        
        return FALSE;
    }
        
    public function get_post_by_id($post_id) {
        $sql = "select * from posts where id=$post_id";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
       
        return FALSE;
        
            
    }
    
    public function update_post($title, $description, $id) {
        
        $sql = "UPDATE posts set title='$title', description='$description' WHERE id=$id";
        return $this->db->query($sql);
    }
    
    
}

