<?php

class Discountadd extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('discountadmin_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->helper('form');
  }

  public function index()
  {
    $data = [
      "deskripsi" => $this->input->post('deskripsi', true),
      "persen" => $this->input->post('diskon', true),
      "harga" => $this->input->post('harga', true)
    ];

    $upload_image = $_FILES['userfile']['name'];
    if ($upload_image) {
      $config = array(
        'upload_path'          => './assets/img/roti',
        'allowed_types'        => 'gif|jpg|png',
        'file_name'            => "diskon-" . date("d-m-Y") . "-" . date("h:i:sa"),
        'overwrite'            => true,
        'max_size'             => 1024
      );
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('userfile')) {
        $image = $this->upload->data('file_name');
        $this->db->set('foto', $image);
      } else {
        echo $this->upload->display_errors();
      }
    }
    $this->db->insert('diskon', $data);

    redirect('discount_admin');
  }

  public function discountdel($id)
  {
    $product = $this->discountadmin_model->getNamaGambar($id);
    if ($product != "default.jpg") {
      $filename = explode(".", $product)[0];
      $hapus = array_map('unlink', glob(FCPATH . "assets/img/roti/$filename.*"));
    }

    $this->discountadmin_model->hapusGambar($id);

    redirect('discount_admin');
  }
}
