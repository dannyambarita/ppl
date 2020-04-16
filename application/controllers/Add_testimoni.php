<?php

class Add_testimoni extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('komentar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Testimoni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komentar'] = $this->komentar_model->data_komentar();
        $this->form_validation->set_rules('testimoni', 'Testimoni', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            if ($this->session->userdata('email') === null) {
                $this->load->view('templates/header', $data);
                $this->load->view('add_testimoni/index', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/header2', $data);
                $this->load->view('add_testimoni/index', $data);
                $this->load->view('templates/footer');
            }
        } else {
            $this->komentar_model->tambahDataKomentar();
        }
    }
}
