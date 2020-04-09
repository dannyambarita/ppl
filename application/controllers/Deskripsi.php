<?php

class Deskripsi extends CI_Controller 
{
    function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('login_model');
    }
  
    public function index()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      if ($this->session->userdata('email') === null) {
        $this->load->view('templates/header', $data);
        $this->load->view('deskripsi/index', $data);
        $this->load->view('templates/footer');
      } else {
        $this->load->view('templates/header2', $data);
        $this->load->view('deskripsi/index', $data);
        $this->load->view('templates/footer');
      }
    }
}
