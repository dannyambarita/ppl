<?php

class Location extends CI_Controller 
    {
        public function index() {
            $data['judul'] = " - Location";
            $this->load->view('templates/header', $data['judul']);
            $this->load->view('location/index');
            $this->load->view('templates/footer');
        }

    }

    
?>