<?php

class Aboutus extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('login_model');
    $this->load->model('about_us_model');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['about'] = $this->about_us_model->about_us();
    if ($this->session->userdata('email') === null) {
      $this->load->view('templates/header', $data);
      $this->load->view('aboutus/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->load->view('templates/header2', $data);
      $this->load->view('aboutus/index', $data);
      $this->load->view('templates/footer');
    }
  }
}
