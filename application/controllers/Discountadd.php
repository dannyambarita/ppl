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
      $config['upload_path']          = './assets/img/roti/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = "diskon-" . date("d-m-Y") . "-" . date("h:i:sa");
      $config['overwrite']			      = true;
      $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $namafoto = $this->upload->data("file_name");
        }else{
          $namafoto = "default.jpg";
        }
        $data = [
            "deskripsi" => $this->input->post('deskripsi', true),
        ];
        
        $this->discountadmin_model->discountadd($namafoto, $data);

        redirect('discount_admin');

    }

    public function discountdel ($id){
      $product = $this->discountadmin_model->getNamaGambar($id);
      if ($product != "default.jpg") {
	       $filename = explode(".", $product)[0];
		     $hapus = array_map('unlink', glob(FCPATH."assets/img/roti/$filename.*"));
      }

      $this->discountadmin_model->hapusGambar($id);

      redirect('discount_admin');
    }
}
