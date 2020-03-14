<?php

class Roti extends CI_Controller 
    {
        $data['judul'] = 'Sign Up';
        public function signup() {
            $this->load->view('templates/header', $data);
            $this->load->view('sign/signup');
            $this->load->view('templates/footer');
        }

    }

    
?>