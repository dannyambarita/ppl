<?php

class rotiafter extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates2/header', $data);
        $this->load->view('rotiafter/index', $data);
        $this->load->view('templates2/footer');
    }

    public function tambahdataroti()
    {
    }

    public function tambahkomentar()
    {
        $isi = $this->input->post('komentar');
        $lampiran = $_FILES['namalampiran']['name'];

        if ($lampiran = '') {
        } else {
            $config['upload_path']      = './assets/';
            $config['allowed_types']    = 'jpg|png|gif';
            $config['file_name']        = date('Y-m-d H-i-s', time());
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('namalampiran')) {
                echo "upload gagal";
                die();
            } else {
                $lampiran = $this->upload->data('file_name');
            }
            $data = array(
                'isi_laporan' => $isi,
                'aspek'     => $aspek,
                'lampiran' => $lampiran
            );

            $this->laporan_model->input_laporan(laporan, $data);
            redirect('');
        }
    }
}
