<?php

class Home extends CI_Controller {
    public function index() {
        $data['judul'] = "Website Jon's Bakery";
        $this->load->view('templates/header', $data);
        $this->load->view('konten/home',$data);
        $this->load->view('templates/footer');
    }
} 