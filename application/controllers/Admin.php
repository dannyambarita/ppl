<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
    }

    public function index()
    {
        $data['title'] = "Dashboard Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('admin/index', $data);
        }
    }
}
