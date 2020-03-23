<?php

class Roti extends CI_Controller {
    

    public function index() {
        $data['judul'] = "Website Jon's Bakery - Our Product";
        $this->load->view('templates/header', $data);
        $this->load->view('roti/index');
        $this->load->view('templates/footer');
    }

    public function tambahdataroti() {

    }

    public function tambahkomentar(){
        $isi = $this->input->post('komentar');
        $lampiran =$_FILES['namalampiran']['name'];

        if($lampiran = ''){

        } else {
            $config['upload_path']      = './assets/';
            $config['allowed_types']    = 'jpg|png|gif';
            $config['file_name']        = date('Y-m-d H-i-s', time());
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('namalampiran')) {
                echo "upload gagal"; die();
            } else {
                $lampiran = $this->upload->data('file_name');
            }
            $data = array(
                'isi_laporan'=> $isi,
                'aspek'     => $aspek,
                'lampiran' => $lampiran
            );
        
            $this->laporan_model->input_laporan(laporan,$data);
        redirect('');
    }
}
} 
?>