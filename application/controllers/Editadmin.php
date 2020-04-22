<?php

class Editadmin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('edit_user');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->session->userdata('email') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('editadmin/index', $data);
        } else {
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header2', $data);
                $this->load->view('editadmin/index', $data);
            } else {
                $this->edit_user->ubahdatauser();
                $this->session->set_flashdata('flash', 'Edited Data');
                redirect('admin');
            }
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['admin'] = $this->edit_user->edit_admin($id);
        $this->load->view('templates/header');
        $this->load->view('edit_user/edit_admin', $data);
    }
}
