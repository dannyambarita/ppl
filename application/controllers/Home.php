<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index()
  {
    $data['title'] = "Website Jon's Bakery";
    $this->load->view('templates/header');
    $this->load->view('konten/home');
    $this->load->view('templates/footer');
  }
}
