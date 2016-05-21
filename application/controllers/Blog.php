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
    
    
    /**
     * Shows all the posts
     */
    
    public function index() {
        $data = array();
       
        
        $posts = $this->Posts->get_posts();
        
        $data['posts'] = $posts;
        
        $data['title'] = 'Posts';
        
        if ($this->session->flashdata('success_message') !== FALSE) {
            $data['success_message'] = $this->session->flashdata('success_message');
        }
        
        $this->load->view('layout/header_page', $data);
        $this->load->view('blog/blog_page', $data);
        $this->load->view('layout/footer_page', $data);
    }
    
    
    
    /**
     * 
     * Shows single post based on the  post id
     * @param type $post_id
     * 
     * 
     */
    public function view($post_id) {
        $data = array();
        $post_details = $this->Posts->get_post_by_id($post_id);
        $data['post_details'] = $post_details;
        
        //echo '<pre>'.print_r($post_details, TRUE); die;
        $this->load->view('layout/header_page', $data);
        $this->load->view('blog/viewblog_page', $data);
        $this->load->view('layout/footer_page', $data);
        
    }
    
    
    /**
     * 
     * Edit post
     * @param type $post_id
     */
    public function edit($post_id) {
        $data = array();
        $post_details = $this->Posts->get_post_by_id($post_id);
          $data['post_details'] = $post_details;
          $this->load->view('layout/header_page', $data);
          $this->load->view('blog/editblog_page', $data);
          $this->load->view('layout/footer_page', $data);
        
        
        
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
        $this->load->view('layout/header_page');
        $this->load->view('blog/addblog_page');
        
    }
    
    
    public function storepost() {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        
        $this->Posts->add_post($title, $description);
        
        $this->session->set_flashdata('success_message', 'Post added Successfully');
        
        
        redirect(site_url('blog'));
    }
    
    
}

