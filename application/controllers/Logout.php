<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logout extends BR_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->session->sess_destroy();
        
        $this->session->set_flashdata('success_message', 'You are successfully logged out');
        redirect(site_url('login'));
    }
}


