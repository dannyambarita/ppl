<?php

class Locationadd extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model('locationadmin_model');
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
            $this->load->view('locationadd/index', $data);
        } else {
            $this->load->view('templates/header2', $data);
            $this->load->view('locationadd/index', $data);
        }
    }

    public function locationdb(){
      $config['upload_path']          = './assets/img/toko/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = "toko-" . date("d-m-Y") . "-" . date("h:i:sa");
      $config['overwrite']			      = true;
      $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filetoko')) {
            $namafoto = $this->upload->data("file_name");
        }else{
          $namafoto = "default.jpg";
        }
        $data = [
            "provinsi" => $this->input->post('provinsi', true),
            "alamat" => $this->input->post('alamat', true),
            "hari1" => $this->input->post('hari1', true),
            "hari2" => $this->input->post('hari2', true),
            "jam1" => $this->input->post('jam1', true),
            "jam2" => $this->input->post('jam2', true),
            "keterangan" => $this->input->post('keterangan', true),
            "link" => $this->input->post('link', true),
        ];

        $this->locationadmin_model->locationadd($namafoto, $data);
        redirect('location_admin');

    }

    public function locationdel ($id){
      $product = $this->locationadmin_model->getNamaGambar($id);
      if ($product != "default.jpg") {
	       $filename = explode(".", $product)[0];
		     $hapus = array_map('unlink', glob(FCPATH."assets/img/toko/$filename.*"));
      }

      $this->locationadmin_model->hapusData($id);
      redirect('location_admin');
    }

}
