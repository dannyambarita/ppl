<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
      $this->load->view('konten/home', $data);
      $this->load->view('templates/footer');
    } else {
      $this->load->view('templates/header2', $data);
      $this->load->view('konten/home', $data);
      $this->load->view('templates/footer2');
    }
  }

  public function profile()
  {
    $user =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    if ($user['role_id'] == 1) {
      redirect('admin');
    } else {
      redirect('user');
    }
  }
}
