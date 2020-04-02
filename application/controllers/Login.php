<?php

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = "Website Jon's Bakery - Login";

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if( $this->form_validation->run()==FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('login/index');
            $this->load->view('templates/footer');
        } else {
        $this->login_model->masukDataPengguna();
        redirect('home');
        }
    }
}