<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Register extends BR_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Comfirm Password', 'required|matches[password]');
        
        if ($this->form_validation->run() === FALSE) {
            $this->show_views('register/register_page');
            
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $this->load->model('Users');
            
            $insert_data = array(
                'id' => NULL,
                'email' => $email,
                'password' => md5($password),
                'added_date' => date('Y-m-d H:i:s')
            );
            
            $response = $this->Users->saveUser($insert_data);
            
            if ($response) {
                $this->session->set_flashdata('success_message', 'Successfully Registered');
                redirect(site_url('login'));
            } else {
                //Log the error to database administrator
                $his->data['error_message'] = 'Some problem has occured. Please try again';
                $this->show_views('register/register_page');
            }
        }
        
        
    }
    
}

