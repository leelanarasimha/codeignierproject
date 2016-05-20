<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Blog extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Posts'); 
    }
    
    public function index() {
        $data = array();
       
        
        $posts = $this->Posts->get_posts();
        
        $data['posts'] = $posts;
        
        $data['title'] = 'Posts';
        
        $this->load->view('blog/blog_page', $data);
    }
    
    
    public function view($post_id) {
        $data = array();
        $post_details = $this->Posts->get_post_by_id($post_id);
        $data['post_details'] = $post_details;
        
        //echo '<pre>'.print_r($post_details, TRUE); die;
        $this->load->view('blog/viewblog_page', $data);
        
    }
    
    public function edit($post_id) {
        $data = array();
        $post_details = $this->Posts->get_post_by_id($post_id);
          $data['post_details'] = $post_details;
          $this->load->view('blog/editblog_page', $data);
        
        
        
    }
    
    public function updatepost($post_id) {
        $title = $this->input->post('title');
        $description = $this->input->post('description');       
         
         $this->Posts->update_post($title, $description, $post_id);
         
         
         redirect(site_url('blog'));
        
        
    }
    
    
}

