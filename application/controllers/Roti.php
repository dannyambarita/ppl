<?php

class menuawal extends CI_Controller {
    public function index() {
        $this->load->model('roti_model');
        $data['judul'] = "Website Jon's Bakery";
        $data['roti'] = $this->roti_model->getAllroti();
        $this->load->view('templates/header', $data);
        $this->load->view('roti/index');
        $this->load->view('templates/footer');
    }

    public function tambahdataroti() {

    }
} 