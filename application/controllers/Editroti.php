<?php

class Editroti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('roti_model');
    }

    public function index($id)
    {
        $data['title'] = 'Edit Roti';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['roti'] = $this->roti_model->data_roti();
        $data['roti'] = $this->roti_model->data_roti_role();
        $data['roti'] = $this->roti_model->data_special_role();
        $where = array('id_roti' => $id);
        $data['roti'] = $this->roti_model->edit_roti($where, 'roti')->result();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('editroti/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('editroti/index', $data);
        }
    }
}
