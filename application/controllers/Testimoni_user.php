<?php

class Testimoni_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('komentar_model');
    }

    public function index()
    {
        $data['title'] = 'Testimoni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komentar'] = $this->db->get_where('komentar', ['id_user' => $this->session->userdata('id_user')])->result_array();
        //if ($this->form_validation->run() == FALSE) {
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('testimoni_user/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('testimoni_user/index', $data);
            $this->load->view('templates/footer');
        }
        // } else {
        // $this->komentar_model->tambahDataKomentar();
        // }
    }

    public function hapus($id)
    {
        $this->komentar_model->hapus_komentar($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('testimoni_user');
    }
}
