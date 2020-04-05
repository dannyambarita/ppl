<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates2/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates2/footer');
    }
}
