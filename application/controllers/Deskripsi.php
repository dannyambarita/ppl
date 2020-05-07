<?php

class Deskripsi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('login_model');
    $this->load->model('roti_model');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //$data['roti'] = $this->roti_model->data_rotibyid();
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

  public function detail($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['roti'] = $this->roti_model->data_rotibyid($id);
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
