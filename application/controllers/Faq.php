<?php

class Faq extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model('faq_model');
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->load->helper('form');
  }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['faq'] = $this->faq_model->getData();
        
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('faq/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('faq/index', $data);
        }
    }
}
