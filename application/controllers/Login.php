<?php

class Login extends BR_Controller {
    
    public function __construct() {
        parent::__construct();
        
        if ($this->logged_in_id) {
            $this->session->set_flashdata('success_message', 'You are already logged in');
            redirect(site_url('blog'));
        }
        
    }
    
    public function index() {
        
        echo "hai"; die;
        
        $this->load->library('form_validation');        
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->show_views('login/login_page');
            
        } else {
            
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $this->load->model('Users');
            $user = $this->Users->check_user_exists($email, $password);
            
            if ( ! $user) {
                $this->data['error_message'] = 'Invalid Login Details';
                $this->show_views('login/login_page');
            } else  {
                
                $this->session->set_userdata($user);
                
                $this->session->set_flashdata('success_message', 'Welcome Dashboard');
                redirect(site_url('blog'));
                
            }            
            
        }
        
        
        
    }
}