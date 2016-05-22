<?php

class Login extends BR_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[10]');
        
        if ($this->form_validation->run() == false) {
            $this->show_views('login/login_page');
            
        } else {
            
        }
        
        
        
    }
}