<?php

class Roti extends CI_Controller {
public function __construct() {
    parent::__construct();
    $this->load->model('roti_model');
}
    
        $data['judul'] = 'Sign up';
        public function signup() {
            $this->load->view('templates/header', $data);
            $this->load->view('sign/signup');
            $this->load->view('templates/footer');
        }

    }

    
?>