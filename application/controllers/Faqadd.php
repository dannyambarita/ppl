<?php

class Faqadd extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('faqadd/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('faqadd/index', $data);
        }
    }
}
