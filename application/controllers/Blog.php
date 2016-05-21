<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Blog extends BR_Controller {
    
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('Posts'); 
        
    }
    
    
    /**
     * Shows all the posts
     */
    
    public function index() {
       
        
        $posts = $this->Posts->get_posts();
        
        $this->data['posts'] = $posts;
        
        $this->data['title'] = 'Posts';
        
        if ($this->session->flashdata('success_message') !== FALSE) {
            $this->data['success_message'] = $this->session->flashdata('success_message');
        }
        
        $this->show_views('blog/blog_page');
    }
    
    
    
    /**
     * 
     * Shows single post based on the  post id
     * @param type $post_id
     * 
     * 
     */
    public function view($post_id) {
        $post_details = $this->Posts->get_post_by_id($post_id);
        $this->data['post_details'] = $post_details;
        
        //echo '<pre>'.print_r($post_details, TRUE); die;
       $this->show_views('blog/viewblog_page');
        
    }
    
    
    /**
     * 
     * Edit post
     * @param type $post_id
     */
    public function edit($post_id) {
        $post_details = $this->Posts->get_post_by_id($post_id);
          $this->data['post_details'] = $post_details;
          $this->show_views('blog/editblog_page');
        
        
        
    }
    
    
    /**
     * 
     * Update Post
     * @param type $post_id
     */
    public function updatepost($post_id) {
        $title = $this->input->post('title');
        $description = $this->input->post('description');       
         
         $this->Posts->update_post($title, $description, $post_id);
         
         $this->session->set_flashdata('success_message', 'Post Updated successfully');
         
         
         redirect(site_url('blog'));
        
        
    }
    
    
    public function add() {
        $this->show_views('blog/addblog_page');
        
    }
    
    
    public function storepost() {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        
        $this->Posts->add_post($title, $description);
        
        $this->session->set_flashdata('success_message', 'Post added Successfully');
        
        
        redirect(site_url('blog'));
    }
    
    
}

