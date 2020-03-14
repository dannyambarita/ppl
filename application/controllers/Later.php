<?php

class Later extends CI_Controller 
    {
        public function index() {
            $data['judul'] = "Website Jon's Bakery";
            $this->load->view('templates/header', $data);
            $this->load->view('later/index');
            $this->load->view('templates/footer');
        }

    }

    
?>