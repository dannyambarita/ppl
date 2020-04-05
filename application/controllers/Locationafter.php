<?php

class Locationafter extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates2/header', $data);
        $this->load->view('locationafter/index', $data);
        $this->load->view('templates2/footer');
    }
}
