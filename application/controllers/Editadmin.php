<?php

class Editadmin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('edit_user');
    }
    public function index()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('editadmin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('editadmin/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layouts/header');
        $this->load->view('edit_user/edit_admin', $data);
        $this->load->view('layouts/footer');
    }
}
