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

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');
        $this->form_validation->set_rules('age', 'Age', 'required|trim');
        //if ($this->form_validation->run() == false) {
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header2', $data);
            $this->load->view('editadmin/index', $data);
            //} else {
            //$this->edit_user->ubahdatauser();
            //$this->session->set_flashdata('flash', 'Edited Data');
            //redirect('admin');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $age = $this->input->post('age');
            $sex = $this->input->post('sex');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config = array(
                    'upload_path'          => './assets/img/profile',
                    'allowed_types'        => 'gif|jpg|png',
                    'overwrite'            => true,
                    'max_size'             => 1024
                );
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name_user', $name);
            $this->db->set('age_user', $age);
            $this->db->set('sex_user', $sex);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been Updated!</div>');
            redirect('admin');
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
