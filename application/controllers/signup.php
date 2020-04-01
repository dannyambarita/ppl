<?php

class Signup extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('pengguna_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = "Website Jon's Bakery - Sign Up";

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if( $this->form_validation->run()==FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('signup/index');
        $this->load->view('templates/footer');
    } else {
        $this->pengguna_model->tambahDataPengguna();
        redirect('home');
    }
    }
}
?>