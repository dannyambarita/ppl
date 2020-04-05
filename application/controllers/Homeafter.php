<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homeafter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates2/header', $data);
        $this->load->view('homeafter/index', $data);
        $this->load->view('templates2/footer');
    }
}
