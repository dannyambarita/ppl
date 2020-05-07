<?php

class Faqadd extends CI_Controller{
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

        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('faqadd/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('faqadd/index', $data);
        }
    }

    public function faqdb(){
      $data = [
          "question" => $this->input->post('pertanyaan', true),
          "answer" => $this->input->post('jawaban', true)
      ];
      $this->faq_model->faqadd($data);
      redirect ('faq');
    }

    public function faqdel($id){
      $this->faq_model->hapusData($id);
      redirect ('faq');
    }
}
