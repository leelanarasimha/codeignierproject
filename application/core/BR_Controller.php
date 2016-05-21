<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BR_Controller extends CI_Controller  {
    
    public $data = array();
    
    public function __construct() {
        parent::__construct();
    }
    
    
    protected function show_views($pages, $header_page = 'header_page', $footer_page = 'footer_page') {
        
        $this->load->view('layout/'.$header_page, $this->data);
        $this->load->view($pages, $this->data);
        $this->load->view('layout/'.$footer_page, $this->data);
        
    }
}

