<?php

class Discountadmin_model extends CI_model
{
    public function tambahDataDiscount()
    {

        $upload_image = $_FILES['fotodiskon']['name'];
        if ($upload_image) {
            $config = array(
                'upload_path'          => './assets/img/roti',
                'allowed_types'        => 'gif|jpg|png',
                'overwrite'            => true,
                'max_size'             => 1024
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("fotodiskon")) {
                $image = $this->upload->data('file_name');
                $this->db->set('foto', $image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            "deskripsi" => $this->input->post('deskripsi', true),
          ];

        $this->db->insert('diskon', $data);
        redirect('discount_admin');
    }
}
 ?>
