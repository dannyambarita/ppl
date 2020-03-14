<?php

class signup extends CI_Controller {
public function __construct() {
    parent::__construct();
    $this->load->model('signup_model');
    $this->load->library('form_validation');
}
    
        
        public function signup() {
            $data['judul'] = 'Sign up';

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            
            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/header');
                $this->load->view('templates/footer');
            } else {
                echo "Berhasil sign up";
            }
        }

    }

    
?>