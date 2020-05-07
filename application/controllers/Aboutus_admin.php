<?php

class Aboutus_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->model('about_us_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['about'] = $this->about_us_model->about_us();

        $this->form_validation->set_rules('description', 'Description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header2', $data);
            $this->load->view('aboutus_admin/index', $data);
        } else {
            $description = $this->input->post('description');
            $this->db->set('deskripsi', $description);
            redirect('aboutus');
        }
    }

    public function edit(){

          $deskripsi = $this->input->post('description', true);
          $currentfoto = $this->input->post('currentfoto', true);


      $config['upload_path']          = './assets/img/aboutus/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = "aboutus-" . date("d-m-Y") . "-" . date("h:i:sa");
      $config['overwrite']			      = true;
      $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto-about')) {
            $namafoto = $this->upload->data("file_name");
        }else{
          $namafoto = $currentfoto;
        }

        $this->about_us_model->update($deskripsi, $namafoto);
        redirect('aboutus_admin');
    }
}
