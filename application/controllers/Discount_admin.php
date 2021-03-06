<?php

class Discount_admin extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model('discount_model');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diskon'] = $this->discount_model->data_diskon();

        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('discount_admin/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('discount_admin/index', $data);
        }
    }
    public function discountadd()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diskon'] = $this->discount_model->data_diskon();

        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('discount_admin/index3', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('discount_admin/index3', $data);
        }
    }
}
